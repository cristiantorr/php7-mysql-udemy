<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arreglos sort</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>ARREGLOS SORT</h1>
        <ul>
           <li>SORT_REGULAR - compara elementos normalmente (no cambia los tipos)</li>
           <li>SORT_NUMERIC - compara elementos de forma numérica</li>
           <li>SORT_STRING - compara elementos como cadenas</li>
           <li>SORT_LOCALE_STRING - compara elementos como cadenas, basándose en la configuración regional en uso. Utiliza la configuración regional, la cual puede cambiarse usando setlocale().</li>
           <li>SORT_NATURAL - compara elementos como cadenas usando el "orden natural" de la misma forma que natsort().</li>
           <li>SORT_FLAG_CASE - se puede combinar (OR a nivel de bits) con SORT_STRING o SORT_NATURAL para ordenar cadenas de forma insensible a mayúsculas/minúsculas.</li>
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

            $alumnos[0] = "miguel";
            $alumnos[1] = "Michell";
            $alumnos[2] = "luisa";
            $alumnos[3] = "Laura";
            $alumnos[4] = "pedro";
            $alumnos[5] = "Pablo";

            $cal = array(2,3,5,4,60,40,20,30,200,100,25);
            /*
            sort($meses);
            foreach ($meses as $key => $value) {
                print "<p>Meses[".$key."] = ".$value."</p>";
            }
            //se ordena SORT_FLAG_CASE mayuscula y minuscula alfabeto
            sort($alumnos, SORT_NATURAL | SORT_FLAG_CASE);
            foreach ($alumnos as $key => $value) {
                print "<p>Alumnos[".$key."] = ".$value."</p>";
            }
            */
            sort($cal);
            foreach ($cal as $key => $value) {
                print "<p>Calificación[".$key."] = ".$value."</p>";
            }
            ?>
    </div>
</body>
</html>