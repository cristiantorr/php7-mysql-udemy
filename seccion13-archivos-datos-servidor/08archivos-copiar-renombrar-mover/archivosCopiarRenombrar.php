<?php

touch("datos.txt");

if (copy("datos.txt", "datos1.txt")) {
  print "Copia de archivo correcta";
} else {
  print "Error al copiar el archivo";
}
print "<br><br>";

if (@copy("datos.txt", "respaldo/datos1.txt")) {
  print "Copia de archivo a respaldo correcta";
} else {
  print "Error al copiar a respaldo el archivo";
}
print "<br><br>";

if (@rename("datos1.txt", "datos2.txt")) {
  print "Renombrar de archivo correcto";
} else {
  print "Error al renombrar el archivo";
}
print "<br><br>";

if (@rename("datos2.txt", "respaldo/datos3.txt")) {
  print "Renombrar de archivo correcto";
} else {
  print "Error al renombrar el archivo";
}
print "<br><br>";

if (@rename("datos.txt", "respaldo/datos.txt")) {
  print "Mover el archivo correcto";
} else {
  print "Error al mover el archivo";
}
print "<br><br>";

?>