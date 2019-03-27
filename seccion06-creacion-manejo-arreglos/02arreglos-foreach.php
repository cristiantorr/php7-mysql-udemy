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
            $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
            $dias[] = "Lunes";
            $dias[] = "Martes";
            $dias[] = "Miércoles";
            $dias[] = "Jueves";
            $dias[] = "Viernes";
            $dias[] = "Sábado";
            $dias[] = "Domingo";

            $alumnos[0] = "Alejandro";
            $alumnos[1] = "Michell";
            $alumnos[2] = "Jessica";
            $alumnos[3] = "Laura";
            $alumnos[4] = "Pedro";
            $alumnos[5] = "Pablo";

            foreach ($meses as $key => $value) {
                print "<p>El campo ".$key." tiene un valor de ".$value."</p>";
            }

            foreach ($dias as $key => $value) {
                print "<p>El campo ".$key." tiene un valor de ".$value."</p>";
            }

            ?>
    </div>
</body>
</html>