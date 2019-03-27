<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>funciones alcance</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>FUNCIONES ALCANCE</h1>
        <ul>
           <li></li>
        </ul>
        <h2>Ejemplos:</h2>
        <?php
        /********
        Variables
        *********/
        $empleado = "Pedro Picapiedra";
        $mensaje = "buenos días";
        /********
        Funciones
        *********/
        function saludo($nombre, $msg){
            print "<h2>Hola ".$nombre.", ".$msg."</h2>";
        }
        /********
        Inicio
        *********/
        saludo($empleado, $mensaje);
        ?>
    </div>
</body>
</html>