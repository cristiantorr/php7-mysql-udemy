<?php
abstract class Mamifero{
  //Metodo Abstracto
  abstract public function saludo();

  //Método no-abstracto
  public function maullar(){
    return "miau, miau";
  }
}
class Gato extends Mamifero{
  public function saludo(){
    return "Hola Mundo";
  }
}

$demostenes = new Gato();

print "saludo ".$demostenes->saludo()."<br>";
print "Maullar ".$demostenes->maullar()."<br>";
?>