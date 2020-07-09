<?php

system("echo out > /sys/class/gpio/gpio27/direction");
$pulsos = $_GET["pulsos"];
$cont = 0;
while($cont < $pulsos){
	system("echo 1 > /sys/class/gpio/gpio27/value");
	sleep(1);
	system("echo 0 > /sys/class/gpio/gpio27/value");
	sleep(1);
	$cont = $cont + 1;
}
echo $cont."<br><br>";
echo "Fin";

?>