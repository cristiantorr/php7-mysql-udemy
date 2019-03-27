<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funciones anonimas</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>FUNCIONES ANONIMAS</h1>
        <ul>
           <li></li>
        </ul>
        <h2>Ejemplos:</h2>
        <?php  
            print preg_replace_callback('~-([a-z])~', function($coincidencias){
                return strtoupper($coincidencias[1]);
            }, "-hola-mundo");
            print "<hr>";
            $saludo = function($nombre){
                printf("Hola %s<br>",$nombre);
            };
            $saludo("Mundo");
            $saludo("cara de bola");
            ?>
    </div>
</body>
</html>