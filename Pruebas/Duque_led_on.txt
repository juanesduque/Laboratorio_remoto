#!/bin/bash
echo "Led on"

echo out > /sys/class/gpio/gpio27//direction
echo 1 > /sys/class/gpio/gpio27/value