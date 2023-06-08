<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/php_desde_0/style.css">
	<title>Estructuras condicionales</title>
</head>
<body>

<div class="p_h_p">

<h1>Estructuras <i>condicionales: El comando <i>if</i></i></h1>
<pre>
Este comando sirve para que se ejecuten un cierto numero de instrucciones <i>solo si</i> se cumple 
una determinada <i>condicion</i> 
Una <i>condicion</i> no es otra cosa que una <i>expresion</i> que puede tomar el <i>valor</i> de <i>verdadero</i> o <i>falso</i>. 
Tipicamente una <i>condicion</i> es una <i>comparacion</i>. tambien puede usarse como <i>condicion</i>, 
una variable que contenga un valor <i>lógico</i>

<h2>Comando <i>if</i></h2>
Descripción 
ejecuta un comando o bloque <i>si</i> se cumple una <i>condicion</i>
Sintaxis:
	<i>if</i>(< condicion>)
		< comando o bloque>;		

<h2>Condicionando solo una <i>linea</i> </h2>
$a = 25;
$b = 10;
$maximo = $b;
 <i>if</i>($a > $b)
	$maximo = $a; // solo una linea
	

<?php 
$a = 25;
$b = 10;
echo "<br>el valor de a es: ".$a;
echo "<br>el valor de b es: ".$b;
$maximo = $b;
	if($a > $b)
		$maximo = $a;
		
	
 ?>
<h2>Condicionando un <i>bloque</i> </h2>
$a = 25;
$b = 10;
$maximo = $b;
$max_nombre ="b";
if($a > $b){
//todo un bloque
	$maximo = $a;
	echo "el valor maximo es: ". $maximo;
	$max_nombre = "a";
	echo "el max_nombre de la variable es: ". $max_nombre;
}
<?php 
$a = 25;
$b = 10;
echo "<br>el valor de a es: ".$a;
echo "<br>el valor de b es: ".$b;
$maximo = $b;
$max_nombre ="b";
if($a > $b){
	$maximo = $a;
	echo "<br>el valor maximo es: ". $maximo;
	$max_nombre = "a";
	echo "<br>el max_nombre de la variable es: ". $max_nombre;
}
 ?>	


El comando <i>if</i> puede tomar una forma un poco mas compleja para indicar un 
grupo de <i>instrucciones</i> alternativo que debera ejecutarse <i>solo si</i> la condicion 
del <i>if</i> <i>no</i> se <i>cumple</i>. Esto lo hacemos agregando la palabra <i>else</i> luego del bloque 
de comandos condicionados 

<h2><i>if</i> con <i>else</i></h2>
Al igual que el anterior pero define un <i>comando</i> o <i>bloque</i> a ser ejecutado si 
la <i>condicion no se cumple.</i> 

sintaxis:
<i>if</i>(< condicion> )
	comando o bloque;
<i>else</i>
	comando o bloque;
ejemplos:
$a = 100000;
$b = 440056;
//condicionando una sola linea
<i>if</i> ($a > $b){
	$maximo = $a; // linea condicionada
	echo "el valor maximo es: " .$maximo;
} <i>else</i> {
	$maximo = $b;
	echo "el valor maximo es: " .$maximo;
}
<?php 
$a = 100000;
$b = 440056;
if ($a > $b){
	$maximo = $a;
	echo "<br>el valor maximo es: " .$maximo;
} else {
	$maximo = $b;
	echo "<br>el valor maximo es: " .$maximo;
} 
?> 

//condicionando un bloque
$a = 29;
$b = 45;
if ($a > $b) {
	$maximo = $a;
	$max_nombre = "a";
	echo "el valor maximo es: ".$maximo;
	echo "el nombre de la variable con el valor maximo es: ".$max_nombre;

}<i>else</i>{

	$maximo = $b;
	$max_nombre = "b";
	echo "el valor maximo es: ".$maximo;
	echo "el nombre de la variable con el valor maximo es: " .$max_nombre;
}
<?php 
$a = 29;
$b = 45;


if ($a > $b) {
	$maximo = $a;
	$max_nombre = "a";
	echo "<br>el valor maximo es: ".$maximo;
	echo "<br>el nombre de la variable con el valor maximo es: ".$max_nombre;
}else{
	$maximo = $b;
	$max_nombre = "b";
	echo "<br>el valor maximo es: ".$maximo;
	echo "<br>el nombre de la variable con el valor maximo es: " .$max_nombre;
}
?>


$var1 = "El numero es: ";
$var2 = 3;
if ($var2 % 2 != 0 )
	//asignacion con concatenacion 
	$var1 .= "impar";
	<i>else</i>
	$var1 .= "par";

//si el valor almacenado en la variable $var2 es par,
//entonces la variable $var1 contendra el texto "Numero par"
//de lo contrario contendra "Numero impar"

<?php 
$var1 = "El numero es: ";
$var2 = 3;
if ($var2 % 2 != 0 )
	//asignacion con concatenacion 
	//$var1 = "El numero es " . "impar";
	$var1 .= "impar";
	else
	//$var1 = "El numero es " . "par";	
	$var1 .= "par";

echo $var1;
?>

<h2>Anidando comandos <i>if</i></h2>
un comando <i>if</i> afecta directamente al comando escrito directamente detras de el ( o detras de la palabra <i>else</i>)
si en lugar de un comando necesitamos afectar a una cantidad <i>mayor</i> de X<i>mayor</i> entonces definimos un <i>bloque</i>

ahora bien un comando <i>if</i> incluyendo su bloque de ejecucion puede ser visto en su totalidad como una 
sola instrucion del programa, asi que si dentro de un comando <i>if</i>, necesitamos poner unicamente 
otro comando <i>if</i>, no necesitamos poner un nuevo bloque 

Comando <i>if</i> con <i>una</i> sola <i>instruccion</i> <i>condicionada</i>: 
<i>si</i> <i>se cumple</i> la condicion < condicion>, entonces se ejecutan los comandos 1,2 y 3 
<i>si</i> la condicion <i>no se cumnple</i> entonces solo los comandos 1 y 3 seran ejecutados

< comando 1>;
if(< condicion>)
	< comando 2>;
< comando 3>;

Comando <i>if</i> con un bloque condicionado: 
<i>si</i> se <i>cumple</i> la <i>condicion</i> < condicion>, entonces se ejecutan los comandos 1,2,3,4 y 5. 
<i>Si</i> la <i>condicion</i> <i>no se cumple</i> entonces solo los comandos 1 y 5 seran ejecutados.

< comando 1>;
if(condicion){
 	< comando 2>;
 	< comando 3>;
 	< comando 4>;
}	
< comando 5>;

<i>if</i> y <i>else</i> de una instruccion: 
si se cumple la condicion, entonces se ejecutan los comandos 1,2 y 4
si la condicion < condicion> no se cumple, entonces se ejecutan 1,3 y 4

< comando 1>;
	if(condicion)
		< comando 2>;
	else
		< comando 3>;
	< comando 4>;

<i>if</i> y <i>else</i> en bloques: 
si se cumple < condicion> se ejecutan 1,2,3,4 y 9 de lo contrario 
se ejecutan 1,6,7,8 y 9

< comando 1>;
	if (condicion){
		< comando 2>;
		< comando 3>;
		< comando 4>;
	}else {
		< comando 6>;
		< comando 7>;
		< comando 8>;
	}
	< comando 9>;

en los ejemplos anteriores podriamos imaginarnos que cualquiera de esos comandos es a su vez otro comando <i>if</i>
asi que veamos como queda el primero de los ejemplos mencionados, cuando la instrucción interna es un bloque <i>if</i>

if(condicion 1)
if(condicion 2){
	< comando 2>;
	< comando 3>;
	< comando 4>;
}
< comando 5>;

En el ejemplo anterior tenemos un comando <i>if</i> con la condicion 1, 
que de cumplirse, habra de ejecutarse una unica instruccin dentro de el: 
otro comando <i>if</i> 

Debes de tener en cuenta que la idea de usar llaves para definir un bloque tiene un 
sentido cuando existenbdos o mas comandos, sin embargo, no es un error definir un 
bloque para una sola instruccion. 


un ejemplo donde es recomendable usar las llaves aun cuando la condicion aplique sobre un solo comando es 
si vas a definir un comando <i>else</i> luego de dos <i>if</i>  anidados en general 

si pones un <i>if</i> dentro de otro y seguidamente pones un <i>else</i>, 
este apliacara sobre el <i>if</i> mas interno si deseas darle valridad a tu 
programa o si no quieres situaciones imprevistas usa llaves siempre 
que pongas <i>if</i> anidados 
</pre>

	<!-- Regresar un directorio anterior ../ -->
        <a href="../../"><button>ir al índice</button></a>

</div>
</body>
</html>