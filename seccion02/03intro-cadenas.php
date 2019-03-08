<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadenas</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>Cadenas</h1>
        <ul>
            <li>Cadenas de caracteres o string, datos alfanumericos para representar letras y el lenguaje escrito de los humanos.</li>
            <li>PHP solo admite un conjunto de 256 caracteres m y de ahí que no ofrezca soporte nativo para UNICODE.</li>
            <li>En PHP7 ya  soporta Unicode como secuencias de escape.</li>
        </ul>
        <h2>Un literal de tipo string  se puede  especificar de cuatro formas diferentes:</h2>
        <ul>
            <li>Entrecomillado simple</li>
            <li>Entrecomillado doble</li>
            <li><strong>Sintaxis heredoc:</strong>
                <ol>
                    <li>Una tercera forma de delimitar un string es mediante la sintaxis heredoc: <<<.Después de este operador, se deberá proporcionar un identificador y justo después una nueva línea. A continuación va el propio strinf, y para cerrar la notación se pone el mismo identificador.</li>
                    <li>El identificador de cierre debe empezar en la primera columna de la nueva línea. Asimismo, el identificador debe seguir las mismas reglas de nomenclatura de las etiquetas en PHP: debe contener solo caracteres alfanuméricos y guiones bajos , y debe empezar con un carácter alfabético o un guión bajo, no se puede poner tabulador o espacios por que sale error</li>
                    <li>Ejemplo:
                    $str = &#60;&#60;&#60;EOD <br />
                    Ejemplo de una cadena <br />
                    expandida en varias líneas<br />
                    empleando la sintaxis heredoc<br />
                    EOD;
                    
                    </li>
                </ol>
            </li>
            <li>Sintaxis  nowdoc (desde PHP 5.3.0):
                <ol>
                <li>Nowdoc(PHP 5.3) es  alos string con comillas simples lo mismo que heredoc lo es a los strinf con comillas dobles.</li>
                <li>Un <strong>nowdoc</strong> se especifica de forma análoga a un heredoc, pero no se realiza ningún análisi dentro del nowdoc.</li>
                <li>la construcción es ideal para embeber código de PHP o grandes fragmentos de texto sin necesidad de escaparlos.</li>
                <li>Comparte algunas características comunes con la construcción <![CDATA[]]>(CDATA es muy utilizado en xml para meter codigo libre) de SGML, donde se declara un bloque de texto que no se analiza.</li>
                <li>un nowdoc se identifica con la misma secuencia empleada para heredoc, &#60;&#60;&#60;, pero el identificador que le sigue está delimitado con comillas simples, p.ej., &#60;&#60;&#60;'EOT'.</li>
                <li>Todas las reglas para los identificadors de heredoc tambiñen son aplicables a los identificadores de nowdoc, especialmente aquellas que se refieren al empleo del identificador de cierre.</li>
                </ol>
            </li>
        </ul>
    </div>
</body>
</html>

<?php 



?>