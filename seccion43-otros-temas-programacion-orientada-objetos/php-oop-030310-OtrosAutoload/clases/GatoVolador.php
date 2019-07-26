<?php
class GatoVolador extends Gato{
  function nombreGatoVolador(){
    return $this->nombre;
  }
  function maullar(){
    print parent::maullar()."<br>";
    return "miau, miau, miau y miau";
  }
}
?>