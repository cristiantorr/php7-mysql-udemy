<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>operadores lógicos</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>OPERADORES LÓGICOS</h1>
        <ul>
           <li>and ó &&</li>
           <li>or ó ||</li>
           <li>xor</li>
           <li>not ó !</li>
        </ul>
        <h2>Ejemplos:</h2>
        <?php
            $dinero = false;
            $tiempo = false;

            if ($dinero and $tiempo) {
                print "Voy al cine";
            } else {
                print "Me quedo en casa";
            }

            // &&
            if ($dinero && $tiempo) {
                print "Voy al cine";
            } else {
                print "Me quedo en casa";
            }

            // ||

            if ($dinero || $tiempo) {
                print "Voy al cine";
            } else {
                print "Me quedo en casa";
            }
            ?>
    </div>
</body>
</html>