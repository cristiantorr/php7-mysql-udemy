<?php
$archivo = "foto.jpg";

//Cargar la imagen a un objeto en memoria
$img = imagecreatefromjpeg($archivo);

//hacemos el flip
imageflip($img, IMG_FLIP_HORIZONTAL);

//Guardamos en archivo
imagejpeg($img, "horizontal.jpg");

//Cargar la imagen a un objeto en memoria
$img = imagecreatefromjpeg($archivo);
//flip vertical
//hacemos el flip
imageflip($img, IMG_FLIP_VERTICAL);

//Guardamos en archivo
imagejpeg($img, "vertical.jpg");

//Cargar la imagen a un objeto en memoria
$img = imagecreatefromjpeg($archivo);
//flip vertical
//hacemos el flip
imageflip($img, IMG_FLIP_BOTH);

//Guardamos en archivo
imagejpeg($img, "both.jpg");
?>
<img src="foto.jpg">
<img src="horizontal.jpg">
<img src="vertical.jpg">
<img src="both.jpg">