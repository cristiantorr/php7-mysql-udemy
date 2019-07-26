<?php
$clave = "1234567890";
$clave2 = "1234567890";
$llave = "mimamamemimamucho";
$cadena = hash_hmac("sha512", $clave, $llave);
print $cadena."<br>";
print strlen($cadena)."<br>";
if ($cadena==hash_hmac("sha512", $clave2, $llave)) {
  print "Acceso permitido<br>";
} else {
  print "Acceso NO permitido<br>";
}

?>