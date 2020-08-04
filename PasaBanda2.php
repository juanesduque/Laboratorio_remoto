<?php

	system("echo out > /sys/class/gpio/gpio27/direction");
	system("echo out > /sys/class/gpio/gpio47/direction");
	$R1 = $_GET["R1"];
	$R2 = $_GET["R2"];

	for ($i = 1; $i <= $R1; $i++) {
		system("echo 1 > /sys/class/gpio/gpio27/value");
		sleep(1);
		system("echo 0 > /sys/class/gpio/gpio27/value");
		sleep(1);
	}
	for ($i = 1; $i <= $R2; $i++) {
		system("echo 1 > /sys/class/gpio/gpio47/value");
		sleep(1);
		system("echo 0 > /sys/class/gpio/gpio47/value");
		sleep(1);
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Grafica</title>
		<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin=anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container border border-dark" style="margin-top: 30px;">
			<div class="col-md-12">
				<div id="cargaLineal"></div>
			</div>
		</div>
		<br>
		<div class="row" style="font-size: 1.5em;">
			<nav class="col-md-6">
				<a href="PasaAlto2.html" style="margin-left: 1em;">Atrás</a>
			</nav>
			<nav class="col-md-6 text-right">
				<a href="index.html" style="margin-right: 1em;">Página principal</a>
			</nav>
		</div>
		<br>
		<div class="row" style="border-top-style: solid; border-width: 1px;">
			<div class="col-md-6 text-center" style=" margin-top: 20px;">
				<img src="Im/GIIE.png" class="col-md-3 espacio-arriba">
			</div>
			<div class="col-md-6 text-center" style=" margin-top: 20px;">
				<img src="Im/UTP.png" class="col-md-2 espacio-arriba">
			</div>
		</div>
	</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#cargaLineal').load('lineal.php');
	});
</script>