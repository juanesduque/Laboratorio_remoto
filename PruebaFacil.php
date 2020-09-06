<?php

	system("echo out > /sys/class/gpio/gpio22/direction");
	system("echo out > /sys/class/gpio/gpio27/direction");
	system("whoami");
echo "HELLO";

?>

