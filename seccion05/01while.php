<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cliclo while</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>CICLO WHILE</h1>
        <ul>
           <li></li>
        </ul>
        <h2>Ejemplos:</h2>
        <?php  
            $contador = 1;
            $veces = 10;
            print "<p>Se van a visualizar ".$veces." números</p>";
            while ($contador <= $veces) {
                print "<p>Número: ".$contador."</p>";
                $contador++;
            }
            print "Fin del ciclo, el contador tiene el valor de ".$contador;
            ?>
    </div>
</body>
</html>