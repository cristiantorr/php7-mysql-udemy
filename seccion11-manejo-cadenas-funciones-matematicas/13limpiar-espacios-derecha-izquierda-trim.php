<!DOCTYPE html>
<html>
<head>
	<title>Limpiar cadenas: trim(), rtrim() y ltrim()</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		$texto = "\t\tHola, cara de bola\t\t";
		$binaria = "\x09Hola, cara de bola\x0A";
		$saludo = "www.google.com/";
		var_dump($texto, $binaria, $saludo);
		print "<br>";

		$cadena = rtrim($texto);
		var_dump($cadena);
		print "<br>";
		
		$cadena = trim($texto);
		var_dump($cadena);
		print "<br>";
		
		$cadena = ltrim($binaria,"\x00..\x1F");
		var_dump($cadena);
		print "<br>";
		
		$cadena = rtrim($saludo,"/");
		var_dump($cadena);
		print "<br>";
		
	?>
</body>
</html>