<?php
//Tamaño de la imagen
$tamano = 500;

//Crear el lienzo
$lienzo = imagecreatetruecolor($tamano, $tamano);

//Color de fondo
$fondo = imagecolorallocate($lienzo, 255, 255, 255);

//rellenamos el lienzo
imagefilledrectangle($lienzo, 0, 0, $tamano, $tamano, $fondo);

//Dibujar las líneas
for ($i=0; $i < 1000 ; $i++) { 
  $x1 = rand(0, $tamano);
  $y1 = rand(0, $tamano);
  $x2 = rand(0, $tamano);
  $y2 = rand(0, $tamano);

  $color = imagecolorallocate($lienzo, rand(0,255), rand(0,255), rand(0,255));

  imageline($lienzo, $x1, $y1, $x2, $y2, $color);
}
//Mandamos la imagen al navegador
header("Content-type: image/png");
imagepng($lienzo);

imagedestroy($lienzo);

?>