<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funciones anonimas use</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>FUNCIONES ANONIMAS USE</h1>
        <ul>
           <li></li>
        </ul>
        <h2>Ejemplos:</h2>
        <?php  
            $mensaje = "hola";

            //Sin el "use"
            $ejemplo = function(){
                var_dump($mensaje);
            };
            $ejemplo();

            print "<hr>";
            //Utilizando "use"
            $ejemplo = function() use ($mensaje){
                var_dump($mensaje);
            };
            $ejemplo();

            print "<hr>";
            //Utilizando "use" por referencia
            $mensaje = "adios";
            $ejemplo = function() use (&$mensaje){
                var_dump($mensaje);
            };
            $ejemplo();

            print "<hr>";
            //Utilizando "use" por referencia y argumentos
            $mensaje = "buenas tardes";
            $ejemplo = function($arg) use (&$mensaje){
                var_dump($arg.", ".$mensaje);
            };
            $ejemplo("Pedro Picapiedra");

            ?>
    </div>
</body>
</html>