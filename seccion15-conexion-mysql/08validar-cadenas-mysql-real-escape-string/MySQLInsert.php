<?php require_once("php/conn.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>MySQL | Insertar un registro</title>
	<meta charset="utf-8">
	<?php
		$pregunta = mysqli_real_escape_string($conn,"¿Cuál es la 'capital' de Italia?");
		$op1 = mysqli_real_escape_string($conn,"Barcelona");
		$op2 = mysqli_real_escape_string($conn,"Roma");
		$op3 = mysqli_real_escape_string($conn,"París");
		$op4 = mysqli_real_escape_string($conn,"O'donnel");
		$res = mysqli_real_escape_string($conn,"2");
		$examen = mysqli_real_escape_string($conn,"GEO01");
		//armamos el query
		$q = "INSERT INTO preguntas(id,pregunta,op1,op2,op3,op4,buena,examen) ";
		$q.= "VALUES(0,'".$pregunta."','".$op1."','".$op2."','".$op3."','".$op4."','".$res."','".$examen."')";
		//print $q;
		$r = mysqli_query($conn,$q);
		if($r){
			print "<p>Se insertó correctamente el registro</p>";
		} else {
			print "<p>Error al insertar el registro</p>";
		}
	?>
</head>
<body>
	
</body>
</html>