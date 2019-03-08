<?php 
$nombre = "James Bond";
$agente = "007";
$titulo = "Agente al servicio de su \"majestad\"";
$salida = $nombre." Num. Agente: ";
/* $salida .= $agente.". \n";  No todos los navegadores actualmente soportan el escape, por eso se pone <br> */
$salida .= $agente."<br />";
$salida .= $titulo;
print $salida;
?>