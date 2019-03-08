<?php
print "Hola desde 'PHP', con comillas dobles <br />";
print 'Hola desde "PHP", con comillas simples <br />';
$name = "Pedro picapiedra";
print <<<EOD
Mi nombre es: $name <br />
Más información <br />
<br />
EOD;

print <<<'EOD'
Mi nombre es: $nombre <br />
Más información <br />
EOD;
?>