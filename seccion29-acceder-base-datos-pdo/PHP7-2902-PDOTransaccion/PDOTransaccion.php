<?php
try {
  $conn = new PDO('sqlite:prueba.db');
  print "Conexion exitosa"."<br>";
} catch (PDOException $e) {
  die("Error".$e->getMessage());
}

try {
  $conn->beginTransaction();
  $conn->exec("INSERT INTO paises (nombre, area, poblacion, densidad)
                        values ('Belice',22966,334000,14.54)");
  $conn->exec("INSERT INTO paises (nombre, area, poblacion, densidad)
                        values ('Costa Rica',51100,4726000,92.49)");
  $conn->exec("INSERT INTO paises (nombre, area, poblacion, densidad)
                        values ('El Salvador',21041,6108000,290.29)");
  $conn->exec("INSERT INTO paises (nombre, area, poblacion, densidad)
                        values ('Guatemala',108894,15284000,140.36)");
  $conn->exec("INSERT INTO paises (nombre, area, poblacion, densidad)
                        values ('Honduras',112492,8447000,75.09)");


  $conn->commit();
} catch (Exception $e) {
  $conn -> rollBack();
  print "Error:".$e->getMessage();
  
}


?>