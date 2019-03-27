<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Generadores return</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>GENERADORES RETURN</h1>
        <ul>
          
           <li>Funcionalidad de los generadores, habilita la sentencia "return" para utilizarla dentro de un generador para que devuelva una expresión final</li>
           <li>Este  valor se obtiene con el nuevo metodo Generator::getReturn(), el cual se utiliza una vez que el generador ha finalizado de producir valores.</li>
        </ul>
        <h2>Ejemplos:</h2>
        <?php
            $gen = (function(){
                yield 1;
                yield 2;
                return 3;
            })();
            foreach ($gen as $value) {
                print $value."<br>";
            }
            print $gen->getReturn()."<br>";
            ?>
    </div>
</body>
</html>