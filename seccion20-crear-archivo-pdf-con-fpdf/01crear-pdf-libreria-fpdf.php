<?php
//Llamamos a la librería
require('fpdf181/fpdf.php');

//Creamos el objeto
$pdf = new FPDF();

//Añadimos una página
$pdf->AddPage();

//Añadimos la fuente
$pdf->SetFont('Arial','B',16);

//Creamos contenidos
$pdf->Cell(40,10,'¡Hola, Mundo!');

//Le damos la salida al documento
$pdf->Output();
?>
