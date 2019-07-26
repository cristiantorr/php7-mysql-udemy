<?php
require_once "clases/Gato.php";
require_once "clases/GatoVolador.php";

$cucho = new Gato("Cucho", "rosa");
$benito = new GatoVolador("Benito","azul");

//Copiar por valor
$a = 10;
$b = $a;

//Copiado por referencia
$panza = clone $cucho;
$panza->setCorbata("SI");
$cucho->setCorbata("NO");
print $panza->tieneCorbata();
print $cucho->tieneCorbata();
$panza->setNombre("Panza");
print $panza->tieneCorbata();
print $cucho->tieneCorbata();
?>