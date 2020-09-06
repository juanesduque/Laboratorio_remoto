#!/bin/bash

#if [ -f fichero1.txt ];
#then
#rm fichero1.txt
#fi

#touch fichero.txt
#sudo chmod 777 fichero.txt
sudo echo 1 > /sys/bus/iio/devices/iio:device0/scan_elements/in_voltage4_en
sudo echo 20 > /sys/bus/iio/devices/iio:device0/buffer/length
sudo echo 1 > /sys/bus/iio/devices/iio:device0/buffer/enable

PID=$(pgrep buffer.sh)
hexdump -x /dev/iio:device0 >> fichero1.txt & ./matar.sh $PID

