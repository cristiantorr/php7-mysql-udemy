<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arreglos constantes</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>ARREGLOS CONSTANTES</h1>
        <ul>
           <li></li>
        </ul>
        <h2>Ejemplos:</h2>
        <?php
            define('FRUTAS',["manzana","pera","uvas","sandia"]);
            print "<pre>";
            var_dump(FRUTAS);
            print "</pre>";
            print FRUTAS[1];
            FRUTAS[1] = "Zanahoria";
        ?>
    </div>
</body>
</html>