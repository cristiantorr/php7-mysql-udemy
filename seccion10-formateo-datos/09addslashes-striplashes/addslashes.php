
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>addslashes | stripslashes</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>ADDSLASHES |  STRIPSLASHES</h1>
        <ul>
           <li><strong>ADDSLASHES:</strong> Escapa una cadena con barras invertidas</li>
           <li><strong>STRIPSLASHES:</strong> Quita las barras de un string con comillas escapadas</li>
        </ul>
        <h2>Ejemplos:</h2>
<?php
$cadena = "Soy el 'rey' de la colina, dijo Joe's";
$cadena = addslashes($cadena);
print $cadena."<br>";
$cadena = stripslashes($cadena);
print $cadena."<br>";
?>

</body>
</html>