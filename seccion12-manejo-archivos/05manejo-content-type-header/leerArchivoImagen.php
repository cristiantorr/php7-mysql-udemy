<?php
$img = @imagecreatefromjpeg("foto.jpg");

header("Content-Type: image/jpeg");

//Lanzamos a una ventana del navegador
imagejpeg($img);

//Destruimos resource
imagedestroy($img);
?>