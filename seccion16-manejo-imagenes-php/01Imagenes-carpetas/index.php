<!DOCTYPE html>
<html>
<head>
	<title>Imagenes | Leer la carpeta</title>
</head>
<body>
<?php
/********************
F U N C I O N E S
*********************/
function validaFoto($imagen){
	$patron = "%\.(gif|jpe?g|png)$%i"; 
	// Ejemplo de visualización del resultado 
	$bandera = preg_match($patron, $imagen) == 1 ? true : false;	
	return $bandera;
} 
$dir = opendir("fotos");//Abre un gestor de directorio para ser usado con llamadas posteriores como closedir(), readdir(), y rewinddir().
$ren = 4;
$i = 0;
if ($dir) {
	print "<table border='1'>";
	print "<tr>";
	//readdir-> Lee una entrada desde un gestor de directorio
	while ($foto=readdir($dir)) {
		if ($foto != "." && $foto != ".." && validaFoto($foto)) {
			if ($i == $ren) {
				$i=0;
				print "</tr>";
				print "<tr>";
			}
			$i++;
			print "<td>";
			print "<img src='fotos/".$foto."' width='100' height='100'/>";
			print "</td>";
		}
	}
	print "</tr>";
	print "</table>";
} else {
	print "Error al abrir la carpeta fotos";
}



?>
</body>
</html>