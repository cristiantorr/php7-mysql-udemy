<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Valores referencia</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>VALORES REFERENCIA</h1>
        <ul>
           <li></li>
        </ul>
        <h2>Ejemplos:</h2>
        <?php
            function saludo(&$nombre)
            {
                $nombre .= ", buenos dias";
            }
            $nombre = "Pedro Picapiedra";
            saludo($nombre);
            print $nombre;
            //& pasamos por referencia (si se modifica)
            //por omision se pasa el valor (no se modifica)
            $fruta = array("manzana","pera");
            function frutas(&$f)
            {
                array_push($f,"uvas");
            }
            frutas($fruta);
            var_dump($fruta);
            ?>
    </div>
</body>
</html>