<!DOCTYPE html>
<html>
<head>
	<title>Subir una imagen a la base de datos</title>
	<meta charset="utf-8">
	<?php
	include "conn.php";
	/***********
	VARIABLES
	************/
	$msg = array();
	//modos
	//A-Alta
	//B-Baja
	//C-Cambio
	//D-Eliminar
	//S-Select
	if (isset($_GET["m"])) {
		$m = $_GET["m"];
	} else {
		$m = "S";
	}
	//Baja definitiva
	if ($m=="D") {
		$id = $_GET["id"];
		$sql = "DELETE FROM imagenes WHERE id=".$id;
		$m = "S";
	}
	//Select o mostrar
	if ($m=="S") {
		$sql = "SELECT * FROM imagenes";
		$r = mysqli_query($conn, $sql);
	}
	//cambio o baja
	if ($m=="C" || $m=="B") {
		$id = $_GET["id"];
		$sql = "SELECT * FROM imagenes WHERE id=".$id;
		$r = mysqli_query($conn, $sql);
		//$data = mysqli_fetch_assoc($r);
		//
	}
	?>
</head>
<body>
	<?php if($m=="S") { ?>
		<label for="alta"></label>
		<input type="button" name="alta" value="Subir una imagen" id="alta"/>
	<?php } ?>

	<?php if($m=="A" || $m=="C" || $m=="B") { 
		if (count($msg)>0) {
			print "<div>";
			foreach ($msg as $key => $valor) {
				print "<strong>* ".$valor."</strong>";
			}
			print "</div>";
		}
	 } ?>

	<?php if($m=="A" || $m=="C"){ ?>
		<form action="subirArchivo.php" method="post" enctype="multipart/form-data">
			<input type="text" required name="nombre" placeholder="Nombre del archivo en la BD"/>
			<input type="file" required name="imagen"/>
			<input type="submit" value="Subir archivo"/>
		</form>
	<?php } ?>

	<?php if($m=="S" || $m=="B"){ ?>
	<table border='1'>
		<thead>
			<tr>
				<th>id</th>
				<th>Nombre</th>
				<th>Imagen</th>
				<?php if($m=="S"){ ?>
					<th>Borrar</th>
					<th>Modificar</th>
				<?php } ?>
			</tr>
		</thead>
		<tbody>
			<?php
			while ($data = mysqli_fetch_assoc($r)) {
				print "<tr>";
				print "<td>".$data['id']."</td>";
				print "<td>".$data['nombre']."</td>";
				print "<td><img width='200' src='data:image/jpg;base64,".base64_encode($data['imagen'])."'/></td>";
				if($m=="S"){
					print "<td><a href='index.php?m=B&id=".$data['id']."'>Borrar</td>";
					print "<td><a href='index.php?m=C&id=".$data['id']."'>Modificar</td>";
				}
				print "</tr>";
			}
			?>
		</tbody>
	</table>
	<?php 
		if($m=="B"){
			print "<label for='si'>¿Desea borrar esta imagen?</label>";
			print "<input type='button' id='si' value='Si'/>";
			print "<input type='button' id='no' value='No'/>";
			print "<p>Una vez borrado el registro NO se podrá recuperar</p>";
		}
	} ?>
</body>
</html>