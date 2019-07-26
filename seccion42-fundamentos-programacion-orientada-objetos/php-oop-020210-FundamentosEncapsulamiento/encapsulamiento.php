<?php
class Gato{
	protected $nombre;
	private $colorPelo;
	private $corbata = "SI";

	public function __construct($nombre="", $pelo="negro"){
		$this->nombre = $nombre;
		$this->colorPelo = $pelo;
	}

	function __destruct(){
		print $this->nombre." dice: 'Adios, mundo cruel"."<br>";
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

class GatoVolador extends Gato{
	function nombreGatoVolador(){
		return $this->nombre;
	}
}

$cucho = new Gato("Cucho", "rosa");
$benito = new GatoVolador("Benito","azul");

print $cucho->saludo()."<br>";
print $benito->saludo()."<br>";

print "El nombre del gato volador es: ".$benito->nombreGatoVolador()."<br>";

?>