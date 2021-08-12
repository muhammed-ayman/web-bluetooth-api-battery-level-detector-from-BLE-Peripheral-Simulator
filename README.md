# Web Bluetooth API Battery Level Notifications Detector From BLE Peripheral Simulator

An implementation of the Web Bluetooth API to detect the battery level notifications from an instance of the BLE Peripheral Simulator app and save them in a data base such that they could be retrieved later

## How to run?

1. You need to have a running apache server with the project files in it (You can use XAMPP)
2. You need to have a localhost MySQL database named 'battery_level_detector' with a table named 'data'
3. In the data table, you need to have three columns as follows:
  1.&nbsp;id: autoincremented
  2.&nbsp;data: VARCHAR
  3.&nbsp;timestamp: TIMESTAMP
4. You need to download the BLE Peripheral Simulator on your Android Device and Open the Bluetooth
5. You should open the battery level service to start advertising
6. Open the web application on and only on chrome browser and have fun!
