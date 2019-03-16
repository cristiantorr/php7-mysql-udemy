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
            <li>Por medio de unset() podemos eliminar una variable, un objeto, una instancia o un elemnto de un arreglo.</li>
        </ul>
        <h2>Ejemplos:</h2>
        <?php 
            $entero = 10;
            unset($entero);
            var_dump($entero);
        ?>
    </div>
</body>
</html>
