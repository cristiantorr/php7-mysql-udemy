<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadenas</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>Concatenación de Cadenas</h1>
        <ul>
            <li>La concatenación de cadenas en PHP se realiza por medio del comando punto(.)</li>
            <li>También podemos concatenar por medio del operador (.= )</li>
        </ul>
        <h2>Podemos tener secuencias de escape:</h2>
        <ul>
            <li>Secuencia Significado</li>
            <li>\n avance de línea(LF o 0x0A (10) en ASCII)</li>
            <li>\r retorno de carro(CR o 0X0D (13) en ASCII)</li>
            <li>\t tabulador vertical (VT o 0X0B (9) en ASCII)</li>
            <li>\v tabulador vertical (VT o 0X0B (11) en ASCII (desde PHP 5.2.5)
            <li>\e escape (ESC o 0x1B (27) en ASCII) (desde php 5.4.4)</li>
            <li>\f avance de página (FF o 0x0C (12) en ASCII)(desde PHP 5.2.5)</li> 
            <li>\\ barra invertida</li>
            <li>\$ signo de dólar</li>
            <li>\" comillas dobles</li>
        </ul>
        <p>NOTA: Hay que tener en cuenta que no todos los navegadores soportan los escapes de cadena por eso se coloca las etiquetas "<br />" para hacer un salto en línea</p>

        <h2>Ejemplos:</h2>
        <?php 
$nombre = "James Bond";
$agente = "007";
$titulo = "Agente al servicio de su \"majestad\"";
$salida = $nombre." Num. Agente: ";
/* $salida .= $agente.". \n";  No todos los navegadores actualmente soportan el escape, por eso se pone <br> */
$salida .= $agente."<br />";
$salida .= $titulo;
print $salida;
?>
    </div>
</body>
</html>

<?php 



?>