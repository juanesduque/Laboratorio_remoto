<?php

system("echo out > /sys/class/gpio/gpio27/direction");
$pulsos = $_GET["pulsos"];
$frecuencia = $_GET["frecuencia"];
$R = 1 / ($frecuencia * 0.00000001);
$Pot = $R / 1000;
$cont = 0;
while($cont < $pulsos){
	system("echo 1 > /sys/class/gpio/gpio27/value");
	sleep(1);
	system("echo 0 > /sys/class/gpio/gpio27/value");
	sleep(1);
	$cont = $cont + 1;
}
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Pulsos y frecuencias</title>
	</head>
	<body>
		<h1><?php echo $R?></h1>
		<br><br>
		<h2><?php echo $Pot?></h2>
	</body>
</html>