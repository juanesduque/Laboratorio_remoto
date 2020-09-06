<?php

	system("echo out > /sys/class/gpio/gpio60/direction");
	system("echo 1 > /sys/class/gpio/gpio60/value");

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Laboratorio remoto</title>
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap">
	</head>
	<body>
		<div class="row">
			<div class="col-md-12 text-center Pt-serif">
				<h1 class="grande">Filtro pasa alto</h1><br>
				<p>Un filtro paso alto (HPF) es un tipo de filtro electrónico en cuya respuesta en frecuencia se atenúan los componentes de baja frecuencia pero no los de alta frecuencia, éstas incluso pueden amplificarse en los filtros activos. La alta o baja frecuencia es un término relativo que dependerá del diseño y de la aplicación.</p>
			</div>
		</div>
		<div class="row espacio-arriba">
			<div class="col-md-6 text-center">
				<img src="Im/PasaAlto1.jpg" class="borde-img" style="width: 450px; height: 300px;">
			</div>
			<div class="col-md-6 text-center">
				<img src="Im/PasaAlto.jpg" class="borde-img" style="width: 450px; height: 300px;">
			</div>
		</div>
		<div class="row">
			<nav class="col-md-6 text-center">
				<a href="PasaAlto10.php"><strong>Primer orden</strong></a>
			</nav>
			<nav class="col-md-6 text-center">
				<a href="PasaAlto20.php"><strong>Segundo orden</strong></a>
			</nav>
		</div>
		<div class="row">
			<nav class="col-md-1">
				<a href="index.html" class="espacio-izquierda">Atrás</a>
			</nav>
		</div>
		<br>
		<div class="row linea">
			<div class="col-md-6 text-center">
				<img src="Im/GIIE.png" class="col-md-3 espacio-arriba">
			</div>
			<div class="col-md-6 text-center">
				<img src="Im/UTP.png" class="col-md-2 espacio-arriba">
			</div>
		</div>
	</body>
</html>