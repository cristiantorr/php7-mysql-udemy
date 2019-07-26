<?php
class Gato{
	protected $nombre;
	private $colorPelo;
	private $corbata = "SI";

	function __construct($nombre="", $pelo="negro"){
		$this->nombre = $nombre;
		$this->colorPelo = $pelo;
	}

	function __destruct(){
		print $this->nombre." dice: 'Adios, mundo cruel"."<br>";
	}

	function __set($name, $valor){
		print "La propiedad ".$name." se actualizo a ".$valor."<br>";
		if($name=="corbata"){
			if($valor!="SI") $valor = "NO";
		}
		$this->$name = $valor;
	}

	function __get($name){
		return $this->$name;
	}

	function setCorbata($c="SI"){
		if($c!="SI"){
			$corbata = "NO";
		}
		$this->corbata = $c;
	}

	function getCorbata(){
		return $this->corbata;
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

//$cucho->setCorbata("NO");

$cucho->corbata = "NO";

print $cucho->tieneCorbata();
print $benito->tieneCorbata();

?>