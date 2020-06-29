#!/bin/bash
echo "Led"

echo out > /sys/class/gpio/gpio27//direction

for ((cont = 0; cont <= 10; cont++)); do
  echo 1 > /sys/class/gpio/gpio27/value
  sleep 1
  echo 0 > /sys/class/gpio/gpio27/value
  sleep 1
done