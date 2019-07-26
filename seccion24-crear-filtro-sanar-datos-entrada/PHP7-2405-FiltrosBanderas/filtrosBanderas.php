<?php  
$edad = 999;
$min = 1;
$max = 120;

if (filter_var($edad,FILTER_VALIDATE_INT,array("options"=>array("min_range"=>$min,"max_range"=>$max)))) {
	print "La edad de ".$edad." es correcta";
} else {
	print "La edad de ".$edad." NO es correcta";
}
print "<hr>";
$ip = "2002:GHYTG:&&%$$$:53535";
if (filter_var($ip,FILTER_VALIDATE_IP,FILTER_FLAG_IPV6)) {
	print "La ip ".$ip." es correcta";
} else {
	print "La ip ".$ip." NO es correcta";
}
print "<hr>";
$url = "http://www.pacoarce.com?id=90";
if (filter_var($url,FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED)) {
	print "La url ".$url." es correcta, si tiene un query";
} else {
	print "La url ".$url." NO es correcta, le falta el query";
}
print "<hr>";
$cadena = "<h1>Hola óíú´ñÑ¡¿äÄ cara de bola";
$limpia = filter_var($cadena,FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
print "La cadena limpia es: ".$limpia;


?>