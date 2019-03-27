<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fechas | timezone</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>FECHAS TIME ZONE</h1>
        <ul>
           <li></li>
        </ul>
        <h2>Ejemplos:</h2>
<?php
//print phpinfo();
print date("D, d M Y H:i:s")."<br>";
//date_default_timezone_set("America/Mexico_City");
ini_set("date.timezone", "America/Mexico_City");
print date("D, d M Y H:i:s");
?>
</body>
</html>