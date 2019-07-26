<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
try {
  $conn = new PDO("mysql:host=$servidor;dbname=quiz",$usuario,$clave);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //
  $res = $conn->prepare("SELECT * FROM preguntas");
  $res->execute();

  print "<table border='1'>";
  print "<tr>";
  print "<th>Pregunta</td>";
  print "<th>op1</th>";
  print "<th>op2</th>";
  print "<th>op3</th>";
  print "<th>op4</th>";
  print "<th>Correcta</th>";
  print "<th>Examen</th>";
  print "</tr>";
  while ($r = $res->fetch(PDO::FETCH_ASSOC)) {
    print "<tr>";
    print "<td>".$r["pregunta"]."</td>";
    print "<td>".$r["op1"]."</td>";
    print "<td>".$r["op2"]."</td>";
    print "<td>".$r["op3"]."</td>";
    print "<td>".$r["op4"]."</td>";
    print "<td>".$r["buena"]."</td>";
    print "<td>".$r["examen"]."</td>";
    print "</tr>";
  }
  print "</table>";
} catch (Exception $e) {
  print "Error:".$e->getMessage();
}

?>