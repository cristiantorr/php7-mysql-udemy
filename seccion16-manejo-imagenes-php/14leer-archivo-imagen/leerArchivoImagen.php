<?php
$img = @imagecreatefromjpeg("noexiste.jpg");

if (!$img) {
  $img = imagecreatetruecolor(200, 100);
  $color1 = imagecolorallocate($img, 255, 255, 255);
  $color2 = imagecolorallocate($img, 0, 0, 0);
  imagefilledrectangle($img, 0, 0, 200, 100, $color1);
  //Mandamos una cadena
  imagestring($img, 3, 30, 10, "No existe la imagen", $color2);
}

header("Content-Type: image/jpeg");

//Lanzamos a una ventana del navegador
imagejpeg($img);

//Destruimos resource
imagedestroy($img);
?>