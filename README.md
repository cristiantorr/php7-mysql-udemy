# php7-mysql-udemy

Todo un curso de php7 con mysql desde la plataforma Udemy.

# Algunas Caracteristicas php 7

## Mejora el desempeño

* Gracias a que el proyecto PHPNG (PHP Next-Gen) de Zen 3.0 fue declarado open source e incorporado al motor de PHP 7, el rendimiento de las aplicaciones que sean compatibles con esta nueva versión tendrán una ganancia de rendimiento de entre 25% y 70%, contando con mediciones que indican que un sitio en WordPress podría ejecutarse incluso un 96% más rápido; si antes la ejecución de un sitio en WordPress requería aproximadamente 9.4 billones de instrucciones, con el nuevo motor PHPNG solo requeriría 2.6 billones, la mejor parte es que es muy probable que no tengas que cambiar ni una línea de código para gozar de las ventajas de esta nueva versión.
* PHP7 está diseñado y refactorizado teniendo en cuenta las cargas de trabajo actuales.

## Declaraciones de tipo escalar

* En PHP 7 se agregaron nuevos tipos de variables que podemos definir que esperan nuestras funciones, estos son los tipos int, float, bool y string. Estas pueden ser de tipo coercitivo o estricto. En la primera forma por ejemplo, si una variable de tipo string recibe un número entero, lo intentará tomar como string, sin embargo si hemos declarado el tipo estricto devolverá un error.

## Declaraciones de tipo de retorno

* Además de poder declarar que tipos de datos esperamos recibir en nuestras funciones con la nueva versión, también podemos definir qué tipo de datos debe retornar nuestra función, permitiéndonos aún más control de lo que pasa dentro de nuestro sistema.

## El operador nave espacial <=>

* El operador nave espacial se utilizará para comparar dos expresiones y será la combinación de los operadores menor <, mayor > o igual =. La expresión <=> retornara 0 si los dos valores son iguales, 1 si el valor de la izquierda es mayor y -1 si el valor de la derecha es el mayor.

## Operador de fusión de null

* El operador de fusión de null se ha añadido como una ayuda para cuando hemos necesitado verificar si el contenido de una variable existe antes de utilizarlo, de este modo líneas de código como: $nombre_usuario = isset($_GET[‘usuario’]) ? $_GET[‘usuario’] : ‘nadie’; en la que verificábamos primero con la función isset() si existía el usuario para utilizarlo y en caso contrario devolvemos ‘nadie’, pasa a convertirse en esto $nombre_usuario = $_GET[‘usuario’] ?? ‘nadie’; donde obviamos el uso del isset() y ahorramos una validación.

## Soporte a 64 bit

* Soporte consistente a computadoras con arquitectura de 64 bits.

## Extensiones eliminadas

* ereg
* mssql
* mysql
* sybase_ct 

## SAPI eliminadas

* aolserver
* apache
* apache_hooks
* apache2filter
* caudium
* continuity
* isapi
* milter
* nsapi
* phttpd
* pi3web
* roxen
* thttpd
* webjames



## Algunos "errores fatales" se convirtieron en "excepciones"
## Nuevo generador de números aleatorios
## Creador de clases anonimas




