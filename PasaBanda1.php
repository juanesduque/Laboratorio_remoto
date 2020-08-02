<?php

system("echo out > /sys/class/gpio/gpio27/direction");
$R1 = $_GET["R1"];

for ($i = 1; $i <= $R1; $i++) {
    system("echo 1 > /sys/class/gpio/gpio27/value");
	sleep(1);
	system("echo 0 > /sys/class/gpio/gpio27/value");
	sleep(1);
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Graficas con plotly</title>
		<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin=anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container border border-dark" style="margin-top: 30px;">
			<div class="row">
				<div class="col-md-12">
					<div id="cargaLineal"></div>
				</div>
			</div>
		</div>
		<br><br>
		<div class="row" style="font-size: 1.5em;">
			<div class="col-md-6">
				<nav>
					<a href="PasaBajo1.html" style="margin-left: 1em;">Atrás</a>
				</nav>
			</div>
			<div class="col-md-6 text-right">
				<nav>
					<a href="index.html" style="margin-right: 1em;">Página principal</a>
				</nav>
			</div>
		</div>
	</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#cargaLineal').load('lineal.php');
	});
</script>