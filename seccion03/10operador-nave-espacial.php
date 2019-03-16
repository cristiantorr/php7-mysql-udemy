<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>operador nave espacial</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>Operador nave espacial</h1>
        <ul>
           <li>Se emplea para comparar dos expresiones</li>
           <li>Devuelve -1, 0 o 1 cuando $a es respectivamente menor , igual o mayor que $b.</li>
        </ul>
        <h2>Ejemplos:</h2>
        <?php
            print 1 <=> 1;
            print "<br>";
            print 1 <=> 2;
            print "<br>";
            print 2 <=> 1;
            print "<br>";
            print "<br>";
            print 1.5 <=> 1.5;
            print "<br>";
            print 1.5 <=> 2.1;
            print "<br>";
            print 2.1 <=> 1.5;
            print "<br>";
            print "<br>";
            print "1" <=> "1";
            print "<br>";
            print "1" <=> "2";
            print "<br>";
            print "2" <=> "1";
            print "<br>";
            print "<br>";
            ?>
    </div>
</body>
</html>