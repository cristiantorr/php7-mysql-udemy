<?php
if (isset($_GET["foto"])) {
	$foto = $_GET["foto"];
} else {
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Imagenes | Opciones foto</title>
	<script>
		function regresar() {
			window.open("index.php", "_self");
			return false;
		}
		function opcionesImagen(foto) {
			var ancho = document.getElementById("ancho").value;
			var nombre = document.getElementById("nombre").value;
			window.open("optimizar-imagen-ancho.php?foto="+foto+"&ancho="+ancho+"&nombre="+nombre, "_self");
			return false;
		}

	</script>
</head>
<body>
<?php
	print "<table border='1'>";
	print "<tr>";
	print "<th>Imagen</th>";
	print "<th>Archivo</th>";
	print "<th>Alto</th>";
	print "<th>Ancho</th>";
	print "<th>Tamaño kb</th>";
	print "</tr>";
	print "<tr>";
	$archivo = "fotos/".$foto;
	$info = getimagesize($archivo);
	print "<td>";
	print "<img src='fotos/".$foto."' width='300'/>";
	print "</td>";
	print "<td>";
	print $foto;
	print "</td>";
	print "<td>";
	print $info[0];
	print "</td>";
	print "<td>";
	print $info[1];;
	print "</td>";
	print "<td>";
	print number_format(filesize($archivo)/1024,2);
	print "</td>";
	print "</tr>";
	print "</table>";
?>
<p>Escribe el nuevo ancho de la foto para mantenerla en forma proporcional</p>
<form>
<!-- <select id="op">
		<option value="75">75%</option>
		<option value="50">50%</option>
		<option value="25">25%</option>
		<option value="10">10%</option>
		<option value="5">5%</option>
	</select>-->
	<label for="ancho">Nuevo ancho de la imagen:</label>
	<br><br>
	<input type="text" name="ancho" id="ancho" placeholder="100"/>
	<br><br>
	<label for="nombre">Nombre de la nueva imagen:</label>
	<br><br>
	<input type="text" name="nombre" id="nombre" placeholder="example.jpg"/>
	<br><br>

	<input type="button" value="Optimizar" onclick="opcionesImagen('<?php print $foto; ?>');">
	<input type="button" value="Regresar"  onclick="regresar();">
</form>
</body>
</html>