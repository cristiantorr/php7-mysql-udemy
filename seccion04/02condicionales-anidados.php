<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Condicionales anidados</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>Condicionales anidados</h1>
        <ul>
           <li></li>
        </ul>
        <h2>Ejemplos:</h2>
        <?php 
            $edad = 18;
            $edoCivil = "soltero";
            if ($edad < 40) {
                print "Disfrute de nuestro crucero en el Caribe ";
                if ($edoCivil == "casado") {
                    print "en compañía de su familia ";
                }
                print "con un descuento especial y muchas sorpresas";
            } else {
                print "Lo invitamos a nuestro retiro al campo donde encontrará paz ";
                if ($edoCivil=="casado") {
                    print "con sus seres queridos ";
                } else {
                    print "de encontrarse con usted mismo ";
                }
                print " en lo alto de un hermoso lago en las montañas Suizas.";
            }
            print "<br>";
            print "Su edad es de ".$edad." años y su estado civil es ".$edoCivil;

        ?>
    </div>
</body>
</html>