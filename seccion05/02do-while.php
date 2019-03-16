<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cliclo do while</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>CICLO DO WHILE</h1>
        <ul>
           <li></li>
        </ul>
        <h2>Ejemplos:</h2>
        <?php  
            $numero = 5;
            $binario = "";
            do{
                $d = $numero % 2;
                //concatenamos la cadena
                $binario = $d.$binario;
                $numero = intval($numero/2);
            } while($numero>=2);
            $binario = $numero.$binario;
            print "<p>El número binario es ".$binario."</p>";
        ?>
    </div>
</body>
</html>