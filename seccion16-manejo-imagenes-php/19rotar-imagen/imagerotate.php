<?php
$archivo = "foto.jpg";
$grados = 90;

//cargamos la imagen
$img = imagecreatefromjpeg($archivo);

//
$imagen90 = imagerotate($img, $grados, 0);
$imagen270 = imagerotate($img, 270, 0);
$imagen66 = imagerotate($img, 66, 0xffffff);

//Guardamos la imagen
imagejpeg($imagen90, "foto90.jpg");
imagejpeg($imagen270, "foto270.jpg");
imagejpeg($imagen66, "foto66.jpg");
?>
<img src="foto90.jpg">
<img src="foto270.jpg">
<img src="foto66.jpg">