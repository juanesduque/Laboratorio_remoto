<?php

	system("echo out > /sys/class/gpio/gpio50/direction");
	system("echo out > /sys/class/gpio/gpio2/direction");
	system("echo out > /sys/class/gpio/gpio14/direction");
	system("echo 1 > /sys/class/gpio/gpio50/value");
	system("echo 1 > /sys/class/gpio/gpio2/value");
	system("echo 1 > /sys/class/gpio/gpio14/value");

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
			<div class="col-md-12 text-center">
				<h1 class="Pt-serif grande">Filtro pasa alto de primer orden</h1>
			</div>
		</div>
		<div class="row espacio-arriba">
			<div class="col-md-6 text-right">
				<img src="Im/PasaAlto1.jpg" class="borde-img" style="width: 600px; height: 350px;">
			</div>
			<div class="col-md-6 text-center">
				<form action="PasaAlto1.php" method="get" name="res">
					<br><br><br>
					<label for="R1" class="letra"><strong>R1(K&#8486;):&nbsp;&nbsp;</strong></label>
					<input type="text" name="R1" class="borde-boton" size="30"><br><br>
					<label for="frecuencia" class="letra"><strong>F(%):&nbsp;&nbsp;</strong></label>
					<input type="text" name="frecuencia" class="borde-boton" size="30"><br><br>
					<input type="submit" class="borde-boton" style="width: 90px; height: 40px">
				</form><br>
				<p class="text-justifity">
				<strong>Nota: </strong>La resistencia varia entre 1 y 100, es decir entre 1k y 100k ohms. 
				Por otra parte, la frecuencia varia entre 5k y 10k Hz, para configurar la frecuencia, debe 
				ingresar el porcentaje al que quiere que trabaje, este va de 1% a 100%.</p>
			</div>
		</div>
		<div class="row espacio-arriba">
			<nav class="col-md-6">
				<a href="PasaAlto.php" class="espacio-izquierda">Atrás</a>
			</nav>
			<nav class="col-md-6 text-right">
				<a href="index.html">Página Principal &nbsp;&nbsp;</a>
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
