<?php require_once("01mysql-conectar.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>MySQL | Update </title>
	<meta charset="utf-8">
	<?php
		$pregunta = "¿Cuál es la capital de Perú?";
		$op1 = "Buenos Aires";
		$op2 = "Lima";
		$op3 = "Bogotá";
		$op4 = "Los Ángeles";
		$res = "2";
		$examen = "GEO01";
		//armamos el query
		$q = "INSERT INTO preguntas(id,pregunta,op1,op2,op3,op4,buena,examen) ";
		$q.= "VALUES(0,'".$pregunta."','".$op1."','".$op2."','".$op3."','".$op4."','".$res."','".$examen."')";
		//print $q;
		if(mysqli_query($conn,$q)){
			print "<p>Se insertó correctamente el registro</p>";
		} else {
			print "<p>Error al insertar el registro</p>";
		}
		//
		$q = "UPDATE preguntas SET op4='Colombia' WHERE id=4";
		if(mysqli_query($conn,$q)){
			print "<p>Se modifcó correctamente el registro</p>";
		} else {
			print "<p>Error al modificar el registro</p>";
		}
	?>
</head>
<body>
	
</body>
</html>