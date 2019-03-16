<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arreglos superglobals</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>ARREGLOS SUPERGLOBALS</h1>
        <ul>
           <li></li>
        </ul>
        <h2>Ejemplos:</h2>
        <?php  
            $nombre = "James";
            $apellido = "Bond";

            function saludo(){
                return "Hola ".$GLOBALS['nombre']." ".$GLOBALS['apellido'];
            }

            print saludo();
            print "<hr>";
            print $_SERVER["PHP_SELF"]."<br>";
            print $_SERVER["SERVER_NAME"]."<br>";
            print $_SERVER["HTTP_HOST"]."<br>";
            print $_SERVER["HTTP_REFERER"]."<br>";
            print $_SERVER["SCRIPT_NAME"]."<br>";
            print $_SERVER["HTTP_USER_AGENT"]."<br>";
            ?>
    </div>
</body>
</html>