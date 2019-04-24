<!DOCTYPE html>
<html>
<head>
	<title>Cambiar la primer letra a mayúcula: ucwords(), ucfirst()</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		$nombre = "juan peréz lópez";
		print ucwords($nombre)."<br>";
		print ucfirst($nombre)."<br>";
		$saludo = "HOLA MUNDO";
		print $saludo."<br>";
		$saludo = strtolower($saludo);
		print $saludo."<br>";
		$saludo = ucfirst($saludo);
		print $saludo."<br>";
	?>
</body>
</html>