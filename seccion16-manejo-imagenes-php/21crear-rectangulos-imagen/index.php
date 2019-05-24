<?php
//lienzo
$lienzo = imagecreate(600,200);
//Color de fondo
$colorFondo = imagecolorallocate($lienzo, 255, 255, 255);
//ciclo
for($j=0; $j < 4; $j++){
  for ($i=0; $i <= 12 ; $i++) { 
    $rojo = rand(0,255);
    $verde = rand(0,255);
    $azul = rand(0,255);
    //
    //Creamos el color RGB
    $relleno = imagecolorallocate($lienzo, $rojo, $verde, $azul);
    //
    //Creamos el rectangulo
    //
    imagefilledrectangle($lienzo, 50*$i, 50*$j, 50*($i+1), 50*($j+1), $relleno);
  }
}
  //
  //cabecera
  //
  header("Content-type: image/png");
  //
  //desplegamos en formato PNG
  //
  imagepng($lienzo);
  //
  //destruimos nuestro recurso
  //
  imagedestroy($lienzo);
?>