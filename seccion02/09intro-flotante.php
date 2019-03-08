<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadenas</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>Números de punto flotante</h1>
        <ul>
            <li>Los números de punto flotante (también conocidos como "de coma flotante" en español, y "floats" en inglés)pueden ser especificados usando cualquiera de las siguientes sintaxis:</li>
            <li><code>$a = 1.234;
                $b = 1.2e3;
                $c = 7E-10;</code></li>
            <li>El tamaño de un 'float' depende de la plataforma, aunque un valor común consiste en un máximo de ~1.8e308 con una precisión de aproximadamente 14 dígitos decimales (el formato de 64 bit del IEEE).</li>
            <li>Comprobar la igualdad de valores de punto flotante es problemático debido a la forma en que se representan internamente. Sin embargo, hay maneras de hacer comparaciones de los valores de punto flotante que evitan estas limitaciones.</li>
            <li>Para comprobar la igualdad de valores de punto flotante, se utiliza un límite superior en el error relativo debido al redondeo.Este valor se conoce como el épsilon de la máquina o unidad de redondeo, y es la menor diferencia aceptable en los cálculos.</li>
        </ul>
    </div>
</body>
</html>
