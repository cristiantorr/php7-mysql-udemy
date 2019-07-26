<?php
$host = "localhost";
$usuario = "root";
$clave = "root";
$db = "imagenes";
$puertos = "3308";
$conn = mysqli_connect($host, $usuario, $clave, $db, $puertos) or die("Error al conectarse a la base de datos");
?>