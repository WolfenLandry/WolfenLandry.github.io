<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/php_desde_0/style.css">
	<title>Operadores de comparacion</title>
</head>
<body>
<div class="p_h_p">

<h1>Operadores de Comparación</h1>
<h2><i>Menor que</i></h2>

<pre>Sintaxis: < expresion> <i><</i> < expresion>
ejemplo
En este ejemplo la variable $es_menor va a tener el valor true,
ya que el valor de la primera variable <i>es menor</i> que el de la <i>segunda</i> 

$numero_1 = 100;
$numero_2 = 400;
$es_menor = $numero_1 < $numero_2;
echo "el valor de la variable numero_1 es: " . $numero_1;
echo "el valor de la variable numero_2 es: " . $numero_2;

 if ($es_menor) {
 	//true
 	echo "la variable numero_1 es menor que la variable numero_2";
 }else{
 	//false
 	echo "la variable numero_1 es no es menor que la variable numero_2";
 }

<?php 
$numero_1 = 100;
$numero_2 = 400;
$es_menor = $numero_1 < $numero_2;
echo "el valor de la variable numero_1 es: " . $numero_1;
echo "<br>el valor de la variable numero_2 es: " . $numero_2;

 if ($es_menor) {
 	//true
 	echo "<br>la variable numero_1 <i>es menor que</i> la variable numero_2";
 }else{
 	//false
 	echo "<br>la variable numero_1 es <i>no es menor que</i> la variable numero_2";
 }
 ?>
</pre>

<pre>

<h2><i>Mayor que</i></h2>

Sintaxis: < expresion> <i>></i> < expresion>
Ejemplo:
la variable  va a tener el valor <i>false</i>, ya que el valor de la primera
variable <i>no es mayor</i> que el de la <i>segunda</i> 

$numero_0 = 350;
$numero_3 = 999;
$es_mayor = $numero_0 > $numero_3;
if($es_mayor){
	//true
	echo "la variable numero_0 es mayor que la variable numero_3";
}else{
	//false
	echo "la variable numero_0 no es mayor que la variable numero_3";
}

<?php 
$numero_0 = 350;
$numero_3 = 999;
$es_mayor = $numero_0 > $numero_3;
echo "<br>el valor de la variable numero_0 es: ". $numero_0;
echo "<br>el valor de la variable numero_3 es: ". $numero_3;
if($es_mayor){
	//true
	echo "<br>la variable numero_0 <i>es mayor que </i> la variable numero_3";
}else{
	//false
	echo "<br>la variable numero_0 <i>es no mayor</i> que la variable numero_3";
}

?>

</pre>
<pre>

<h2><i>Menor o igual que</i></h2>
Sintaxis: < expresion> <i><= </i>< expresion>
en este ejemplo la variable $es_menor_o_igual va a tener el valor <i>true</i> 
ya que el valor de la <i>primera</i> variable <i>es menor que</i> el de la segunda	

$numero_0 = 30;
$numero_3 = 45;
$es_menor_o_igual = $numero_0 <= $numero_3;
if ($es_menor_o_igual) {
	//true
	echo "la variable numero_0 es menor o igual a la variable numero_3";
}else{
	//false
	echo "la variable numero_0 es no menor o igual a la variable numero_3";
}

<?php 
$numero_0 = 30;
$numero_3 = 45;
$es_menor_o_igual = $numero_0 <= $numero_3;
echo "<br>el valor de la variable numero_0 es: " . $numero_0;
echo "<br>el valor de la variable numero_3 es: " . $numero_3;
if ($es_menor_o_igual) {
	//true
	echo "<br>la variable numero_0 <i>es menor o igual</i> a la variable numero_3";
}else{
	//false
	echo "<br>la variable numero_0 <i>no es menor o igual</i> a la variable numero_3";

}

 ?></pre>
<pre> 

<h2><i>Menor o igual que </i>(con variables con el <i>mismo valor</i>, <i>diferente tipo</i>)</h2> 
en este ejemplo la variable <i>$es_menor_o_igual</i> va tener el valor <i>true</i> ya que
el valor de la <i>primera</i> variable  <i>es igual</i> al de la <i>segunda</i>, aunque son de diferente <i>tipo</i> 

$numero_1 = <i>20</i>;
$numero_2 = <i>"20"</i>;
$es_menor_o_igual = $numero_1 <= $numero_3;
if ($es_menor_o_igual) {
	//true
	 echo "el valor de la variable numero_1 es menor o igual a la variable numero_3";
}else{
	//false
	 echo "el valor de la variable numero_1 no es menor o igual a la variable numero_3";
}

<?php 
$numero_1 = 20;
$numero_2 = "20";
$es_menor_o_igual = $numero_1 <= $numero_3;
	echo " <br>el valor de la variable numero_1 es: ". $numero_1;
	echo " <br>el valor de la variable numero_2 es: ". $numero_2;
if ($es_menor_o_igual) {
	//true
	 echo "<br>el valor de la variable numero_1 <i>es menor o igual</i> a la variable numero_3";
}else{
	//false
	 echo "<br>el valor de la variable numero_1 <i>no es menor o igual</i> a la variable numero_3";
}
	
 ?>
</pre>

<pre>

<h2><i>Mayor o igual que</i> </h2>
Sintaxis: < expresion> <i>>=</i> < expresion>	

Ejemplos 
la variable  va a tener el valor <i>false</i> ya que el valor de la <i>primera</i> 
variable  <i>no es mayor</i> que el de la <i>segunda</i> 
$numero_3 = 200;
$numero_x = 450;
$es_mayor_o_igual = $numero_3 >= $numero_x;
if ($es_mayor_o_igual) {
	//true
	echo "el valor de la variable numero_3 es mayor o igual a la variable numero_x";	
	}else{
	//false
	echo "el valor de la variable numero_3 no es mayor o igual a la variable numero_x";
 }

<?php 
$numero_3 = 200;
$numero_x = 450;
$es_mayor_o_igual = $numero_3 >= $numero_x;
	echo "el valor de la variable numero_3 es: " .$numero_3;
	echo "<br>el valor de la variable numero_x es: " .$numero_x;
if ($es_mayor_o_igual) {
	//true
	echo "<br>el valor de la variable numero_3 <i>es mayor o igual</i> a la variable numero_x";	
}else{
	//false
	echo "<br>el valor de la variable numero_3 <i>no es mayor o igual</i> a la variable numero_x";
 
}
?>
</pre>
<pre>


<h2>Comparación de variables de <i>diferente tipo</i> pero con el <i>mimso valor</i> </h2>
en este ejemplo la variable va a tener el valor de true ya que el valor de la primera
variable es igual al de la segunda (sin importar que sean de diferente tipo de variable porque
una es un string y el otro un integer)

$numero_1 = <i>20</i>;
$numero_s = <i>"20"</i>:
$es_mayor_o_igual = $numero_1 >= $numero_s;
 if ($es_mayor_o_igual) {
 	//true
 	 echo "el valor de la variable numero_1 es mayor o igual al valor de la variable numero_s";
 } else{
 	//false
 	echo "el valor de la variable numero_1 no es mayor o igual al valor de la variable numero_s";
 }

<?php 

$numero_1 = 20;
$numero_s = "20";
$es_mayor_o_igual = $numero_1 >= $numero_s;
 echo "<br>el valor de la variable numero_1 es: " . $numero_1;
 echo "<br>el valor de la variable numero_s es: " . $numero_s;

 if ($es_mayor_o_igual) {
 	//true
 	 echo "<br>el valor de la variable numero_1 <i>es mayor o igual</i> al valor de la variable numero_s";
 } else{
 	//false
 	echo "<br>el valor de la variable numero_1 <i>no es mayor o igual</i> al valor de la variable numero_s";
 }

 ?>
</pre>
<pre>

<h2><i>Es distinto a</i></h2>
Sintaxis: < expresion> <i><></i> < expresion>
Nota: este operador es equivalente al operador !=

$numero_4 = 35;
$numero_0 = 55;
$es_distinto = $numero_4 < > $numero_0;
if ($es_distinto) {
	//true
	 echo "el valor de la variable numero_0  es distinto al de la variable numero_4";
}else{
	//false
	echo "el valor de la variable numero_4 no es distinto al de la  variable numero_0";
}

<?php 
$numero_4 = 35;
$numero_0 = 55;
$es_distinto = $numero_4 <> $numero_0;
	echo "<br>el valor de la variable numero_4 es: ".$numero_4 ;
	echo "<br>el valor de la vaibable numero_0 es: ".$numero_0;
if ($es_distinto) {
	//true
	 echo "<br>el valor de la variable numero_0  <i>es distinto</i> al de la variable numero_4";
}else{
	//false
	echo "<br>el valor de la variable numero_0  <i>no es distinto</i> al de la variable numero_4";
}

 ?>

</pre>




        <!-- Regresar un directorio anterior ../ -->
        <a href="../../"><button>ir al índice</button></a>




</div>
</body>
</html>