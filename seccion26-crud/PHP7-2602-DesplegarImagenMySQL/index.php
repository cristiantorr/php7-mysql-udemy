<!DOCTYPE html>
<html>
<head>
	<title>Subir una imagen a la base de datos</title>
	<meta charset="utf-8">
	<?php
	include "conn.php";
	$sql = "SELECT * FROM imagenes";
	$r = mysqli_query($conn, $sql);
	?>
</head>
<body>
	<form action="subirArchivo.php" method="post" enctype="multipart/form-data">
		<input type="text" required name="nombre" placeholder="Nombre del archivo en la BD"/>
		<input type="file" required name="imagen"/>
		<input type="submit" value="Subir archivo"/>
	</form>
	<table border='1'>
		<thead>
			<tr>
				<th>id</th>
				<th>Nombre</th>
				<th>Imagen</th>
				<th>Borrar</th>
				<th>Modificar</th>
			</tr>
		</thead>
		<tbody>
			<?php
			while ($data = mysqli_fetch_assoc($r)) {
				print "<tr>";
				print "<td>".$data['id']."</td>";
				print "<td>".$data['nombre']."</td>";
				print "<td><img width='200' src='data:image/jpg;base64,".base64_encode($data['imagen'])."'/></td>";
				print "<td><a href='index.php?m=b&id=".$data['id']."'>Borrar</td>";
				print "<td><a href='index.php?m=m&id=".$data['id']."'>Modificar</td>";
				print "</tr>";
			}
			?>
		</tbody>
	</table>
</body>
</html>