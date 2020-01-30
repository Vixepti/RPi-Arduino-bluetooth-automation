#include <SoftwareSerial.h>
#define RxD 2
#define TxD 3
SoftwareSerial BTSerie(RxD,TxD);

void setup() {
  Serial.begin(9600);
  pinMode(RxD, INPUT);
  pinMode(TxD, OUTPUT);  
  BTSerie.begin(9600);
  pinMode(9, OUTPUT);
}

void loop() {
  if (BTSerie.available() != 0) {
    int val = BTSerie.read();
    BTSerie.write(val);
    if (val == 'h') {
      digitalWrite(9, HIGH);
    }
    else if (val == 'l') {
      digitalWrite(9, LOW);
    }
  }
}
