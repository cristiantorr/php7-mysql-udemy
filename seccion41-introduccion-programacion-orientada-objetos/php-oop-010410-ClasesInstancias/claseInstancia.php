<?php
class Gato{
	function maullar(){
		return "miau, miau";
	}
}

//Creamos las instancias
$cucho = new Gato();
$benito = new Gato();
$espanto = new Gato();

//detectar la clase de una instancia / objeto
print "Espanto pertenece a la clase ".get_class($espanto)."<br>";

//Verificar que un objeto pertenezca a una clase
print "Matute ";
if (is_a($matute,"Gato")) {
	print "Si es un gato"."<br>";
} else {
	print "No es un gato"."<br>";
}

//Llamar a un metodo
print "Cucho dice ".$cucho->maullar()."<br>";
print "Benito dice ".$benito->maullar()."<br>";
print "Espanto dice ".$espanto->maullar()."<br>";
?>