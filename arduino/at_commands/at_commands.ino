#include <SoftwareSerial.h>

SoftwareSerial hc06(2,3);

void setup(){
  Serial.begin(9600);
  Serial.println("AT Commands :");
  
  hc06.begin(9600);
}

void loop(){
  // HC06 to USB Serial Monitor
  if (hc06.available()){
    Serial.write(hc06.read());
  }
  
  // USB Serial Monitor to HC06
  if (Serial.available()){
    hc06.write(Serial.read());
  }  
}
