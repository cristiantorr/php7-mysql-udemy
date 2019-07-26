<?php
class Gato{
	public static $claveSecreta = "12345";
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

	public static function mensajeSecreto(){
		return "Haz el bien, sin mirar a quien";
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
//Paamayim Nekudotayim
print "La clave secreta es: ".Gato::$claveSecreta."<br>";
print "La frase secreta es: ".Gato::mensajeSecreto()."<br>";

?>