<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yield llaves</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>YIELD LLAVES</h1>
        <ul>
           <li>Una función generadora es igual que una función normal, con la diferencia de que en vez de devolver un valor, un generador invoca yield tantas veces como necesita.</li>
           <li>La clave de una función generadora es la palabra reservada yield. En su forma más simple, la sentencia yield es parecida a la sentencia return, excepto en que en vez de detener la ejecución de la función y devolver un valor, yield facilita el valor al bucle que itera sobre el generador y pausa la ejecución de la función generadora.</li>
        </ul>
        <h2>Ejemplos:</h2>
        <?php  
$input = <<<'EOF'
1;Sor Juana;Hombres necios
2;López Velarde;La suave Patria
3;Becquer;Vuelven oscuras golondrinas
EOF;

function poemas($input)
{
    foreach (explode("\n",$input) as $value) {
        $r = explode(";", $value);
        $id = array_shift($r);
        yield $id=>$r;
    }
}


foreach (poemas($input) as $id => $poema) {
    print $id."<br>";
    print $poema[0]."<br>";
    print $poema[1]."<br>";
    print "<hr>";
}


?>
    </div>
</body>
</html>