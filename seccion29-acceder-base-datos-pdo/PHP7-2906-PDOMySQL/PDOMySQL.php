<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
try {
  $conn = new PDO("mysql:host=$servidor;dbname=quiz",$usuario,$clave);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  print "Conexion exitosa";
  
} catch (PDOException $e) {
  print "Error:".$e->getMessage();
}
?>