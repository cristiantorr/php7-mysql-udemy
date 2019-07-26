<?php
class Gato{};
class Perro{};
function regresaGato(): Gato {
  return new Perro;
}
var_dump(regresaGato());
?>