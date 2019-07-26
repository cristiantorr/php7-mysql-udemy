<?php
try {
  $conn = new PDO('sqlite:prueba.db');
  print "Conexion exitosa"."<br>";
} catch (PDOException $e) {
  die("Error".$e->getMessage());
}

try {
  $plantilla = $conn->prepare("INSERT INTO paises(nombre, area,poblacion,densidad)
               VALUES(:nombre,:area,:poblacion,:densidad)");
  $plantilla->bindParam(':nombre',$nombre);
  $plantilla->bindParam(':area',$area);
  $plantilla->bindParam(':poblacion',$poblacion);
  $plantilla->bindParam(':densidad',$densidad);

  $conn->beginTransaction();
  $nombre = 'Nicaragua'; $area = 129494; $poblacion = 602800; $density = 46.55;
  $plantilla->execute();
  $nombre = 'Panama'; $area = 78200; $poblacion = 3652000; $density = 46.70;
  $plantilla->execute();


  $conn->commit();
} catch (Exception $e) {
  $conn->rollBack();
  print "Error:".$e->getMessage();
}

?>