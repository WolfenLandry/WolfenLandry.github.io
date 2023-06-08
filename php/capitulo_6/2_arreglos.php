<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/php_desde_0/style.css">
	<title>Arreglos</title>
</head>
<body>
<div class="p_h_p">

<h1>Arreglos en PHP</h1>
<pre>

Un <i>arreglo</i> no es es mas que una <i>colección</i> de variables guardadas bajo un mismo nombre y diferenciadas 
entre si por un indice

Podemos pensar que una <i>variable</i> es como una hoja de papel en la que podemos escribir  un texto, 
y un arreglo es un cuaderno donde podemos tener, digamos sesenta hojas de papel cada una de ellas
con su propio texto.

Cada casilla o posicion dentro del arreglo es en si una varaible, y eso quiere decir que puede tener 
los mismos tipos de contenido que estas, eso incluye otros arreglos.

<h2>El nombre de un arreglos </h2>
en <i>PHP</i> es exactamente igual que el nombre de una <i>variable</i>, solamente que para trabajar
con una de sus <i>posiciones</i>, debemos indicar el <i>indice</i> usando corchetes.

Supongamos que tenemos las evaluaciones de tres alumnos y queremos calcular el promedio de notas.

$alumno_1 = 5.6;
$alumno_2 = 8.2;
$alumno_3 = 7.8;

$suma = $alumno_1 + $alumno_2 + $alumno_3;
$promedio = ($suma / 3);

echo "El promedio de los tres alumnos es: " . $promedio;

<?php
$alumno_1 = 10;
$alumno_2 = 5;
$alumno_3 = 7.8;

$suma = $alumno_1 + $alumno_2 + $alumno_3;
$promedio = ($suma / 3);

echo "El promedio de los tres alumnos es: <i>" . $promedio."</i>";
?>


El ejemplo anterior es bastante sencillo y facil de leer, sin embargo no es una buena solución cuando el 
número de alumnos es alto, o peor aun, cuando no se conoce de antemano el numero de alumnos 

<h2>Veamos como podemos escribir el mismo algoritmo usando <i>arreglos</i></h2>

<i>$alumno[1]</i> = 10;
<i>$alumno[2]</i> = 5;
<i>$alumno[3]</i> = 7.8;

$suma = 0;

for($i = <i>1</i>; $i <i><= 3</i>; $i++){
	$suma += $alumno[$i];
	$promedio = ($suma / 3);

	}
	echo "El promedio de los tres alumnos es: " .$promedio;

<?php

$alumno[1] = 10;
$alumno[2] = 5;
$alumno[3] = 7.8;

$suma = 0;

for($i = 1; $i <= 3; $i++){
	$suma += $alumno[$i];
	$promedio = ($suma / 3);

	}
	echo "El promedio de los tres alumnos es: <i>" .$promedio ."</i>";
?>

Existen muchas funciones que ayudan a trabajar con arreglos

La <i>función</i> <i>count()</i>, la cual permite conocer la cantidad de elementos contenidos en un arreglo


<h2><i>Funcion count</i></h2>
Descripción 
Si el parámetro es un <i>arreglo</i>, retornará el número de elementos contenidos en él
de lo contrario retornará 1 

Sintaxis:
count (< variable > )

Retorna 
Numero entero que indica el número de elementos contenidos en el arreglo o 1 si el parámetro no es un arreglo.

Ejemplos:

$edades[0] = 25;
$edades[1] = 33;
$edades[2] = 57;

$cantidad = count($edades);
echo "El arreglo contiene $cantidad de elementos";

<?php
$edades[0] = 25;
$edades[1] = 33;
$edades[2] = 57;

$cantidad = count($edades);
echo "El arreglo contiene $cantidad elementos";
?>


$vehiculos[2005] = 820;
$vehiculos[2006] = 923;
$vehiculos[2009] = 1320;
$vehiculos[2011] = 1043;

$cantidad = count($vehiculos);
echo "El arreglo contiene $cantidad de elementos";

<?php
$vehiculos[2005] = 820;
$vehiculos[2006] = 923;
$vehiculos[2009] = 1320;
$vehiculos[2011] = 1043;

$cantidad = count($vehiculos);

echo "El arreglo contiene $cantidad de elementos";
?>


En <i>PHP</i> un <i>arreglo</i> no tiene un numero predefinido de elementos, es decir, 
los <i>índices</i> no tienen que comenzar por cero ni por uno, y las posiciones ocupadas 
<i>no</i> tienen por que ser <i>contiguas</i>. 

<h2>Arreglos con índices de letras</h2>
En <i>PHP</i> los <i>índices</i> no tienen porque ser números.
Podemos usar textos como índice para nuestros arreglos, cosa que le da un tremendo poder 
a estas estructuras.

$alumno["Carlos"] = 5.5; 
$alumno["Pedro"] =  8; 
$alumno["Marcos"] = 7.8;

$suma = $alumno["Carlos"] + $alumno["Pedro"] + $alumno["Marcos"];
$promedio = ($suma / 3);
echo "El promedio de los alumnos es: ".$promedio;

<?php
$alumno["Carlos"] = 5.5; 
$alumno["Pedro"] =  8; 
$alumno["Marcos"] = 7.8;

$suma = $alumno["Carlos"] + $alumno["Pedro"] + $alumno["Marcos"];
$promedio = ($suma / 3);
echo "El promedio de los alumnos es: ".$promedio;
?>


una facilidad que ofrece <i>PHP</i> para trabajar con arreglos es la posiblidad de omitir índices a la 
hora de asignar una nueva posición dentro del arreglo. De esta manera <i>PHP</i> asignará como índice
del nuevo valor almacenado, el siguiente al índice más alto existente
( o cero si es el primer elemento agregado al arreglo).


$alumno[] = 10; // Equivale a $alumno[0] = 10;
$alumno[] = 4; // Equivale a $alumno[1] = 4;
$alumno[] = 8; // Equivale a $alumno[2] = 8;

<?php
$alumno[] = 10; // Equivale a $alumno[0] = 10;
$alumno[] = 4; // Equivale a $alumno[1] = 4;
$alumno[] = 8; // Equivale a $alumno[2] = 8;

?>


<h2>Inicializando Arreglos</h2>
Existe una alternativa mucho más eficiente, y es asignar todos los elementos simultáneamente, 
esto lo podemos hacer usando la <i>función</i> <i>array()</i>. 

<?php
$alumno = array(5.3, 8.1, 7.8);
?>
$alumno = array(5.3, 8.1, 7.8);

La <i>función array</i> tambien permite definir índices personalizados, es decir que podemos forzar el índice 
de cualquiera de las funciones ( o de todas ellas) escribiendo los parámetros de la siguiente manera:

$alumno = array("Carlos" => 5.3, "Pedro" => 8.1, "Marcos" => 7.8);

<?php
$alumno = array("Carlos" => 5.3, "Pedro" => 8.1, "Marcos" => 7.8);
?>

En el ejemplo anterior tenemos igualmente tres parámetros separados por comas, sin embargo, en cada parámetro
estamos indicando el índice y luego el contenido. El resultado es nuevamente un arreglos de tres posiciones,
que contiene los mismos tres valores que en el ejemplo previo, pero en lugar de tener los índices 0,1 y 2,
ahora tiene los índices "Carlos", "Pedro" y "Marcos".


<h2><i>Función Array</i></h2>
Descripción 
Retorna un arreglo que contiene tantos elementos como parámetros tenga la función

Sintaxis:
array( [ <indice> => ] <valor>, [<indice> => ] <valor>, ...)

Retorna:
Arreglo conformado por los elementos indicados como parametros 
Ejemplos
$precio = array (23,33,57);

$personas = array("México", "Colombia", "Chile");
$edades = array("Juan" => 24, "Andra" => 31);


<h2>Recorriendo Arreglos</h2>
Los arreglos en <i>PHP</i> son sumamente flexibles, pueden tener multiples dimensiones, pueden tener distintos tipos
de contenido, los indices pueden ser secuenciales y generados automaticamente o pueden ser textos seleccionados 
a nuestra conveniencia.

No existe una estructuras de control en <i>PHP</i> que sea la mejor opción para recorrer cualquier tipo de arreglos.
Dependiendo del tipo de problema y de la estructura del arreglo en si mismo podrias necesitar una u otra.





</pre>
 			<!-- Regresar un directorio anterior ../ -->
        	<a href="../../"><button>ir al índice</button></a>
	
</div>
</body>
</html>