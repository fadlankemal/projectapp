#include <ESP32SPISlave.h>

ESP32SPISlave slave;

static constexpr uint32_t BUFFER_SIZE { 1 };
uint8_t spi_slave_tx_buf[BUFFER_SIZE];
uint8_t spi_slave_rx_buf[BUFFER_SIZE];

const int size_arr = 151;
char buf[size_arr];

volatile int pos = 0;
volatile bool active;
volatile bool process;

String received;

void setup() {
    Serial.begin(115200);
    slave.setDataMode(SPI_MODE0);
    slave.begin(VSPI);

    memset(spi_slave_tx_buf, 0, BUFFER_SIZE);
    memset(spi_slave_rx_buf, 0, BUFFER_SIZE);
}

void loop() {
    recvHandle();
    spiHandler();
}

void spiHandler() {
  slave.wait(spi_slave_rx_buf, spi_slave_tx_buf, BUFFER_SIZE);
    
  while (slave.available()) {
      char c = spi_slave_rx_buf[0];
      if (c == '\n') {
        buf[pos] = '\0';
        process = true;
      } else {
        buf[pos++] = c;
      }
      slave.pop();
  }
}

void recvHandle() {
  if (process) {
    received = String(buf);
    process = false;
    pos = 0;
    Serial.println(received);
    delayMicroseconds(20);
  }
}