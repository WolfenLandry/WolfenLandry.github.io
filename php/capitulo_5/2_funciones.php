<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/php_desde_0/style.css">
	<title>Funciones</title>
</head>
<body>
<div class="p_h_p">


<h1>Funciones de usuario</h1>
<pre>
Una <i>función</i> no es mas que un fragmento de un programa al que, por razones de reusabilidad o de estructura, 
le asignamos un nombre 

Las funciones de un lenguaje nos permiten simplificar grandemente los problemas complejos , y gracias a ello, 
podemos escribir soluciones a problemas complicados.

<h2>¿para que  usar funciones?</h2>
Uno de los objetivos fundamentales de una función es la reutilización, es decir, la posiblidad de no tener que 
escribir una secuencia de intrucciones similares una instrucciones una y otra vez.

Una segunda razon  es la llamada "<i>estructuración</i>". Es decir que mediante la implementacion de funciones, 
podemos dividir la resolucion de un problema complejo en partes mas simples, de modeo que podemos  programar, 
probar y eventualmente integrar esar partes y lograr nuestros objetivos

Cuando un programa esta desarrollado en modo <i>estructurado</i>, es decir, debidamente clasificado y dividido en 
segmentos basicos, el resultado es mucho mas facil de mantener, ya que dependiendo del tipo de errores que 
pudieramos tener, nos sera simepre mas facil encontrar el segmento causante de la falla y repararlo

<i></i>
<h2>sintaxis de una función </h2>
Toda función de usutio comienza con la palabra <i>function</i> y el nombre de la función.
encerrado entre parentesis, aparece la lista e parametros separados por coma.
luego viene la secuencia de comandos que conforme la <i>función</i> en si encerrados entre llaves.

Una <i>función</i> puede o no retornar un valor al ser ejecutada. de ser asi, debemos asegurarnos de colocar 
al menos un comando <i>return</i> antes del final de la función 
este comando indica el valor a ser retornado.


Supongamos que necesitamos saber si un numero se encuentra incluido o no en un rango dado. para ello podriamos 
desarrollar la funcion <i>en_rango</i>, la cual recibira tres parametros:
1 el numero a evaluar 
2 el limite minimo del rango 
3 el limite maximo del rango 

La <i>función</i> debera comparar el numero pasado como primer parametro contra los otros dos  y determinar
 si esta o no incluido en el rango. Hecho esto debemos incluir un comando <i>return</i> para devolver el 
 valor <i>logico</i> correspondiente.

					aqui van los 3 parametros 
function en_rango ( $val1, $min, $max){
	$res = true;
	if($val1 < $min){
		echo "Si el valor en la variable val1 es menor que el minimo";
		$res = false;
	}
	if($val1 > $max){
		echo "Si el valor en la variable val1 es mayor que el maximo";
		$res = false;
	}
	return $res;
}

<?php 

function en_rango_ ( $val1, $min, $max){
	$res = true;
	if($val1 < $min){
		echo "Si el valor en la variable val1 es menor que el minimo";
		$res = false;
	}
	if($val1 > $max){
		echo "Si el valor en la variable val1 es mayor que el maximo";
		$res = false;
	}
	return $res;
}

?>


<h2>Uso de una función</h2>
Para <i>llamar</i> a una <i>función</i> debemos simplemente escribir su nombre y poner entre 
parentesis los valores con los que deseamos que trabaje. 
si la función esta hecha para retornar un resultado y queremos hacer uso del mismo, seria conveniente 
almacenar el mismo en una variable o usarlo directamente como condicion de algun comando.


// si esta entre el rango que es mayor que el minimo y menor que el maxomo entonces es true 
			( Parametros)	
function <i>en_rango</i>($val1, $min, $max){
	$res = true;
	if($val1 < $min){
		$res = false;
	}
	if($val1 > $max){
		$res =  false;
	} 
	return $res;
}

<i>$calificacion</i> = <i>8</i>;
   <i>funcion</i>   (paramtros)
if(<i>en_rango</i> ($calificacion, 0, 4))
	echo "Deficiente";

if(<i>en_rango</i> ($calificacion, 5, 7))
	echo "Suficiente";

if(<i>en_rango</i> ($calificacion, 6, 9))
	echo "Sobresaliente";

	else
	 echo "Excelente";


<i></i>


<?php


function en_rango($val1, $min, $max){
	$res = true;
	if($val1 < $min){
		$res = false;
	}
	if($val1 > $max){
		$res =  false;
	}
	return $res;
}

$calificacion = 8;
if(en_rango($calificacion, 0, 4))
	echo "La calificación es: <i>Deficiente</i> ";

if(en_rango($calificacion, 5, 7))
	echo "La calificación es: <i>Suficiente</i>";

if(en_rango($calificacion, 6, 9))
	echo "La calificación es: <i>Sobresaliente</i>";

	else
	 echo "Excelente";
?>


<h2>Del ejemplo anterior podemos resaltar algunos aspectos:</h2>
Aunque la definicion de la <i>función</i> esta al principio del codigo, la mismma es ignorada por el 
procesador hasta que se produce una <i>llamada</i>,

Es decir que la primera instrucción ejecutable de nuestro ejemplo es la asignación de la 
varaible <i>$calificacion</i>

Las <i>llamadas</i> a la función <i>en_rango</i> son usadas como condición del comando <i>if</i>
es decir que depeendiendo  del valor retornado por la funcion en cada caso, se ejecutaran o 
no los comandos correspondientes

Los <i>parametros</i> usados en cada llamada pueden ser bien <i>variables</i>,<i>variables explicitos</i>
o inlcuso <i>expresions</i> mas complejas


<h2>Alcance de las varaibles y parametros  de una <i>función</i></h2>
Los <i>parametros</i> usados dentro de la definicion de una <i>función</i> tambien llamados <i>parametros formales</i>,
<i>no existen </i> fuera de la <i>función</i>, es decir: <i>son locales</i> a la misma.

<h2>La variables en funciones en PHP son locales</h2>
Asi mismo, cualquier <i>variable</i> que usemos dentro de una <i>función</i> sera tambien una varaible <i>local</i>. 
Eso quiere decir que si fuera de la <i>función</i> tenemos otra variable con el mismmo nombre,
<i>PHP</i> considerará a ambas como <i>variables</i> distintas.





<h2>Variables globales</h2>

Si deseamos hacer uso dentro de una <i>función</i> de una variable que existe en el programa principal, debemos 
declararla como <i>global</i> dentro de la <i>función</i>
De esta manera interpretador de PHP podra saber que nos referimos a la variable externa.
<i>funcion</i>			( <i>parametros</i> )

function <i>saludo</i> ( $nombreDeUsuario, $titulo){
<i>global</i> $idioma;
if($idioma == "Español"){
	echo "Buenos días $titulo. $nombreDeUsuario";
	 }else {
	echo "Good Morning $titulo. $nombreDeUsuario";
	}
}
$idioma =  "Español";
saludo ("Johny Taylor","Mr");



<?php
function saludo ( $nombreDeUsuario, $titulo){
global $idioma;
if($idioma == "Español"){
	echo "Buenos días $titulo. $nombreDeUsuario";
	 }else {
	echo "Good Morning $titulo. $nombreDeUsuario";
	}
}
$idioma =  "Español";
saludo ("Johny Taylor","Mr");


?>



</pre>





 				<!-- Regresar un directorio anterior ../ -->
        		<a href="../../"><button>ir al índice</button></a>
	
</div>
</body>
</html>


<h1