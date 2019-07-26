<!DOCTYPE html>
<html>
<head>
	<title>Filtra tabla de alumnos</title>
	<meta charset="utf-8">
	<script>
	window.onload = function(){
		document.getElementById("genero").onchange = function(){
			genero = document.getElementById("genero").value;
			escuela = document.getElementById("escuela").value;
			materia = document.getElementById("materia").value;
			//alert(genero+" "+escuela+" "+materia);
			leeDatos(genero,escuela,materia);
		}
		document.getElementById("escuela").onchange = function(){
			genero = document.getElementById("genero").value;
			escuela = document.getElementById("escuela").value;
			materia = document.getElementById("materia").value;
			//alert(genero+" "+escuela+" "+materia);
			leeDatos(genero,escuela,materia);
		}
		document.getElementById("materia").onchange = function(){
			genero = document.getElementById("genero").value;
			escuela = document.getElementById("escuela").value;
			materia = document.getElementById("materia").value;
			//alert(genero+" "+escuela+" "+materia);
			leeDatos(genero,escuela,materia);
		}
	}
	function leeDatos(genero,escuela,materia){
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState==4 && this.status==200) {
				document.getElementById("salida").innerHTML = this.responseText;
			}
		}
		xmlhttp.open("GET","alumnos.php?g="+genero+"&e="+escuela+"&m="+materia,true);
		xmlhttp.send();
	}
	</script>
</head>
<body>
<form>
	<select id="genero">
		<option value="F">Femenino</option>
		<option value="M">Masculino</option>
	</select>
	<select id="escuela">
		<option value="1">Escuela 1</option>
		<option value="2">Escuela 2</option>
		<option value="3">Escuela 3</option>
	</select>
	<select id="materia">
		<option value="1">Idiomas</option>
		<option value="2">Deportes</option>
		<option value="3">Historia</option>
	</select>
</form>
<div id="salida"></div>
</body>
</html>