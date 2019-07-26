<?php  
$xmlDoc = new DOMDocument();
$xmlDoc->load("links.xml");
$x = $xmlDoc->getElementsByTagName("link");
$q = $_GET["q"];
//buscamos los links
if (strlen($q)>0) {
	$salida = "";
	for ($i=0; $i < $x->length ; $i++) { 
		$dios = $x->item($i)->getElementsByTagName("dios");
		$url = $x->item($i)->getElementsByTagName("url");
		if(stristr($dios->item(0)->childNode->item(0)->nodeValue,$q)){

		}
	}
}
?>