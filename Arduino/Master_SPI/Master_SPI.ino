#include <SPI.h>

#ifdef ALTERNATE_PINS
  #define VSPI_MISO   19
  #define VSPI_MOSI   23
  #define VSPI_SCLK   18
  #define VSPI_SS     5
#else
  #define VSPI_MISO   MISO
  #define VSPI_MOSI   MOSI
  #define VSPI_SCLK   SCK
  #define VSPI_SS     SS
#endif

static const int spiClk = 1000000; // 1 MHz

char input;

const int size_arr = 25;
char buf[size_arr];
String sendData = "Hello from Master";

//uninitalised pointers to SPI objects
SPIClass* vspi = NULL;

void setup() {
    Serial.begin(115200);
    
    vspi = new SPIClass(VSPI);
    
#ifndef ALTERNATE_PINS
    vspi->begin();
#else
    vspi->begin(VSPI_SCLK, VSPI_MISO, VSPI_MOSI, VSPI_SS);
#endif

    pinMode(VSPI_SS, OUTPUT); //HSPI SS

    vspi->beginTransaction(SPISettings(spiClk, MSBFIRST, SPI_MODE0));
}

void loop() {
    input = Serial.read();
    
    if(input == 's'){
      sendData.toCharArray(buf, size_arr);
      spi_transmis(VSPI_SS, buf);
    }
    delay(50);
}

void send_spi(int selectPin, byte pram) {
    digitalWrite(selectPin, LOW);
    vspi->transfer(pram);
    digitalWrite(selectPin, HIGH); 
    vspi->endTransaction();
    delayMicroseconds(75);
}

void spi_transmis(int selectPin, char buf[]) {
  for (int i = 0; i < size_arr; i++) {
    send_spi(selectPin, buf[i]);
  }
  send_spi(selectPin, '\n');
}