<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arreglos funciones ordenado</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>ARREGLOS FUNCIONES ORDENADO</h1>
        <ul>
           <li></li>
        </ul>
        <h2>Ejemplos:</h2>
        <?php  
            $cal = array(2,3,5,4,60,40,20,30,200,100,25);
            rsort($cal);
            var_dump($cal);
            foreach ($cal as $key => $value) {
                print "<p>Calificación[".$key."] = ".$value."</p>";
            }
            print "<hr>";
            $empleado = array(
                "nombre" => "James",
                "apellidos" => "Bond",
                "edad" => 40,
                "num" => "007"
            );
            print "<hr>";
            arsort($empleado);
            foreach ($empleado as $llave => $valor) {
                print "<p>El valor de la propiedad ".$llave." es de: ".$valor."</p>";
            }
            print "<hr>";
            ksort($empleado);
            foreach ($empleado as $llave => $valor) {
                print "<p>El valor de la propiedad ".$llave." es de: ".$valor."</p>";
            }
            print "<hr>";
            krsort($empleado);
            foreach ($empleado as $llave => $valor) {
                print "<p>El valor de la propiedad ".$llave." es de: ".$valor."</p>";
            }
            ?>
    </div>
</body>
</html>