<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>operadores aritmeticos</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>OPERADORES ARITMÉTICOS</h1>
        <ul>
            <li>+ $a Identidad Conversión de $a a int o float según el caso.</li>
            <li>- $a Negación  Opuesto de $a.</li>
            <li>$ + $b Adición Suma de $a y $b</li>
            <li>$a - $b Sustración Diferencia de $a y $b</li>
            <li>$a * $b Multiplicación producto de $a y $b</li>
            <li>$a / $b División cociente de $a y $b</li>
            <li>$a % $b Módulo resto de $a dividido por $b</li>
            <li>$a ** $b Exponenciación resultado de elevar $a a la potencia $bésima.</li>
            introducido en PHP 5.6
        </ul>
        <h2>Ejemplos:</h2>
        <?php 
            $a = 6;
            $b = 4;
            $c = $a + $b."<br />";
            print $c;
            $c = -$a + $b."<br />";
            print $c;
            $c = $a - $b."<br />";
            print $c;
            $c = $a * $b."<br />";
            print $c;
            $c = $a / $b."<br />";
            print $c;
            // ** <- significa a la potencia : 6 multiplicado 4 veces -> 6x6x6x6
            $c = $a ** $b."<br />";
            print $c;

        ?>
    </div>
</body>
</html>