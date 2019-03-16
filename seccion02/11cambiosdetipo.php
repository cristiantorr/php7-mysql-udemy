<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Secuencias de escape unicode</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>Cambios de tipo</h1>
        <ul>
            <li>Es posible "forzar" a que resultado de una operación cambie de tipo, como por ejemplo una divisiçon entre números con decimales regrese un número entero. La manera más fácil de forzar este cambio es así:</li>
            <li>$entero = (integer) $subtotal/$iva</li>
            <li>La variable $entero sólo recibirá un valor entero, sin los decimales.</li>
            <li>(integer) -> cambia a numero entero.</li>
            <li>(double) -> cambia a número con decimales</li>
            <li>(string) -> cambia a cadena de caracteres</li>
            <li>(boolean) -> cambia a verdadero o falso : En este caso cualquier valor que sea diferente de cero regresa "TRUE", y cero regresa "FALSE".</li>
            <li>También tenemos las funciones:
                <ul>
                    <li>intval():forzamos a el resultado de una operacióna ser entero</li>
                    <li>floatval()</li>
                    <li>strval()</li>
                    <li>settype()</li>
                </ul>
            </li> 
        </ul>
        <h2>Ejemplos:</h2>
        <?php 
        // con (int) forzamos a la variable hacer entera
            $div = 10/3;
            print $div."<br />";
            $entero = (int) $div;
            print $entero."<br />";
            var_dump($div, $entero);
            print "<br />";
            //con intval forzamos a el resultado de la operación ser entero
            print intval(10/3)."<br />";
            settype($div, "integer");
            var_dump($div);
            print "<br />";
            print gettype($div);
        ?>
    </div>
</body>
</html>
