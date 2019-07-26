<?php

function __autoload($clase){
 include($clase.".php");
 
 if (!class_exists($clase, false)) {
    trigger_error("No se puede cargar la clase ".$clase,E_USER_WARNING);
  } 
}

if (class_exists("Gato")) {
  $benito = new Gato();
}

?>