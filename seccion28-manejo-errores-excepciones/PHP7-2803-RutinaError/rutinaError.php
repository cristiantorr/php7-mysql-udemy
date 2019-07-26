<?php
function manejadorErrores($nivel, $mensaje, $archivo, $linea, $contexto)
{
  print "Error nivel  : ".$nivel."<br>";
  print "Mensaje      : ".$mensaje."<br>";
  print "En el archivo: ".$archivo."<br>";
  print "En la linea  : ".$linea."<br>";
  //print "Contexto: ";
  //var_dump($contexto);
}
print $temporal = "temporal";
set_error_handler("manejadorErrores");


print $noexiste;


?>