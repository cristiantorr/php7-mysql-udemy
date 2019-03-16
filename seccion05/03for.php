<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ciclo for</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>CICLO FOR</h1>
        <ul>
           <li></li>
        </ul>
        <h2>Ejemplos:</h2>
        <?php  
            print "<ul>";
            for ($i=0; $i < 10 ; $i++) { 
                print "<li>El valor de i es ".$i."</li>";
            }
            print "</ul>";
            print "<ul>";
            for ($i=10; $i > 0 ; $i--) print "<li>El valor de i es ".$i."</li>";
            print "</ul>";

            $i=10;
            $j=0;
            print "<ul>";
            for (; $i > 0 ; $i--,$j++) print "<li>El valor de i es ".$i.", valor de j es ".$j."</li>";
            print "</ul>";

            ?>
    </div>
</body>
</html>