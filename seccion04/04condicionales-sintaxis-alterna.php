<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Condicionales sintaxis alterna</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>Condicionales sintaxis alterna</h1>
        <ul>
           <li></li>
        </ul>
        <h2>Ejemplos:</h2>
        <?php  
            $edad = 45;
            if($edad > 40) print "<p>Te regalamos boletos para la Ópera</p>";
            else print "<p>Te regalamos boletos para el cine</p>";

            $a = 18;
            $b = 18;
            if($a > $b):
                print $a." es mayor a ".$b;
            elseif ($a < $b):
                print $a." es menor a ".$b;
            else:
                print $a." es igual a ".$b;
            endif;
        ?> 
    </div>
</body>
</html>