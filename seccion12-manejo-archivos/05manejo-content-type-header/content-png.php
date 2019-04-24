<?php

$img = @imagecreatefrompng("./archivos/foto.png");

header("Content-Type: image/png");

//Lanzamos a una ventana del navegador
imagejpeg($img);

//Destruimos resource
imagedestroy($img);
?>
