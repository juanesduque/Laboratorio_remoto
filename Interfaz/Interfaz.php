<?php

if(isset($_GET["led"])){
	system("echo out > /sys/class/gpio/gpio27/direction");
	if($_GET["led"] == "Encender"){
		echo "Si";
		system("echo 1 > /sys/class/gpio/gpio27/value");
	}
	else if($_GET["led"] == "Apagar"){
		echo "No";
		system("echo 0 > /sys/class/gpio/gpio27/value");
	}
}

if(isset($_GET["adc"])){
	if($_GET["adc"] == "Medir"){
		echo "adc";
	}
}

?>