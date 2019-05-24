<?php
//Leemos la imagen
$imagen = imagecreatefromjpeg("foto.jpg");

//Creamos la marca de agua
$marca = imagecreatetruecolor(630, 40);
imagefilledrectangle($marca, 9, 9, 620, 30, 0xFFa500);
imagestring($marca, 3, 20,12,"www.misitio.com, Todos los derechos reservados desde 1999-2020, Salvemos al manati",0x000000);

//margenes
$md = 10;
$mi = 10;
$sx = imagesx($marca);
$sy = imagesy($marca);
$ix = imagesx($imagen);
$iy = imagesy($imagen);

//Fusionar ambas imagenes
imagecopymerge($imagen, $marca,$ix - $sx - $md, $iy - $sy - $mi, 0 , 0, $sx, $sy, 50);

//Creamos un archivo jpg
imagepng($imagen,"fotoMarcaAgua.png");

//Liberamos la memoria
imagedestroy($imagen);

?>
<img src="fotoMarcaAgua.png">