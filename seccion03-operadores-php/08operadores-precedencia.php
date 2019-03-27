<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>precedencia de los operadores</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>Precedencia de los operadores</h1>
        <ul>
           <li></li>
        </ul>
        <h2>Ejemplos:</h2>
        <?php
        //le da precedncia ala multiplicación 3x4 = 12 lo eleva a la cuadrado 12 x 12 = 144 y le suma 2 144 + 2 = 146
        $a = 2+(3*4)**2;
        print $a;
        ?>
    </div>
</body>
</html>