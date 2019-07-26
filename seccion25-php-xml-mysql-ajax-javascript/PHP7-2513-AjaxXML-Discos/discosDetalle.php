<?php  
if(isset($_GET["q"])){
	$q = $_GET["q"];
	//Creamos el objeto XML
	$xmlDoc = new DOMDocument();
	$xmlDoc->load("discos.xml");
	//Recupamos los nodos de artistas
	$x = $xmlDoc->getElementsByTagName("ARTIST");
	//Ciclo
	for ($i=0; $i < $x->length ; $i++) { 
		//Buscamos el nodo
		if ($x->item($i)->nodeType==1) {
			$artista = $x->item($i)->childNodes->item(0)->nodeValue;
			if ($q==$artista) {
				$y = $x->item($i)->parentNode;
				break;
			}
		}
	}
}

$cd = $y->childNodes;
//Mostramos los datos del cd
for ($i=0; $i < $cd->length ; $i++) { 
	if ($cd->item($i)->nodeType==1) {
		print "<b>".$cd->item($i)->nodeName.":</b> ";
		print $cd->item($i)->childNodes->item(0)->nodeValue;
		print "<br>";
	}
}
?>