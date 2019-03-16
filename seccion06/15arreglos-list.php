<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arreglos list</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>ARREGLOS LIST</h1>
        <ul>
           <li></li>
        </ul>
        <h2>Ejemplos:</h2>
        <?php  
            $info = array("guayaba","Psidium","Myrtaceae","del Caribe");
            list($nombre,$cientifico,$familia,$origen) = $info;
            print "La ".$nombre." (".$cientifico.") son un género de unas cien especies de árboles tropicales y árboles pequeños en la familia ".$familia.", nativas ".$origen.".<hr>";
            list($nombre,$cientifico,,$origen) = $info;
            print "La ".$nombre." (".$cientifico.") son un género de unas cien especies de árboles tropicales y árboles pequeños, nativas ".$origen.".<hr>";
            list($nombre,$cientifico,,) = $info;
            print "La ".$nombre." (".$cientifico.") es una fruta deliciosa<hr>";
            list($nombre,,,) = $info;
            print "La ".$nombre." es la fruta con mayor cantidad de vitamina C<hr>";
            list($nombre) = "guayaba";
            print "La ".$nombre." es la fruta con mayor cantidad de vitamina C<hr>";
            ?>
    </div>
</body>
</html>