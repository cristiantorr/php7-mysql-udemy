<?php
class Gato{
	var $nombre;
	var $colorPelo;
	var $corbata = "SI";

	function __construct($nombre="", $pelo="negro"){
		$this->nombre = $nombre;
		$this->colorPelo = $pelo;
	}

	function maullar(){
		return "miau, miau";
	}

	function tieneCorbata(){
		return $this->nombre." ".$this->corbata." tiene corbata y su color de pelo es ".$this->colorPelo."<br>";
	}

	function saludo(){
		$cadena = "Hola, me llamo ".$this->nombre." y mi color de pelo es ";
		$cadena .= $this->colorPelo;
		return $cadena;
	}
}
//instancias
$cucho = new Gato("Cucho","rosa");

print $cucho->nombre." dice ".$cucho->maullar()."<br>";
print $cucho->tieneCorbata();
print $cucho->saludo();
?>