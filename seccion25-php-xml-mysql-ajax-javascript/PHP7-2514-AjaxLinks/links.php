<!DOCTYPE html>
<html>
<head>
	<title>Live Search</title>
	<meta charset="utf-8">
	<script>
		window.onload = function(){
			document.getElementById("texto").onkeyup = busca;
		};
		function busca(e){
			cadena = this.value;
			console.log(cadena);
			if (cadena.length==0) {
				document.getElementById("salida").innerHTML = "";
				document.getElementById("salida").style.border = "0px";
			} else {
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function(){
					if (this.readyState == 4 && this.status == 200) {
						document.getElementById("salida").innerHTML = this.responseText;
					}
				}
				xmlhttp.open("GET","linksBusca.php?q="+cadena, false);
				xmlhttp.send();
			}
		}
	</script>
</head>
<body>
<form>
	<input type="text" size="40" id="texto"/>
	<div id="salida"></div>
</form>
</body>
</html>