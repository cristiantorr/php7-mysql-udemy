<?php
class Gato{
	var $nombre;
	var $colorPelo;
	var $corbata = "SI";

	function maullar(){
		return "miau, miau";
	}

	function tieneCorbata(){
		return $this->nombre." ".$this->corbata." tiene corbata y su color de pelo es ".$this->colorPelo."<br>";
	}
}
//instancias
$cucho = new Gato();

//Poblar las propiedades
$cucho->nombre = "Cucho";
$cucho->colorPelo = "rosa";
$cucho->corbata = "NO";

print $cucho->nombre." dice ".$cucho->maullar()."<br>";
print $cucho->tieneCorbata();
?>