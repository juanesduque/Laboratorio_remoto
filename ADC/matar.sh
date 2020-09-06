#!/bin/bash
#echo $1
# Wait for 2 seconds
sleep 1
sudo echo 0 > /sys/bus/iio/devices/iio:device0/buffer/enable
matHex=$(pgrep hexdump)
# Kill it
sudo kill $1
sudo kill $matHex
