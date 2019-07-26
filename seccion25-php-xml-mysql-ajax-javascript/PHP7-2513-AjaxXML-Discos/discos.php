<!DOCTYPE html>
<html>
<head>
	<title>Discos de ayer y hoy</title>
	<meta charset="utf-8">
	<script>
		window.onload = function(){
			discosCatalogo();
			document.getElementById("cds").onchange = discoDetalle;
		};
		function discoDetalle(e){
			q = this.value;
			if (q=="") {
				document.getElementById("detalle").innerHTML = "";
			} else {
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function(){
					if (this.readyState == 4 && this.status == 200) {
						document.getElementById("detalle").innerHTML = this.responseText;
					}
				}
				xmlhttp.open("GET","discosDetalle.php?q="+q, false);
				xmlhttp.send();
			}
		}
		function discosCatalogo(){
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function(){
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("salida").innerHTML = this.responseText;
				}
			}
			xmlhttp.open("GET","discosCatalogo.php", false);
			xmlhttp.send();
		}
	</script>
</head>
<body>
	<div id="salida"></div>
	<br>
	<div id="detalle"></div>
</body>
</html>