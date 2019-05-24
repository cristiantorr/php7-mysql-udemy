<?php
//Leemos las imagenes
$destino = imagecreatefromjpeg("credencial.jpg");
$origen = imagecreatefromjpeg("pedro.jpg");

//copiar y fusionar
imagecopymerge($destino, $origen, 15,65,0,0,185,185,100);
imagestring($destino,16,220,100,"Pedro Picapiedra",0);
imagestring($destino,16,220,220,"Rajuela y asociados, S.A.",0);
imagestring($destino,16,140,265,"Piedradura no. 25 lote 34",0);
imagestring($destino,16,140,300,"A-234567678",0);
imagestring($destino,16,580,65,"0000001",0);
imagestring($destino,16,575,100,"Dinosaurio",0);
imagestring($destino,16,600,135,"N/A",0);
imagestring($destino,16,580,355,"12345678",0);

//desplegar la imagen en el navegador
header("Content-type: image/jpeg");
imagejpeg($destino);

//Eliminamos las instacias
imagedestroy($destino);
imagedestroy($origen);
?>