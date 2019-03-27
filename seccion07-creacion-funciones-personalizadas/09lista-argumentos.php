<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lista argumentos</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>LISTA DE ARGUMENTOS</h1>
        <ul>
           <li>PHP tiene soporte para listas de argumentos de longitud variable en funciones definidas por el usuario. Esto se implementa utilizando el token ... en PHP 5.6 y posteriores, y utilizando las funciones func_num_args(), func_get_arg(), y func_get_args() en PHP 5.5 y anteriores.</li>
           <li>En PHP 5.6 y posteriores, las listas de argumentos pueden incluir el token ... para denotar que la función acepta un número variable de argumentos. Los argumentos serán pasados a la variable dada como un aryay, por ejemplo:</li>
        </ul>
        <h2>Ejemplos:</h2>
        <?php
            function suma($simbolo, int ...$numeros)
            {
                $total = 0;
                foreach ($numeros as $num) {
                    $total += $num;
                }
                return $simbolo.$total;
            }

            echo suma("euros ","manzana",4,3,4,5,6,7,8,7,56,54,4,3,3,3,6);

            ?>
    </div>
</body>
</html>