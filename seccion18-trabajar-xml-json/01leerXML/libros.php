<?php
//Archivo a leer
$path = "libros.xml";
//Verifica que exista el archivo
if (!file_exists($path)) exit("Archivo no encontrado");
//Abre el archivo
$xml = XMLReader::open($path);
//Crea las primeras etiquetas de la tabla
echo "<html><body><table border=1>";
echo "<tr><th>Titulo</th><th>Autor</th><th>Editorial</th><th>Precio</th><th>Fecha</th></tr>";
//Inicia ciclo para leer el archivo
while ($xml->read()){
	if ($xml->nodeType == XMLReader::ELEMENT && $xml->name == 'libro') {
	    $nombre = $xml->getAttribute('nombre');
	    $autor = $xml->getAttribute('autor');
	    $editroial = $xml->getAttribute('editorial');
	    $precio = $xml->getAttribute('precio');
	    $fecha = $xml->getAttribute('fecha');
	    echo "<tr><td>".$nombre."</td><td>".$autor."</td><td>".
	         $editroial."</td><td>".$precio."</td><td>".$fecha."</td></tr>";
	}
}
//Etiquetas de cierre
echo "</table></body></html>";
//Cerramos la conexión
$xml->close();
?>