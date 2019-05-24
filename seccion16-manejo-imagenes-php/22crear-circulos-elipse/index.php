<?php
//lienzo
$lienzo = imagecreate(600,600);
//
//ciclo para los circulos
//
for ($i=0; $i < 250; $i++) { 
  $rojo = rand(0, 255);
  $verde = rand(0, 255);
  $azul = rand(0, 255);
  //
  //Generamos nuestro color
  //
  $relleno = imagecolorallocate($lienzo, $rojo, $verde, $azul);
  //
  //Generamos las coordenadas y el ancho y alto
  //
  $x = rand(0,600);
  $y = rand(0,600);
  $h = rand(30,100);
  $w = rand(30,100);
  //
  //Creamos los circulos
  //
  imagefilledellipse($lienzo, $x, $y, $w, $h, $relleno);
}
//Crear el encabezado
header("Content-type: image/png");
//
//mandamos al navegador
//
imagepng($lienzo);
//
//Limpiamos el recurso
//
imagedestroy($lienzo);
?>