<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fechas gate date</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>FECHAS GATE DATE</h1>
        <ul>
           <li></li>
        </ul>
        <h2>Ejemplos:</h2>
<?php
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
$dias[] = "Domingo";
$dias[] = "Lunes";
$dias[] = "Martes";
$dias[] = "Miércoles";
$dias[] = "Jueves";
$dias[] = "Viernes";
$dias[] = "Sábado";

$fecha_array = getdate();

$dia = $dias[$fecha_array["wday"]];
$mes = $meses[$fecha_array["mon"]-1];
print "hoy es ".$dia." ".$fecha_array["mday"]." de ".$mes." de ".$fecha_array["year"].", y son las ".$fecha_array["hours"]." con ".$fecha_array["minutes"]." minutos.";


?>
</body>
</html>