<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/php_desde_0/style.css">
	<title>Constantes</title>
</head>
<body>

<div class="p_h_p">


<h1>Constantes</h1>
<pre>
una <i>constante</i> es una especie de <i>variable</i> que posee un <i>valor fijo</i>
Las constantes en PHP suelen ser declaradas al principio de cada pagina y sirven para darle claridad al codigo
Son especialmente utiles cuando necesitamos repetir el uso de un vierto valor una y otra vez

Para declarar (asignar el valor) de una <i>constante</i>, debemos usar la funcion <i>define</i>

la cual tiene dos parametros, el  primero de ellos sirve para poner el nombre que deseamos darle a 
la <i>constante</i> y el segundo para asignarle un valor

Los nombres de las constantes siguen las mismas reglas que los nombres de las variables, 
<i>excepto que ellas no deben comenzar con el signo de dolar</i> 

Es una practica recomendable el usar siempre los nombres de <i>constantes en mayusculas</i> 
para poder identificarlos como tales a primera vista

Las <i>constantes</i> se usan del mismo modo que las variables, pero teniendo en cuenta que nunca podemos 
asignar nuevos valores sobre ellas

ejemplo de una <i>constante</i> 

<i>define("PI",3.14159265);</i>
$radio = 10;
$area = PI *$radio * $radio;
echo "El area total es: ".$area;


<?php

define("PI", 3.14159265);
//La constante PI tendra un valor de 3.141159265

$radio = 10;
$area = PI *$radio * $radio;

echo "El area total es: ".$area;

?>



</pre>


		<!-- Regresar un directorio anterior ../ -->
        <a href="../../"><button>ir al índice</button> </a>

</div>
</body>
</html>

