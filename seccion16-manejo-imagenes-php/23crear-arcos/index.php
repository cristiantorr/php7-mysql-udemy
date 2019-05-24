<?php
//Creamos el lienzo
$lienzo = imagecreatetruecolor(200, 200);

//crear colores
$blanco = imagecolorallocate($lienzo, 255, 255, 255);
$rojo = imagecolorallocate($lienzo, 255, 0, 0);
$verde = imagecolorallocate($lienzo, 0, 255, 0);

//Dibujamos un circulo
imagearc($lienzo, 100, 100, 200, 200, 0, 360, $blanco);
//arco
imagearc($lienzo, 100, 100, 150, 150, 25, 155, $rojo);
//ojos
imagearc($lienzo, 60, 75, 50, 50, 0, 360, $verde);
imagearc($lienzo, 140, 75, 50, 50, 0, 360, $verde);

//desplegar en el navegador
header("Content-type: image/png");
imagepng($lienzo);

//Destruimos el objeto en memoria
imagedestroy($lienzo);



?>