<?php  
$titulo = filter_input(INPUT_GET, "buscar", FILTER_SANITIZE_SPECIAL_CHARS);
$buscar = filter_input(INPUT_GET, "buscar", FILTER_SANITIZE_ENCODED);
print "Tu búsqueda: ".$titulo."<br>";
print "<a href='http://www.google.com?q=".$buscar."'>Buscar</a>";




?>