<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arreglos multidimensionales</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>ARREGLOS MULTIDIMENSIONALES</h1>
        <ul>
           <li></li>
        </ul>
        <h2>Ejemplos:</h2>
        <?php  
            $ciudades = array(
                array("México","CDMX","Guadalajara","Monterrey"),
                array("España","Madrid","Barcelona","Bilbao"),
                array("Colombia","Bogotá","Bucaramanga","Medellin"),
                array("Perú","Lima","Cuzco","Arequipa", "Chiclayo", "Ayacucho")
            );

            for($i = 0; $i< count($ciudades); $i++){
                print "<ul>";
                for($j=0; $j<count($ciudades[$i]); $j++){
                    print "<li>".$ciudades[$i][$j]."</li>";
                }
                print "</ul>";
            }

            ?>
    </div>
</body>
</html>