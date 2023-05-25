<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/php_desde_0/style.css">
	<title>Operadores Condicionales</title>
</head>
<body>
<div class="p_h_p">
<h1>Operadores Condicionales</h1>

<pre>
Este tipo de operadores permiten comparar dos valores y retornar un valor verdadero o falso 

<h2>Es igual a <i>(sin importar el tipo)</i></h2>
Sintaxis: < expresion> <i>==</i> < expresion>

Ejemplos:
$numero_1 = 20;
$numero_2 = 5 * 4;
$son_iguales = $numero_1 == $numero_2;

if ($son_iguales) {
	echo "contienen el mismo valor";
} else{
	echo "no contienen el mismo valor";
}

<?php 
$numero_1 = 20;
$numero_2 = 5 * 4;
$son_iguales = $numero_1 == $numero_2;

if ($son_iguales) {
	echo "contienen el mismo valor";
} else{
	echo "no contienen el mismo valor";
}

?>


En el ejemplo anterior, la variable $son_iguales va tener el valor true(1), 
ya que ambas variables tienen el mismo valor




<h2>Ejemplo de comparación de <i>dos tipo de variable</i> pero con el <i>mismo valor contenido</i></h2>
Sintaxis = < expresion> <i>==</i> < expresion>	
$numero_3 = <i>20</i>;
$numero_4 = <i>"20"</i>;
$son_iguales = $numero_3 == $numero_4;

if ($son_iguales) {
	echo "contienen el mismo valor";
}else{
	echo "no contienen el mismo valor";
}

<?php 	
$numero_3 = 20;
$numero_4 = "20";
$son_iguales = $numero_3 == $numero_4;

if ($son_iguales) {
	echo "contienen el mismo valor";
}else{
	echo "no contienen el mismo valor";
}

?>


En este otro ejemplo la variable $son_iguales va a tener de nuevo de valor true(1), 
ya que ambas variables tienen el mismo valor a, aunque no son del mismo tipo 




<h2>Es identico a (<i>mismo valor</i> y <i>mismo tipo</i>)</h2>
Sintaxis: < expresion> <i>===</i> < expresion>	

Ejemplo:
$numero_0 = <i>20</i>;
$numero_9 = <i>"20"</i>;
$_son_iguales = $numero_0 === $numero_9;
if ($_son_iguales) {
	echo "las variables son del mismo tipo y contienen el mismo valor:";
}else{
	echo "las variables son de diferente tipo o diferente valor";
}

<?php 
$numero_0 = 20;
$numero_9 = "20";
$_son_iguales = $numero_0 === $numero_9;

if ($_son_iguales) {
	echo "las variables son del mismo tipo y contienen el mismo valor:";
	
}else{
	echo "las variables son de diferente tipo o diferente valor";
}
?>


si bien ambas variables contienen un numero 20, la comparacion resulta falsa 
ya que los tipos de dato son diferentes



<h2>Es distinto a (<i>sin importar el tipo</i>)</h2>
Sintaxis: < expresion> <i>!=</i> < expresion>

En el ejemplo anterior, la variable $son_distintos va a tener el valor false
ya que ambas variables tienen el mismo valor

ejemplos:
$numero_x = 20;
$numero_z = 4*5;
$son_distintos = $numero_x != $numero_z;
 
if($son_distintos){
	echo "las variables tienen diferente valor";
}else{
	echo "las variables tienen el mismo valor";
}

<?php 
$numero_x = 20;
$numero_z = 4*5;
$son_distintos = $numero_x != $numero_z;
 if($son_distintos){
	echo "las variables tienen diferente valor";
 }else{
	echo "las variables tienen el mismo valor";
	}

 ?>


$numero_v = <i>200</i>;
$numero_s = <i>"200"</i>;
$son_distintos_z = $numero_v != $numero_s,
if ($son_distintos_z) {
	echo "las variables tienen diferente valor";
}else{
	echo "los variables tienen el mismo valor";

}

<?php 
$numero_v = 200;
$numero_s = "200";
$son_distintos_z = $numero_v != $numero_s;
if ($son_distintos_z) {
	echo "las variables tienen diferente valor";
}else{
	echo "los variables tienen el mismo valor";

}

?>

en este otro ejemplo de nuevo la variable $son_distintos_z va a tener valor false 
ya que ambas variable tienen el mismo valor no importa si los tipos son iguales
o no 


<h2>No identico a (<i>distinto valor</i> o <i>distinto tipo</i>)</h2>
Sintaxis: < expresion> <i>!==</i> < expresion>
en este ejemplo la variable $son_x_distintos va a tener el valor true ya que aunque ambas
variables tienen el mismo valor son de tipos distintos 

ejemplo:
$numero_x = 400;
$numero_b = "400";
$son_x_distintos = $numero_x <i>!==</i> $numero_b;

if ($son_x_distintos) {
	echo "las variables tienen distinto valor o son de distinto tipo";
}else{
	echo "las variables son de el mismo tipo o mismo valor";
}

<?php 
$numero_x = 20;
$numero_b = "20";
$son_x_distintos = $numero_x !== $numero_b;
if ($son_x_distintos) {
	echo "las variables tienen distinto valor o son de distinto tipo";
	
}else{
	echo "las variables son de el mismo tipo o mismo valor";
}

 ?>
</pre>


        <!-- Regresar un directorio anterior ../ -->
        <a href="../../"><button>ir al índice</button></a>

</div>
</body>
</html>

