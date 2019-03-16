<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arreglos asociativos</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>ARREGLOS ASOCIATIVOS</h1>
        <ul>
           <li></li>
        </ul>
        <h2>Ejemplos:</h2>
        <?php  
            $empleado = array(
                "nombre" => "James",
                "apellidos" => "Bond",
                "edad" => 40,
                "num" => "007"
            );
            print "Nombre: ".$empleado["nombre"]." ".$empleado["apellidos"];
            foreach ($empleado as $llave => $valor) {
                print "<p>El valor de la propiedad ".$llave." es de: ".$valor."</p>";
            }
            $alumno["nombre"] = "Pedro";
            $alumno["apellido"] = "Picapiedra";
            $alumno["puesto"] = "Montacargas";
            foreach ($alumno as $llave => $valor) {
                print "<p>El valor de la propiedad <b>".$llave."</b> es de: ".$valor."</p>";
            }
            print "El nombre del empleado es $empleado[nombre], ".$empleado['apellidos'];
            ?>
    </div>
</body>
</html>