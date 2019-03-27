<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operadore de fusion null</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>Operadore de fusion null</h1>
        <ul>
           <li>El operador de fusion de null (??) es equivalente al operador ternario junto  con isset().</li>
           <li>Devuelve su primer operando si existe y no es NULL; de lo contrario devuelve su segundo operando</li>
        </ul>
        <h2>Ejemplos:</h2>
        <?php
            $usuario = $_GET["usuario"]??$_POST["usuario"]??"Anonimo";
            print $usuario;
        ?>
    </div>
</body>
</html>