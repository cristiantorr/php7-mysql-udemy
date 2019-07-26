<?php
function manejadorErrores($nivel, $mensaje, $archivo, $linea, $contexto)
{
  print "Error nivel  : ".$nivel."<br>";
  print "Mensaje      : ".$mensaje."<br>";
  print "En el archivo: ".$archivo."<br>";
  print "En la linea  : ".$linea."<br>";
  //print "Contexto: ";
  //var_dump($contexto);
  error_log("Error: [$nivel] $mensaje",1,"mipaginawe@micorreo.com","From: administrador@micirreo.com");
}
print $temporal = "temporal";
set_error_handler("manejadorErrores");


trigger_error("Este es un mensaje de error", E_USER_WARNING);


?>