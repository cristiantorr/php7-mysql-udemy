<!DOCTYPE html>
<html>
<head>
	<title>Subir una imagen a la base de datos</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="subirArchivo.php" method="post" enctype="multipart/form-data">
		<input type="text" required name="nombre" placeholder="Nombre del archivo en la BD"/>
		<input type="file" required name="imagen"/>
		<input type="submit" value="Subir archivo"/>
	</form>
</body>
</html>