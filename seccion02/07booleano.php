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
        <h1>Tipo booleano</h1>
        <ul>
            <li>Este tipo es más simple. Un boolean expresa un valor que indica verdad.Puede ser TRUE(verdadero) o FALSE(falso).</li>
            <li>Para especificar un literal de tipo boolean se emplean las constantes TRUE o False.Ambas no son susceptibles a mayúsculas y minúsculas</li>
            <li>Usualmente, el resultado de un operador que devuelve un valor de tipo boolean es pasado a una estructura de control</li>
            <li>Advertencia: -1 se considera TRUE, como cualquier otro número distinto de cero(ya se anegativo o positivo)</li>
        </ul>
        <h2>Ejemplos:</h2>
        <?php 
            /*
            * FALSE -> No tiene accesos
            * TRUE -> Bienvenido
            */
            $administrador = false; /

            if($administrador) {
                print "Bienvenido";
            } else {
                print "No tiene acceso al sistema";
            }
        ?>
    </div>
</body>
</html>
