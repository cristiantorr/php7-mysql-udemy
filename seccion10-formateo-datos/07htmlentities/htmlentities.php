<?php
$cadena = "Agua \"pasa\" por <b>mi casa</b>, cate <i>por mi </i>corazón";

//Convierte todos los caracteres aplicables a entidades HTML
$a = htmlentities($cadena);
//Convierte todas las entidades HTML a sus caracteres correspondientes
$b = html_entity_decode($a);

echo $a; 
echo "<br>";
echo $b; 
?>