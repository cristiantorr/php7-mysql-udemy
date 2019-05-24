<?php
//Determinamos los valores
$puntos = array(
								130,20,
								150,90,
								210,90,
								160,130,
								180,200,
								130,160,
								80,200,
								100,130,
								50,90,
								110,90);
//Crear la imagen
$lienzo = imagecreatetruecolor(250, 250);

//Crear colores
$fondo = imagecolorallocate($lienzo, 0, 0, 0);
$azul = imagecolorallocate($lienzo, 0, 0, 255);

//Rellenamos el lienzo
imagefilledrectangle($lienzo, 0, 0, 249, 249, $fondo);

//Dibujamos el poligono
imagefilledpolygon($lienzo, $puntos, 10, $azul);

//Visualizamos en el navegador
header("Content-type: image/png");
imagepng($lienzo);

//Borramos el lienzo
imagedestroy($lienzo);


?>