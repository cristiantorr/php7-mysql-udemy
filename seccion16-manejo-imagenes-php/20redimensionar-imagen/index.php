<?php  
$orinales = "imagenesOriginal/";
$destino = "imagenes640/";

//leemos las imagenes
$imagenes_array = glob($orinales."*.jpg");

foreach ($imagenes_array as $imagen) {
  //Cargamos el archivo
  $img = imagecreatefromjpeg($imagen);
  print $imagen."<br>";

  //Escalamos
  $img = imagescale($img,640);

  //Guardamos
  imagejpeg($img, $destino.basename($imagen));
}
imagedestroy($img);
?>