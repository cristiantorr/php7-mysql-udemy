<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tipificación estricta</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>TIPIFICACIÓN ESTRICTA</h1>
        <ul>
           <li>Por defecto, PHP fuerza a los valores de un tipo erróneo a ser del tipo escalar esperado si es posible. Por ejemplo, una función a la que se le pasa un integer para un parámetro que se prevé sea un string obtendrá una variable de tipo string.</li>
           <li>Es posible habilitar el modo estricto en función de cada fichero. El el modo estricto solamente será aceptada una variable del tipo exacto de la declaración de tipo, o será lanzada una TypeError. La única excepción a esta regla es que se podría proporcionar un integer a una función que espere un float. Las llamadas a funciones desde dentro de funciones internas no se verán afectadas por la declaración strict_types.</li>
           <li>Para habilitar el modo escricto se emplea la sentencia declare con la declaración strict_types:</li>
        </ul>
        <h2>Ejemplos:</h2>
        <?php
            declare(strict_types=1);
            function suma(int $n1, int $n2):float
            {
                return $n1+$n2;
            }

            try {
                var_dump(suma(10,5));
                var_dump(suma(10.6,5.8));
            } catch (TypeError $e) {
                print "<p>Error: ".$e->getMessage();
            }
            ?>
    </div>
</body>
</html>