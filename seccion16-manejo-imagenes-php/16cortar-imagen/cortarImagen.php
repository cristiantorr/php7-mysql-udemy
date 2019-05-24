<?php
$img = imagecreatefromjpeg("foto.jpg"); //640x500
//
$ancho = $alto = 160; //640/160 = 4, 500/160 = 3
$imagenX = $imagenY = 0;

print "<div style='width:670'>";

//renglones
for ($j=0; $j < 3; $j++) { 
  for ($i=0; $i < 4 ; $i++) { 
    $destino = imagecreatetruecolor($ancho, $alto);
    //
    imagecopyresampled(
      $destino, 
      $img, 
      0, 0, 
      $ancho*$i, $alto*$j, 
      $ancho, $alto, 
      $ancho, $alto);
    //
    imagejpeg($destino,"salida".$i."-".$j.".jpg");
    print "<img src='salida".$i."-".$j.".jpg'>&nbsp;";
  }
}
print "</div>";
//limpiamos el objeto de la imagen
imagedestroy($img);
imagedestroy($destino);

?>