<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Condicionales rangos</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>Condicionales rangos</h1>
        <ul>
           <li></li>
        </ul>
        <h2>Ejemplos:</h2>
        <?php
            $edad = 18;
            if ($edad <= 20) {
                print "<p>Te regalamos boletos para el cine</p>";
            }
            if ($edad > 20 && $edad <=30) {
                print "<p>Te regalamos boletos para el concierto de Katy Perry</p>";
            }
            if ($edad > 30 && $edad <=40) {
                print "<p>Te regalamos boletos para el teatro</p>";
            } 
            if ($edad > 40) {
                print "<p>Te regalamos boletos para la Ópera</p>";
            } 
        ?>
    </div>
</body>
</html>