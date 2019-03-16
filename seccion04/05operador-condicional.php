<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Condicionales sintaxis alterna</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>Condicionales sintaxis alterna</h1>
        <ul>
           <li></li>
        </ul>
        <h2>Ejemplos:</h2>
        <?php  
            $total = 12345;
            $tipoCambio = 0;
            $granTotal = ($tipoCambio>0)? $total * $tipoCambio : $total;
            $cadena = ($tipoCambio>0)? ", tipo de cambio ".$tipoCambio : "";
            print "El gran total del pedido es ".$granTotal.$cadena;

            ?> 
    </div>
</body>
</html>