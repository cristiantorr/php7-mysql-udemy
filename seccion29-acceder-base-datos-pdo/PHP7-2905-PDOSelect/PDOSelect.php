<?php
try {
  $conn = new PDO('sqlite:prueba.db');
  //print "Conexion exitosa"."<br>";
} catch (PDOException $e) {
  die("Error".$e->getMessage());
}

try {
  $res = $conn->prepare("SELECT * FROM paises");
  $res->execute();
  print "<table border='1'>";
  print "<tr><th>Pais</th><th>Area</th><th>Poblacion</th><th>Densidad</th></tr>";
  while ($r = $res->fetch(PDO::FETCH_ASSOC)) {
    print "<tr>";
    print "<td>".$r["nombre"]."</td>";
    print "<td>".number_format($r["area"])."</td>";
    print "<td>".number_format($r["poblacion"])."</td>";
    print "<td>".number_format($r["densidad"],2)."</td>";
    print "</tr>";
  }
  print "</table>";
  
} catch (Exception $e) {
  print "Erro:".$e->getMessage();
}

?>