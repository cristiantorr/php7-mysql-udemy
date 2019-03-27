<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Varables de variables y constantes</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>Varables de variables</h1>
        <ul>
            <li>Podemos utilizar el nombre de una variable dentro del valor de una segunda variable y utilizar esta última por medio de las llaves{}</li>
            <li>Por ejemplo</li>
            <li>
                <code>
                    $df = 22000000;<br />
                    $guadalajara = 4000000;<br />
                    $monterrey = 1400000;<br />
                    $ciudad = "dfs";<br />
                
                    print php: La población de la ciudad $ciudad es de ${$ciudad} de habitantes;<br />
                    $ciudad = "guadalajara";<br />
                    print php: La población de la ciudad $ciudad es de ${$ciudad} de habitantes<br />
                    $ciudad = "monterrey";<br />
                    print php: La población de la ciudad $ciudad es de ${$ciudad} de habitantes<br />
                   
                    <strong>NOTA:</strong>En PHP7 se evalúan en forma diferente las variables de variables en arreglos o arrays.
                </code>
            </li>
        </ul>
        <h2>CONSTANTES</h2>
        <ul>
                <li>Por medio de la función define( podemos definir una constante por su nombre en tiempo de ejecución:<br />
                bool define ( $string $name, mixed $value [,bool $case_insensitive = false
                ])
                </li>
                <li>En PHP7 se aceptan también arreglos.</li>
                <li>El último parametro permite diferenciar entre mayúsculas y minúsculas, donde si es falso, la constante SALARIO  es diferente a Salario.</li>
        </ul>
        <h3>Ejemplos variable que llama a otra variable:</h3>
        <?php 

            $cdmx = 22000000;
            $guadalajara = 4000000;
            $monterrey = 1400000;
            //variable de variables
            $ciudad = "cdmx";
            print "<p>La población de la ciudad $ciudad es de ${$ciudad}</p>";
            $ciudad = "guadalajara";
            print "<p>La población de la ciudad $ciudad es de ${$ciudad}</p>";
            $ciudad = "monterrey";
            print "<p>La población de la ciudad $ciudad es de ${$ciudad}</p>";
        ?>
        <h3>Ejemplos CONSTANTES:</h3>
            <?php 
            //Creamos una constante
                define("TASA_CAMBIO",18.35, true);
                $deuda = 12345;
                print "Tú deuda en dólares es de ".($deuda*TASA_CAMBIO);      
            ?>
    </div>
</body>
</html>
