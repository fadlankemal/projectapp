#include "PCF8574.h"

PCF8574 i2c1(0x20);
PCF8574 i2c2(0x21);
PCF8574 i2c3(0x22);
PCF8574 i2c4(0x23);
PCF8574 i2c5(0x25);
PCF8574 i2c6(0x27);


void setup() {
  // put your setup code here, to run once:
  Serial.begin(115200);

  i2c1.pinMode(1, OUTPUT);
  i2c1.pinMode(0, OUTPUT);
  i2c1.pinMode(2, OUTPUT);
  i2c1.pinMode(3, OUTPUT);
  i2c1.pinMode(4, OUTPUT);
  i2c1.pinMode(5, OUTPUT);
  i2c1.pinMode(6, OUTPUT);
  i2c1.pinMode(7, OUTPUT);
  i2c2.pinMode(0, OUTPUT);
  i2c2.pinMode(1, OUTPUT);
  i2c2.pinMode(2, OUTPUT);
  i2c2.pinMode(3, OUTPUT);
  i2c2.pinMode(4, OUTPUT);
  i2c2.pinMode(5, OUTPUT);
  i2c2.pinMode(6, OUTPUT);
  i2c2.pinMode(7, OUTPUT);
  i2c3.pinMode(0, OUTPUT);
  i2c3.pinMode(1, OUTPUT);
  i2c3.pinMode(2, OUTPUT);
  i2c3.pinMode(3, OUTPUT);
  i2c3.pinMode(4, OUTPUT);
  i2c3.pinMode(5, OUTPUT);
  i2c3.pinMode(6, OUTPUT);
  i2c3.pinMode(7, OUTPUT);
  i2c4.pinMode(0, OUTPUT);
  i2c4.pinMode(1, OUTPUT);
  i2c4.pinMode(2, OUTPUT);
  i2c4.pinMode(3, OUTPUT);
  i2c4.pinMode(4, OUTPUT);
  i2c4.pinMode(5, OUTPUT);
  i2c4.pinMode(6, OUTPUT);
  i2c4.pinMode(7, OUTPUT);
  i2c5.pinMode(0, OUTPUT);
  i2c5.pinMode(1, OUTPUT);
  i2c5.pinMode(2, OUTPUT);
  i2c5.pinMode(3, OUTPUT);
  i2c5.pinMode(4, OUTPUT);
  i2c5.pinMode(5, OUTPUT);
  i2c5.pinMode(6, OUTPUT);
  i2c5.pinMode(7, OUTPUT);


  i2c1.begin();
  i2c2.begin();
  i2c3.begin();
  i2c4.begin();
  i2c5.begin();
}

void loop() {
  // put your main code here, to run repeatedly:
  i2c1.digitalWrite(0, LOW);
  i2c1.digitalWrite(1, LOW);
  i2c1.digitalWrite(2, LOW);
  i2c1.digitalWrite(3, LOW);
  i2c1.digitalWrite(4, LOW);
  i2c1.digitalWrite(5, LOW);
  i2c1.digitalWrite(6, LOW);
  i2c1.digitalWrite(7, LOW);
  i2c2.digitalWrite(0, LOW);
  i2c2.digitalWrite(1, LOW);
  i2c2.digitalWrite(2, LOW);
  i2c2.digitalWrite(3, LOW);
  i2c2.digitalWrite(4, LOW);
  i2c2.digitalWrite(5, LOW);
  i2c2.digitalWrite(6, LOW);
  i2c2.digitalWrite(7, LOW);
  i2c3.digitalWrite(0, LOW);
  i2c3.digitalWrite(1, LOW);
  i2c3.digitalWrite(2, LOW);
  i2c3.digitalWrite(3, LOW);
  i2c3.digitalWrite(4, LOW);
  i2c3.digitalWrite(5, LOW);
  i2c3.digitalWrite(6, LOW);
  i2c3.digitalWrite(7, LOW);
  i2c4.digitalWrite(0, LOW);
  i2c4.digitalWrite(1, LOW);
  i2c4.digitalWrite(2, LOW);
  i2c4.digitalWrite(3, LOW);
  i2c4.digitalWrite(4, LOW);
  i2c4.digitalWrite(5, LOW);
  i2c4.digitalWrite(6, LOW);
  i2c4.digitalWrite(7, LOW);
  i2c5.digitalWrite(0, LOW);
  i2c5.digitalWrite(1, LOW);
  i2c5.digitalWrite(2, LOW);
  i2c5.digitalWrite(3, LOW);
  i2c5.digitalWrite(4, LOW);
  i2c5.digitalWrite(5, LOW);
  i2c5.digitalWrite(6, LOW);
  i2c5.digitalWrite(7, LOW);
}