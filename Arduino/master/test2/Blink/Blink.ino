#include "PCF8574.h"
#include "Wire.h"

PCF8574 i2c1(0x20);

byte variabel;
byte nilai;

void setup() {
  Serial.begin(115200);

  i2c1.pinMode(0, OUTPUT);
  i2c1.pinMode(1, OUTPUT);
  i2c1.pinMode(2, OUTPUT);
  i2c1.pinMode(3, OUTPUT);
  i2c1.pinMode(4, OUTPUT);
  i2c1.pinMode(5, OUTPUT);
  i2c1.pinMode(6, OUTPUT);
  i2c1.pinMode(7, OUTPUT);

  Wire.begin(1);
  i2c1.begin();
  Wire.onReceive(Blink);
}

void loop() {
  delay(1000);
}

void Blink() {
  variabel = Wire.read();
  nilai = Wire.read();

  if (variabel == rake) {
    if (nilai == "11") {
      Serial.println("Rak E")
        Serial.println("Nomor 11")
          i2c1.digitalWrite(0, HIGH);
      i2c1.digitalWrite(1, HIGH);
      i2c1.digitalWrite(2, HIGH);
      i2c1.digitalWrite(3, HIGH);
    } 
    else (nilai == "12") {
        Serial.println("Rak E")
          Serial.println("Nomor 12")
            i2c1.digitalWrite(4, HIGH);
        i2c1.digitalWrite(5, HIGH);
        i2c1.digitalWrite(6, HIGH);
        i2c1.digitalWrite(7, HIGH);
      }
  }
  else 
  {
    Serial.print("Nothing to blinking")
  }
}