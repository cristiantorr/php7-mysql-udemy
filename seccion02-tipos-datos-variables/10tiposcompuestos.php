<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Secuencias de escape unicode</title>
</head>
<body>
    <div style="width:850px; margin: 0 auto;">
        <h1>Tipos de compuestos</h1>
        <ul>
            <li><strong>TIPOS DE COMPUESTOS:ARREGLOS</strong>
                <ul><li>Existen un tipo de "cajitas" que pueden contener más de un valor independiente a la ves, y se llaman "arreglos" (arrays).Esto puede visualizarse como una caja de herramientas con compartimentos independientes, pero todos unidos formando una sola "caja".No se pueden separar los compartimentos de la caja principal, y ahí donde va la caja principal, van las "cajitas" que esta contiene.</li>
                <li>Se verán los arreglos en la sección 6</li>
                </ul>
            </li>
            <li><strong>TIPOS DE COMPUESTOS: ITERABLES</strong>
                <ul><li>Iterable es un seudotipo introducido en PHP7.1 Acepta cualquier array u objeto que implemente la interfaz Traversable. Estos dos tipos se recorren con foreach y se pueden emplear con yield from dentro de un generador.</li>
                </ul>
            </li>
            <li><strong>TIPOS DE COMPUESTOS: OBJETOS</strong>
                <ul><li>Los objetos se crean con la palabra reservedad class y podemos almacenar métodos (funciones) y propiedades (datos).</li>
                <li>Se verán los objetos en la programación orientada a objetos.</li></ul>
            </li>
            <li><strong>TIPOS DE COMPUESTOS: CALLABLE</strong>
                <ul><li>Muchas funciones de PHP llaman a otras funciones para procesar sus datos. A estas funciones las llamaremos funciones de llamada de retorno o callbacks.</li>            
                <li>Las llamadas de retorno (Callbacks / Callables) se verán en la sección 7.</li></ul>
            </li>
            <li><strong>TIPOS DE COMPUESTOS: RECURSOS</strong>
                <ul><li>Un valor tipo resource es una variable especial, que contiene una referencia a un recurso externo. Los recursos son creados y usados por funciones especiales. Los recursos externos pueden ser leer una base de datos, leer un archivo de imágenes binarios , entre otro.</li></ul>
            </li>
            <li><strong>TIPOS DE COMPUESTOS: NULL</strong>
                <ul><li>El valor especial NULL representa una variable sin valor. NULL es el único valor posible del tipo null.</li>
                <li>Una variable es considerada null si:
                    <ul>
                        <li>Se le ha asignado la constante NULL.</li>
                        <li>No se le ha asignado un valor todavía.</li>
                        <li>Se ha destruido con unset().</li>
                    </ul>
                </li></ul>
            </li>
        </ul>
    </div>
</body>
</html>
