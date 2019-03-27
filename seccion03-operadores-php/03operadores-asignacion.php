<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>operadores asignación</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>OPERADORES ASIGNACIÓN</h1>
        <ul>
            <li>El operador básico de asignación es "=". Se podría inclinar a pensar primero que es como un "igual a". No lo es.Realmente lo que significa que el operando de la izquierda se establece con el valor de la expresión de la derecha(es decir , "se define como").</li>
            <li>El valor de una expresión de asignación es el valor asignado. Es decir, el valor de  "$a = 3" es de 3.</li>
            <li>Además del operador básico de asignación, existen "operadores combinados" para todos los de aritmética binaria, unión de arrays y operadores de string que permiten usar un valor en una expresión y entonces  establecer su valor como el resultado de esa expresión.</li>
            <li>Se puede realizar "Asignación por valor" vs "Asignación por referencia".</li>
            <li>Los "atajos" también son considerados operadores de asignación:<br />
                <table>
                    <tr>
                        <td>$a + $b</td>
                        <td>---</td>
                        <td>$a = $a + $b</td>
                        <td>---</td>
                        <td>Suma</td> 
                    </tr>
                    <tr>
                        <td>$a -= $b</td>
                        <td>---</td>
                        <td>$a = $a - $b</td>
                        <td>---</td>
                        <td>Resta</td> 
                    </tr>
                    <tr>
                        <td>$a *= $b</td>
                        <td>---</td>
                        <td>$a = $a * $b</td>
                        <td>---</td>
                        <td>Multiplicación</td> 
                    </tr>
                    <tr>
                        <td>$a /= $b</td>
                        <td>---</td>
                        <td>$a = $a / $b</td>
                        <td>---</td>
                        <td>División</td> 
                    </tr>
                    <tr>
                        <td>$a %= $b</td>
                        <td>---</td>
                        <td>$a = $a % $b</td>
                        <td>---</td>
                        <td>Módulo</td> 
                    </tr>
                </table>
            </li>

        </ul>
        <h2>Ejemplos:</h2>
        <?php 
            $a = 30;
            $a = $a + 5 / 2 * 10;
            $a += 10;
            $a /= 2;
            $a *= 1.5;
            print $a;
        ?>
    </div>
</body>
</html>