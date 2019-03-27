<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>declaraciones tipo</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>DECLARACIONES TIPO</h1>
        <ul>
           <li>PHP 7 añade soporte para las declaraciones de tipo de devolución de las funciones</li>
           <li>De forma similar a las declaraciones de tipo de argumento, las declaraciones de tipo de devolución especifican el tipo del valor que serán devuelto desde una función.</li>
           <li>Están disponibles los mismos tipos para las declaraciones de tipo de devolución que para las declaraciones de tipo de argumento.</li>
           <li>La tipificación estricta también tiene efecto sobre las declaraciones de tipo de devolución. En el modo predeterminado de tipificacón débil, los valores devueltos serán forzados al tipo correcto si no son ya de ese tipo. En el modo fuerte, el valor devuelto debe ser del tipo correcto, o de lo contrario se lanzará una excepción TypeError.</li>
           <li>NOTA:Al sobrescribir un método padre, el método hijo debe hacer coincidir cualquier declaración de tipo de devolución del padre. Si el padre no define un tipo de devolución, el método hijo puede hacerlo.</li>
        </ul>
        <h2>Ejemplos:</h2>
        <?php
            /*
            declare(strict_types=1);
            function suma($n1, $n2):bool
            {
                return $n1+$n2;
            }
            var_dump(suma(10,5));
            */

            class Gato{};
            class Perro{};

            function regresaGato(): Gato {
                return new Perro;
            }
            var_dump(regresaGato());

            ?>
    </div>
</body>
</html>