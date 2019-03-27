<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>funciones return</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>FUNCIONES RETURN</h1>
        <ul>
           <li></li>
        </ul>
        <h2>Ejemplos:</h2>
        <?php  
		/***************
		Variables
		****************/
		$subtotal = 1500;
		$tasa = 0.16;
		$iva = 0;
		$edad = 999999;
		/****************
		FUNCIONES
		*****************/
		function calculaIva($sub, $porcien){
			$ivaCalculo = $sub * (1+$porcien);
			return $ivaCalculo;
		}
		function validaEdad($edad)
		{
			$valida = ($edad<=0 || $edad >120);
			return !$valida;
		}
		/****************
		INICIO
		*****************/
		print "<p>Subtotal : ".$subtotal."</p>";
		//calcula iva
		$iva = calculaIva($subtotal, $tasa);
		//
		print "<p>Total con IVA: ".$iva;
		if (validaEdad($edad)) {
			print "<p>Edad válida</p>";
		} else {
			print "<p>Edad NO válida</p>";
		}
		

	?>

    </div>
</body>
</html>