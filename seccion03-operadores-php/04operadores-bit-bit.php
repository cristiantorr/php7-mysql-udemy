<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>operadores bit a bit</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>OPERADORES BIT A BIT</h1>
        <ul>
            <li>Los operadores bit a bit permiten la evaluación y la manipulación de bits específicos dentro de un valor entero.</li>
            <li>$a &b And(y) Los bits que están activos en ambos $a y $b son activados.</li>
            <li>$a | $b Or(o inclusivo) los bits que están activos ya sea en $a o en $b  son activados.</li>
            <li>$a ^$b Xor(o exclusivo) Los bits que están activos en $a o en $b, pero no en ambos, son activados.</li>
            <li>~$a Not (no) Los bits que están activos en $a son desactivadoos, viceversa.</li>
            <li>$a >> $b Shift right (desplazamiento a izquierda) Desplaza los bits de $a, $b pasos a la derecha (cada paso quiere decir "multiplicar por dos").</li>
            <li>$a >> $b Shift right (desplazamiento a derecha) Desplaza los bits de $a, $b pasos a la derecha(cada paso quiere devir "dividir por dos").</li>
        </ul>
        <h2>Ejemplos:</h2>
        <?php
            $values = array(0, 1, 2, 4, 8);
            $test = 1 + 4;
            //%1$2d -> la letra d significa decimal 
            //%1$04b -> la letra b significa binario osea 4bits (04b)
            $formato = '(%1$2d = %1$04b) = (%2$2d = %2$04b)'
                    . ' %3$s (%4$2d = %4$04b)' . "<br>";
            echo "AND bit a bit <br>";
            foreach ($values as $value) {
                $result = $value & $test;
                printf($formato, $result, $value, '&', $test);
            }
            ?>
    </div>
</body>
</html>