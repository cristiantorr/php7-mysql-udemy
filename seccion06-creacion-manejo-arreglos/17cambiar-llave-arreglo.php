<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arreglos funciones ubicación</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>ARREGLOS FUNCIONES UBICACIÓN</h1>
        <ul>
           <li></li>
        </ul>
        <h2>Ejemplos:</h2>
        <?php
            $arreglo = ["llaveVieja"=>12345];
            var_dump($arreglo);

            if (isset($arreglo["llaveVieja"])) {
            $arreglo["llaveNueva"] = $arreglo["llaveVieja"];
            unset( $arreglo["llaveVieja"]);
            }
            print "<br>";
            var_dump($arreglo);
            ?>
    </div>
</body>
</html>