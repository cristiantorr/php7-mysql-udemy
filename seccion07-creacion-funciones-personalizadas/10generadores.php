<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Generadores</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>GENERADORES</h1>
        <ul>
        <li>Los generadores proporcionan un modo fácil de implementar iteradores simples sin la sobrecarga o complejidad de implementar una clase que implemente la interfaz Iterator.</li>
            <li>Un generador permite escribir código que utilice foreach para iterar sobre un conjunto de datos sin que sea necesario cargar el array en memoria, lo que puede ocasionar que se exceda el límite de memoria, o requiera una cantidad considerable de tiempo de procesado para generarse. En su lugar, se puede escribir una función generadora, que es igual que una función normal, con la salvedad de que en vez de hacer un solo return, un generador puede invocar yield tantas veces como necesite para proporcionar valores por los que iterar.</li>
        </ul>
        <h2>Ejemplos:</h2>
        <?php 
            function rango($inicio, $fin, $incremento=1)
            {
                for($i=$inicio; $i<=$fin; $i+=$incremento){
                    yield $i;
                }
            }
            foreach (range(1,10) as $key => $value) {
                print $value." ";
            }
            print "<hr>";
            foreach (rango(1,10) as $key => $value) {
                print $value." ";
            }
            print "<hr>";

        ?>
    </div>
</body>
</html>