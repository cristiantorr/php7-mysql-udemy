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
        <h1>Secuencias de escape unicode</h1>
        <ul>
            <li>Esta sintaxis toma un punto de código de Unicode en forma de hexadecimal e imprime ese punto de código en UTF-8 a una cadena con entrecomillado doble o a un heredoc. Se acepta cualquier punto de código válido, siendo los ceros iniciales opcionales.<br />
            echo "\u{10084}";<br />
            echo "\u{0000aa}";<br />
            echo "\u{9999}";<br />
            </li>
        </ul>
        <h2>Ejemplos:</h2>
            <?php 
                 echo "\u{10084}";
                 echo "\u{0000aa}";
                 echo "\u{9999}";
            ?>
    </div>
</body>
</html>
