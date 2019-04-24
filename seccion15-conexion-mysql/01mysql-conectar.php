<!DOCTYPE html>
<html>
<head>
	<title>MySQL | Connect</title>
	<meta charset="utf-8">
	<?php  
	$host = "127.0.0.1";
	$usuario = "root";
	$clave = "root";
	$db = "quiz";
	$puerto = "3306";
	//
	$conn = mysqli_connect($host, $usuario, $clave, $db, $puerto) or die("Error al conectar la base de datos");
	print "Conexión exitosa";
	?>
</head>
<body>

</body>
</html>