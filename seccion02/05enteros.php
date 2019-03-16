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
        <h1>Variables enteras</h1>
        <ul>
            <li>Los enteros pueden especificarse mediante notación decimal(base 10), hexadecimal (base 16),octal(base 8) o binaria(base 2), opcionalmente precedidos por un signo(/-0+).</li>
            <li>Los literales de tipo enterobinarios están disponibles desde PHP 5.4.0</li>
            <li>Para utilizar la notación octal, se antepone al número un 0 (cero).Para utilñizar la notación hexadecimal, se antepone al número 0x.Para utilizar la notación binaria, se antepone al número 0b.</li>
            <li>El tamaño de un integer depende de la plataforma, aunque el valor usual es un valor máximo de aproximadamente dos mil millones (esto es, 32 bits con signo).</li>
            <li>Las plataformas de 64 bits normalmente tienen un valor máximo de aproximadamente 9E18, excepto en windows antes de PHP 7, que siempre es de 32 bits.</li>
            <li>Si PHP encuentra un número fuera de los límites de un integer, se interpretará en su lugar como un valor de tipo float..</li>
            <li>También, una operación cuyo resultado sea un número fuera de los límites de un integer devolverá en su lugar un valor de tipo float.</li>
            <li></li>
        </ul>
        <h2>Ejemplos: </h2>
        <?php 
            $num = 12345678;
            $num = - 12345678;
            $num = 0123456; //octal 0-7
            $num = 0xFFAADD; //hexadecimal 0-9 a-f
            $num = 0b1010101; //Binario 0-1

            $num = 2147483647;
            print var_dump($num);
            $num = 2147483648; //tipo entero mayor al limite
            print var_dump($num);
            $num = 2147483647 * 2; 
            print var_dump($num);
        ?>
    </div>
</body>
</html>
