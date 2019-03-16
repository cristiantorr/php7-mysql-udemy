<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>operadores de comparación</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>OPERADORES DE COMPARACIÓN</h1>
        <ul>
            <li>$a==$b True, después de la manipulación de los tipos(integer, string etc) </li>
            <li>$a === $b True, con el mismo tipo(string,integer etc)</li>
            <li>$a != $b Diferente true, si $a no es igual a $b después de la manipulación de tipos (string, integer ect)</li>
            <li>$a !== $b no identico, TRUE si $a no es igual a $b, o si no son del mismo tipo</li>
            <li>$a < $b</li>
            <li>$a > $b</li>
            <li>$a <= $b</li>
            <li>$a >= $b</li>
            <li>$a <=> $b Nave espacial, Un integer menor que, igual a, o mayor que cero cuando $a< es respectivamente menor que , igual a o mayor que $b<, disponible desde PHP7</li>
            <li>$a ?? $b ?? $c Fusion de null, El primer operando de izquierda a derecha y que no sea NULL.NULL si no hay valores definidos y no son NULL.disponible desde PHP7</li>
        </ul>
        <h2>Ejemplos:</h2>
        <?php
            $a = 18;
            $b = 11;
            $c = '3';
            if($a==$b){
                print " a es mayor que b"."<br />";
            } else {
                print "a NO es mayor que b"."<br />";
            }
            //no son del mismo tipo uno es integer otro string
            if($a===$c){
                print " iguales";
            } else {
                print "diferentes";
            }
        ?>
    </div>
</body>
</html>