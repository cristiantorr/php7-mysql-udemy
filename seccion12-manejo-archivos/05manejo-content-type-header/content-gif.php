<?php

$img = @imagecreatefromgif("./archivos/foto.gif");

header("Content-Type: image/gif");

//Lanzamos a una ventana del navegador
imagejpeg($img);

//Destruimos resource
imagedestroy($img);
?>
