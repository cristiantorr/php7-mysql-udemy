<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arreglos foreach</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>ARREGLOS FOREACH</h1>
        <ul>
           <li></li>
        </ul>
        <h2>Ejemplos:</h2>
<?php  
$cumple = mktime(0,0,0,8,27,1999);
$hoy = time();
$edad = $hoy-$cumple;

print "<p>Tu naciste un ".date("l",$cumple)."</p>";
print "<p>Haz vivido aproximadamente ".($edad/60/60/24)." días</p>";
print "<p>Haz vivido aproximadamente ".($edad/60/60/24/365)." años</p>";

?>
</body>
</html>