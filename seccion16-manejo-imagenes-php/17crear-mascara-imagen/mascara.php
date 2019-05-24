<?php
//lee el archivo como una cadena
$imagenCadena = imagecreatefromstring(file_get_contents("foto.jpg"));
//Recuperamos las dimensiones
$w = imagesx($imagenCadena);
$h = imagesy($imagenCadena);

//Nuevas dimensiones
$w2 = $h2 = 400;

//Creamos el lienzo
$imagen = imagecreatetruecolor($w2, $h2);

//Activamos el blend
imagealphablending($imagen, true);

//Copiar la imagen de la cadena en el lienzo
imagecopyresampled($imagen, $imagenCadena, 0, 0, 0, 0, $w2, $h2, $w, $h);

//Crear la mascara
$mascara = imagecreatetruecolor($w2, $h2);

//Definir el color de transparencia
$trans = imagecolorallocate($mascara, 255, 0, 0);

//Definir el color de la trasparencia
imagecolortransparent($mascara, $trans);

//Creamos la elipse
imagefilledellipse($mascara, $w2/2, $h2/2, $w2, $h2, $trans);

//Creamos un color no rojo (negro)
$negro = imagecolorallocate($mascara, 0, 0, 0);

//Mezclamos los objetos
imagecopymerge($imagen, $mascara, 0,0,0,0, $w2, $h2, 100);

//Definimos el color a eliminar
imagecolortransparent($imagen, $negro);

//Rellenamos la imagen
imagefill($imagen,0,0,$negro);

//Creamos el archivo
imagepng($imagen,"salida.png");

//Limpiamos los objetos
imagedestroy($imagen);
imagedestroy($mascara);
?>
<img src="salida.png">