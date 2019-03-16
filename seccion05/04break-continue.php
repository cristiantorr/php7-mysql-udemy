<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>break continue</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>BREAK Y CONTINUE/h1>
        <ul>
           <li></li>
        </ul>
        <h2>Ejemplos:</h2>
        <?php  
            for ($i=0; $i <10 ; $i++) { 
                if ($i==7) {
                    print "<p>Este es el número mágico: ".$i;
                    break;
                }
                print "<p>El valor de i es: ".$i;
            }
            print "<p>Fin del ciclo</p>";
            for ($i=0; $i <10 ; $i++) { 
                if($i%2==1) continue;
                print "<p>El valor de i es: ".$i;
            }
            print "<p>Fin del ciclo</p>";
            /*** tercer ejemplo ***/
            for ($i=0; ; $i++) { 
                if($i>10) break;
                print "<p>El valor de i es: ".$i;
            }
            print "<p>Fin del ciclo</p>";
            /*** cuarto ejemplo ***/
            $i=0;
            for ( ; ; ) { 
                if($i>10) break;
                print "<p>El valor de i es: ".$i;
                $i++;
            }
            print "<p>Fin del ciclo</p>";
            ?>
    </div>
</body>
</html>