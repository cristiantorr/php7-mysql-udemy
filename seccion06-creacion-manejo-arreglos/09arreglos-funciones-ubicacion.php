<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arreglos funciones ubicación</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>ARREGLOS FUNCIONES UBICACIÓN</h1>
        <ul>
           <li></li>
        </ul>
        <h2>Ejemplos:</h2>
        <?php  
            $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre","treceavo");
            print current($meses)."<br>";
            print next($meses)."<br>";
            print end($meses)."<br>";
            print prev($meses)."<br>";
            print next($meses)."<br>";
            print next($meses)."<br>";
            print current($meses)."<br>";


            ?>
    </div>
</body>
</html>