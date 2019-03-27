<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>funciones</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>FUNCIONES</h1>
        <ul>
           <li></li>
        </ul>
        <h2>Ejemplos:</h2>
        <?php  
            function saludo($nombre){
                print "<h2>Hola ".$nombre."</h2>";
            }
            saludo("Pedro Picapiedra");
            saludo("Pedro Mármol");
            saludo("Juanito Pérez");
        ?>
    </div>
</body>
</html>