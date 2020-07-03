#!/bin/bash
echo "Led"

echo out > /sys/class/gpio/gpio27//direction
echo 0 > /sys/class/gpio/gpio27/value