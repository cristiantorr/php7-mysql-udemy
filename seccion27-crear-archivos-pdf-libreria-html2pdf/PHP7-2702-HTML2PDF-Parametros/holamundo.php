<?php
require __DIR__.'/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf('P', 'LETTER', 'es', 'UTF-8');
$html2pdf->writeHTML('<h1>Hola mundo</h1>Algunas cosas en Español');
$html2pdf->output("salida.pdf");

?>