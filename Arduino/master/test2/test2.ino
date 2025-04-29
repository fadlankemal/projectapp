#include <WiFi.h>
#include <Wire.h>
#include "PCF8574.h"

const char* ssid = "Babeh Kanta";
const char* pass = "kemalasukanta27";
const char* server = "192.168.0.11";

String variabel;
String Respon = "";
bool responDariServer = false;

bool rake = false;
bool rakf = false;
long waktuMulai;
long waktuMintaData = 1000;  //minta data setiap 5000ms

WiFiClient client;
PCF8574 i2c1(0x20);
PCF8574 i2c2(0x21);
PCF8574 i2c3(0x22);
PCF8574 i2c4(0x23);
PCF8574 i2c5(0x25);
PCF8574 i2c6(0x27);

const int buttonPin = 35;  // pushbutton nya dihubungin ke pin berapa
const int buzzer = 32;     // LEDnya (katoda) dihubungin ke pin berapa

// variable yang akan berubah (yang menunjukkan kondisi pushbutton
int buttonState = 0;  // variable buttonState diinisiasi 0

void setup() {
  Serial.begin(115200);

  WiFi.begin(ssid, pass);
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }

  // you're connected now, so print out the data
  Serial.println("You're connected to the network");

  pinMode(buttonPin, INPUT);

  // menginisialisasi pin LED sebagai output
  pinMode(buzzer, OUTPUT);

  i2c1.pinMode(0, OUTPUT);
  i2c1.pinMode(1, OUTPUT);
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

  printWifiStatus();
  waktuMulai = millis();
}

void loop() {
  //tunggu imputan nilai dari untuk dikirim ke server
  if (waktuMintaData < millis() - waktuMulai) {
    rake = ambilDatabase();
    waktuMulai = millis();
  }

  // periksa respon dari server
  if (rake) {
    // if there are incoming bytes available
    // from the server, read them and print them
    while (client.available()) {
      char c = client.read();
      Respon += c;
    }
    if (!client.connected()) {
      rake = false;
      responDariServer = true;
    }
  }

  // penanganan data yang diretima dari server
  if (responDariServer) {
    responDariServer = false;
    //Serial.println(Respon);
    int posisiData = Respon.indexOf("\r\n\r\n");
    String Data = Respon.substring(posisiData + 4);
    Data.trim();

    String variabel;
    String nilai;

    // Serial.println("Data dari server");
    posisiData = Data.indexOf('=');
    if (posisiData > 0) {
      variabel = Data.substring(0, posisiData);
      nilai = Data.substring(posisiData + 1);

      //===========Penanganan respon disini
      Serial.print(variabel);
      Serial.print(" = ");
      Serial.println(nilai);

      if (variabel == "rake") {
        if (nilai == "0") {
          Serial.println("Mati");
          i2c1.digitalWrite(0, HIGH);
          i2c1.digitalWrite(1, HIGH);
          i2c1.digitalWrite(2, HIGH);
          i2c1.digitalWrite(3, HIGH);
          i2c1.digitalWrite(4, HIGH);
          i2c1.digitalWrite(5, HIGH);
          i2c1.digitalWrite(6, HIGH);
          i2c1.digitalWrite(7, HIGH);
          i2c2.digitalWrite(0, HIGH);
          i2c2.digitalWrite(1, HIGH);
          i2c2.digitalWrite(2, HIGH);
          i2c2.digitalWrite(3, HIGH);
          i2c2.digitalWrite(4, HIGH);
          i2c2.digitalWrite(5, HIGH);
          i2c2.digitalWrite(6, HIGH);
          i2c2.digitalWrite(7, HIGH);
          i2c3.digitalWrite(0, HIGH);
          i2c3.digitalWrite(1, HIGH);
          i2c3.digitalWrite(2, HIGH);
          i2c3.digitalWrite(3, HIGH);
          i2c3.digitalWrite(4, HIGH);
          i2c3.digitalWrite(5, HIGH);
          i2c3.digitalWrite(6, HIGH);
          i2c3.digitalWrite(7, HIGH);
          i2c4.digitalWrite(0, HIGH);
          i2c4.digitalWrite(1, HIGH);
          i2c4.digitalWrite(2, HIGH);
          i2c4.digitalWrite(3, HIGH);
          i2c4.digitalWrite(4, HIGH);
          i2c4.digitalWrite(5, HIGH);
          i2c4.digitalWrite(6, HIGH);
          i2c4.digitalWrite(7, HIGH);
          
        }
        if (nilai == "1") {
          Serial.println("nomor 1 hidup");
          i2c1.digitalWrite(0, LOW);
          i2c1.digitalWrite(1, HIGH);
          i2c1.digitalWrite(2, HIGH);
          i2c1.digitalWrite(3, HIGH);
          i2c1.digitalWrite(4, HIGH);
          i2c1.digitalWrite(5, HIGH);
          i2c1.digitalWrite(6, HIGH);
          i2c1.digitalWrite(7, HIGH);
        }
        if (nilai == "2") {
          Serial.println("nomor 2 hidup");
          i2c1.digitalWrite(0, HIGH);
          i2c1.digitalWrite(1, LOW);
          i2c1.digitalWrite(2, HIGH);
          i2c1.digitalWrite(3, HIGH);
          i2c1.digitalWrite(4, HIGH);
          i2c1.digitalWrite(5, HIGH);
          i2c1.digitalWrite(6, HIGH);
          i2c1.digitalWrite(7, HIGH);
        }
        if (nilai == "3") {
          Serial.println("nomor 3 hidup");
          i2c1.digitalWrite(0, HIGH);
          i2c1.digitalWrite(1, HIGH);
          i2c1.digitalWrite(2, LOW);
          i2c1.digitalWrite(3, HIGH);
          i2c1.digitalWrite(4, HIGH);
          i2c1.digitalWrite(5, HIGH);
          i2c1.digitalWrite(6, HIGH);
          i2c1.digitalWrite(7, HIGH);
        }
        if (nilai == "4") {
          Serial.println("nomor 4 hidup");
          i2c1.digitalWrite(0, HIGH);
          i2c1.digitalWrite(1, HIGH);
          i2c1.digitalWrite(2, HIGH);
          i2c1.digitalWrite(3, LOW);
          i2c1.digitalWrite(4, HIGH);
          i2c1.digitalWrite(5, HIGH);
          i2c1.digitalWrite(6, HIGH);
          i2c1.digitalWrite(7, HIGH);
        }
        if (nilai == "5") {
          Serial.println("nomor 5 hidup");
          i2c1.digitalWrite(0, HIGH);
          i2c1.digitalWrite(1, HIGH);
          i2c1.digitalWrite(2, HIGH);
          i2c1.digitalWrite(3, HIGH);
          i2c1.digitalWrite(4, LOW);
          i2c1.digitalWrite(5, HIGH);
          i2c1.digitalWrite(6, HIGH);
          i2c1.digitalWrite(7, HIGH);
        }
        if (nilai == "6") {
          Serial.println("nomor 6 hidup");
          i2c1.digitalWrite(0, HIGH);
          i2c1.digitalWrite(1, HIGH);
          i2c1.digitalWrite(2, HIGH);
          i2c1.digitalWrite(3, HIGH);
          i2c1.digitalWrite(4, HIGH);
          i2c1.digitalWrite(5, LOW);
          i2c1.digitalWrite(6, HIGH);
          i2c1.digitalWrite(7, HIGH);
        }
        if (nilai == "7") {
          Serial.println("nomor 7 hidup");
          i2c1.digitalWrite(0, HIGH);
          i2c1.digitalWrite(1, HIGH);
          i2c1.digitalWrite(2, HIGH);
          i2c1.digitalWrite(3, HIGH);
          i2c1.digitalWrite(4, HIGH);
          i2c1.digitalWrite(5, HIGH);
          i2c1.digitalWrite(6, LOW);
          i2c1.digitalWrite(7, HIGH);
        }
        if (nilai == "8") {
          Serial.println("nomor 8 hidup");
          i2c1.digitalWrite(0, HIGH);
          i2c1.digitalWrite(1, HIGH);
          i2c1.digitalWrite(2, HIGH);
          i2c1.digitalWrite(3, HIGH);
          i2c1.digitalWrite(4, HIGH);
          i2c1.digitalWrite(5, HIGH);
          i2c1.digitalWrite(6, HIGH);
          i2c1.digitalWrite(7, LOW);
        }
        if (nilai == "9") {
          Serial.println("nomor 9 hidup");
          i2c2.digitalWrite(0, LOW);
          i2c2.digitalWrite(1, HIGH);
          i2c2.digitalWrite(2, HIGH);
          i2c2.digitalWrite(3, HIGH);
          i2c2.digitalWrite(4, HIGH);
          i2c2.digitalWrite(5, HIGH);
          i2c2.digitalWrite(6, HIGH);
          i2c2.digitalWrite(7, HIGH);
        }
        if (nilai == "10") {
          Serial.println("nomor 10 hidup");
          i2c2.digitalWrite(0, HIGH);
          i2c2.digitalWrite(1, LOW);
          i2c2.digitalWrite(2, HIGH);
          i2c2.digitalWrite(3, HIGH);
          i2c2.digitalWrite(4, HIGH);
          i2c2.digitalWrite(5, HIGH);
          i2c2.digitalWrite(6, HIGH);
          i2c2.digitalWrite(7, HIGH);
        }
        if (nilai == "11") {
          Serial.println("nomor 11 hidup");
          i2c2.digitalWrite(0, HIGH);
          i2c2.digitalWrite(1, HIGH);
          i2c2.digitalWrite(2, LOW);
          i2c2.digitalWrite(3, HIGH);
          i2c2.digitalWrite(4, HIGH);
          i2c2.digitalWrite(5, HIGH);
          i2c2.digitalWrite(6, HIGH);
          i2c2.digitalWrite(7, HIGH);
        }
        if (nilai == "12") {
          Serial.println("nomor 12 hidup");
          i2c2.digitalWrite(0, HIGH);
          i2c2.digitalWrite(1, HIGH);
          i2c2.digitalWrite(2, HIGH);
          i2c2.digitalWrite(3, LOW);
          i2c2.digitalWrite(4, HIGH);
          i2c2.digitalWrite(5, HIGH);
          i2c2.digitalWrite(6, HIGH);
          i2c2.digitalWrite(7, HIGH);
        }
        if (nilai == "13") {
          Serial.println("nomor 13 hidup");
          i2c2.digitalWrite(0, HIGH);
          i2c2.digitalWrite(1, HIGH);
          i2c2.digitalWrite(2, HIGH);
          i2c2.digitalWrite(3, HIGH);
          i2c2.digitalWrite(4, LOW);
          i2c2.digitalWrite(5, HIGH);
          i2c2.digitalWrite(6, HIGH);
          i2c2.digitalWrite(7, HIGH);
        }
        if (nilai == "14") {
          Serial.println("nomor 14 hidup");
          i2c2.digitalWrite(0, HIGH);
          i2c2.digitalWrite(1, HIGH);
          i2c2.digitalWrite(2, HIGH);
          i2c2.digitalWrite(3, HIGH);
          i2c2.digitalWrite(4, HIGH);
          i2c2.digitalWrite(5, LOW);
          i2c2.digitalWrite(6, HIGH);
          i2c2.digitalWrite(7, HIGH);
        }
        if (nilai == "15") {
          Serial.println("nomor 15 hidup");
          i2c2.digitalWrite(0, HIGH);
          i2c2.digitalWrite(1, HIGH);
          i2c2.digitalWrite(2, HIGH);
          i2c2.digitalWrite(3, HIGH);
          i2c2.digitalWrite(4, HIGH);
          i2c2.digitalWrite(5, HIGH);
          i2c2.digitalWrite(6, LOW);
          i2c2.digitalWrite(7, HIGH);
        }
        if (nilai == "16") {
          Serial.println("nomor 16 hidup");
          i2c2.digitalWrite(0, HIGH);
          i2c2.digitalWrite(1, HIGH);
          i2c2.digitalWrite(2, HIGH);
          i2c2.digitalWrite(3, HIGH);
          i2c2.digitalWrite(4, HIGH);
          i2c2.digitalWrite(5, HIGH);
          i2c2.digitalWrite(6, HIGH);
          i2c2.digitalWrite(7, LOW);
        }
        
        buttonState = digitalRead(buttonPin);
        //menulis di serial monitor tentang status push buttonnya ( 0 bila ditekan, 1 bila tidak. angka bisa berubah tergantung pengaturan serial begin atau monitornya

        if (buttonState == 1) {  //bisa juga buttonState == HIGH
          // Mengatur tegangan yang melalui LED tinggi:
          variabel = "rake";
          nilai = "0";
          Serial.println("Reset");
          kirimKeDatabase(variabel, nilai);
          digitalWrite(buzzer, HIGH);
          delay(500);
        } else {
          digitalWrite(buzzer, LOW);  // Mengatur tegangan yang melalui LED rendah:
        }

        Respon = "";
        Serial.println("Disconnecting from server...");
        client.stop();
      }
    }
  }
}

bool kirimKeDatabase(String variabel, String nilai) {
  Serial.println();
  // if you get a connection, report back via serial
  if (client.connect(server, 80)) {
    Serial.println("Connected to server");
    // Make a HTTP request
    Serial.print(variabel);
    Serial.print(" = ");
    Serial.println(nilai);
    // parameter 1
    client.print("GET /arduino_mysql/dariArduino.php?");
    client.print("variabel=");
    client.print(variabel);

    // parameter 2 dan selanjutnya
    client.print("&");
    client.print("nilai=");
    client.print(nilai);

    client.println(" HTTP/1.1");
    client.print("Host: ");
    client.println(server);
    client.println("Connection: close");
    client.println();

    return true;
  }
  return false;
}

bool ambilDatabase() {
  Serial.println();
  string = variabel;
  Serial.println("Starting connection to server...");
  // if you get a connection, report back via serial
  if (client.connect(server, 80)) {
    Serial.println("Connected to server");
    // Make a HTTP request
    client.print("GET /arduino_mysql/keArduino.php?variabel=");
    client.print(variabel);
    client.println(" HTTP/1.1");
    client.print("Host: ");
    client.println(server);
    client.println("Connection: close");
    client.println();

    long _startMillis = millis();
    while (!client.available() and (millis() - _startMillis < 2000))
      ;

    return true;
  }
  return false;
}


void printWifiStatus() {
  // print the SSID of the network you're attached to
  Serial.print("SSID: ");
  Serial.println(WiFi.SSID());
  IPAddress ip = WiFi.localIP();
  Serial.print("IP Address: ");
  Serial.println(ip);

  // print the received signal strength
  long rssi = WiFi.RSSI();
  Serial.print("Signal strength (RSSI):");
  Serial.print(rssi);
  Serial.println(" dBm");

  IPAddress gateway = WiFi.gatewayIP();
  Serial.print("gateway:");
  Serial.print(gateway);
  Serial.println(" ");
}
