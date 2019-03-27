<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>fechas time date</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>FECHAS TIME DATE</h1>
        <ul>
           <li></li>
        </ul>
        <h2>Ejemplos:</h2>
<?php  
$t = time();
print "<p>".$t."</p>";
$fecha = date("d/m/Y",$t);
print "<p>".$fecha."</p>";
$hora = date("h:i:s",$t);
print "<p>".$hora."</p>";
//
$diaSemana = date("l",$t);
$diaMes = date("j",$t);
$mes = date("F",$t);
$anio = date("Y",$t);
$hora = date("H",$t);
$ampm = date("A",$t);
$min = date("i",$t);
print "Hola es ".$diaSemana." del mes ".$mes." a ".$diaMes." del año ".$anio." y son las ".$hora." y ".$min." minutos.";
?>
</body>
</html>