<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Valores predeterminados</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>VALORES PREDETERMINADOS</h1>
        <ul>
           <li></li>
        </ul>
        <h2>Ejemplos:</h2>
        <?php
            function pastel($costo, $sabor=array("limon"))
            {
                return "<p>Esto es un pastel sabor ".join(",",$sabor).", con un costo de $".$costo."</p>";
            }
            $sabores = array("fresa","chocolate");
            print pastel(100,$sabores);
            print pastel(200);
            ?>
    </div>
</body>
</html>