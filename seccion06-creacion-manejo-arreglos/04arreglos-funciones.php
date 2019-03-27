<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arreglos funciones</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>ARREGLOS FUNCIONES</h1>
        <ul>
           <li><b>array_push</b> — Inserta uno o más elementos al final de un array</li>
           <li><b>array_unshift</b> - Añadir al inicio de un array uno a más elementos</li>
           <li><b>array_shift</b> — Quita un elemento del principio del array</li>
           <li><b>array_slice</b> — Extraer una parte de un array</li>
           <li><b>array_splice</b> — Elimina una porción del array y la reemplaza con otra cosa</li>
           <li><b>array_merge</b> — Combina dos o más arrays</li>
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
            
            //array_push — Inserta uno o más elementos al final de un array
            array_push($meses,"Treceavo mes","Catorceavo mes");
            //array_unshift - Añadir al inicio de un array uno a más elementos
            array_unshift($dias, "primero","primerisimo");
            //array_shift — Quita un elemento del principio del array
            $mesPrimero = array_shift($meses);
            //array_slice — Extraer una parte de un array
            $mesesNuevos = array_slice($meses,11,2);
            //array_splice — Elimina una porción del array y la reemplaza con otra cosa
            $diasElimiminados = array_splice($dias, 5, 2);
            //array_merge — Combina dos o más arrays
            $mesesDias = array_merge($meses,$dias);
            foreach ($mesesDias as $key => $value) {
                print "<p>Elemento ".$key." con valor: ".$value."</p>";
            }
            print "<hr>";
            foreach ($mesesNuevos as $key => $value) {
                print "<p>Elemento ".$key." con valor: ".$value."</p>";
            }
            print "<hr>";
            foreach ($diasElimiminados as $key => $value) {
                print "<p>Elemento ".$key." con valor: ".$value."</p>";
            }

            ?>
    </div>
</body>
</html>