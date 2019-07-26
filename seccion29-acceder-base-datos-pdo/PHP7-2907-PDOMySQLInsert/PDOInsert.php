<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
try {
  $conn = new PDO("mysql:host=$servidor;dbname=quiz",$usuario,$clave);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //
  $sql = "INSERT INTO preguntas (pregunta, op1, op2, op3, op4, buena, examen)
  VALUES('¿Cuál es la capital de Francia?','Madrid','Lisboa','Paris','Londres',3,'GEO01')";
  $conn->exec($sql);
  print "Registro creado correctamente";
} catch (PDOException $e) {
  print "Error:".$e->getMessage();
}



?>