<?php
$key = "Enelaguaclaraquebrotaenlafuenteunlindopescadosalederepente";

function encriptar($data, $key)
{
  $llaveEncriptada = base64_decode($key);
  $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length("aes-256-cbc"));
  $cadena = openssl_encrypt($data, "aes-256-cbc", $llaveEncriptada,0,$iv);
  return base64_encode($cadena."::".$iv);
}

function desencriptar($data, $key)
{
  $llaveEncriptada = base64_decode($key);
  $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length("aes-256-cbc"));
  list($cadena,$iv) = array_pad(explode("::",base64_decode($data),2),2,null);
  return openssl_decrypt($cadena, "aes-256-cbc", $llaveEncriptada,0,$iv);
}

function validaCampo($cadena,$conn)
{
  return mysqli_real_escape_string($conn,trim(strip_tags(addslashes($cadena))));
}
$conn = mysqli_connect("localhost", "root", "", "quiz") or die("Error al conectar la base de datos");
$usuario = validaCampo("pedropicapiedra",$conn);
$password = hash_hmac("sha512", "12345", "cualquiercosaesbuenacomollave");
$pregunta = encriptar("Mi primer mascota",$key);
//


$sql = "INSERT INTO usuarios VALUES(0,'".$usuario."', '".$password."', '".$pregunta."')";

if(mysqli_query($conn,$sql)){
  print "Se insertó correctamente";
} else {
  print "Error al insertar el registro";
}
?>