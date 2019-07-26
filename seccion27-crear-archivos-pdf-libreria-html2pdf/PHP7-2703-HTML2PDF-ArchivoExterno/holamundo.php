<?php
require __DIR__.'/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

ob_start();
require_once "salida.php";
$html = ob_get_clean();

$html2pdf = new Html2Pdf('P', 'LETTER', 'es', 'UTF-8');
$html2pdf->writeHTML($html);
$html2pdf->output("salida.pdf");

?>