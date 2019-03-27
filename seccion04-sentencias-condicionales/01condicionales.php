<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Condicionales</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>Condicionales</h1>
        <ul>
           <li></li>
        </ul>
        <h2>Ejemplos:</h2>
        <?php  
            $edad = 56;
            //si es verdadero, true
            if ($edad>40) {
                print "<p>Lo sentimos, esta página puede resultar peligrosa para tu salud</p>";
            } else if($edad>30){
                print "<p>Bienvenido a nuestra página, donde encontrarás lo que siempre haz buscado</p>";
            } else if($edad>18){
                print "<p>Bienvenido a nuestra página, estás en edad de comprar nuestros productos</p>";
            } else {
                print "<p>Lo sentimos, no puedes entrar a nuestra página</p>";
            }
	    ?>
    </div>
</body>
</html>