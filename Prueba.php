
<?php

system("echo out > /sys/class/gpio/gpio65/direction");
system("echo out > /sys/class/gpio/gpio61/direction");
system("echo out > /sys/class/gpio/gpio7/direction");
system("echo 0 > /sys/class/gpio/gpio65/value");
system("echo 0 > /sys/class/gpio/gpio61/value");
system("echo 0 > /sys/class/gpio/gpio7/value");
echo "HELLO";

?>
