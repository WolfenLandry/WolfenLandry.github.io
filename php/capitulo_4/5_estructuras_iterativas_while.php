<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/php_desde_0/style.css">
	<title>Estructuras iterativas</title>
</head>
<body>
<div class="p_h_p">
	
<h1>Estructuras iterativas: El comando <i>While</i></h1>
<pre>

<h2>El comando <i>while</i>: </h2>
No todas las veces que necetiamos repetir un bloque de codigo sabemos el numero de repeticiones que debemos 
realizar.
De hecho, en la practica son muchas las veces que debemos ejecutar una cierta secuencia y evaluar si la misma
debe ser repetia o no, para ello existe el comando <i>while</i>

La estructura del comando <i>while</i> es como sigue 

<h2>El comando <i>while</i></h2>
Descripción 
Ejecuta un comando o bloque hasta cumplirse cierta condiccion 

Sintaxis:
<i>While</i> ( < condicion >)
 < comando o bloque >;

 Ejemplos:
//condicionando sola una linea 
$total = 0;
<i>for</i> ($i = 1; $i < 12; $i++) { 
	$total += 1;
	echo " El valor de la variable total: " . $total;
}


<?php 

//condicionando sola una linea 
$total = 0;
for ($i = 1; $i < 12; $i++) { 
	$total += 1;
	echo "<br> El valor de la variable total: " . $total;
}

?>


//condicionando un bloque 
$suma = 0;
$producto = 1;
<i>for</i> ($i = 1; $i < 12 ; $i++) { 
	$suma += $i;
	$producto *= $i;
	echo " el valor de la variable suma es: ".$suma ." el valor de la variable producto es: ".$producto ;
}

<?php 
//condicionando un bloque 
$suma = 0;
$producto = 1;
for ($i = 1; $i < 12 ; $i++) { 
	$suma += $i;
	$producto *= $i;
	echo "<br> el valor de la variable suma es: " .$suma."   el valor de la variable producto es: " .$producto ;
}
 ?>


Uso del comando <i>While</i> para saber si un numero es par o impar 
$num = 0;
$pares = 0;
$impares = 0;

<i>while</i> ($num <= 50) {
	if ($num % 2 == 0) {
		$pares++;
		echo "El valor de la variable num es:" .$num. "  <i>es par</i> ";
	}else{
		$impares++;
		echo "El valor de la variable num es: " .$num. " es impar";
	}
	$num++;
}

<?php 
$num = 0;
$pares = 0;
$impares = 0;

while ($num <= 50) {
	if ($num % 2 == 0) {
		$pares++;
		echo "<br>El valor de la variable num es: <i>" .$num. "</i>  <i>es par</i> ";
	}else{
		$impares++;
		echo "<br>El valor de la variable num es: " .$num. " es impar";
	}
	$num++;
}
?>


<h2>El comando <i>do While</i> </h2>

existe una variante del comando anterior que permite hacer siempre una primera iteracción
para luego evaluar si es necesario o no repetir el proceso
es el comando do...while 

<h2>la variante <i>do...while</i></h2>
descripción:
ejecuta un comando o bloque y repite hasta cumplirse cierta condición.

Sitaxis:
<i>do</i>
< comando o bloque >;
<i>while</i> (< condicion >);

Ejemplos: 
//condicionando una sola linea
$total = 0;
<i>do</i>{
	$total++;
	echo "el valor de la variable total es: ". $total;
} <i>while</i> ($total < 10 );

<?php 
$total = 0;
do{
	$total++;
	echo "<br> el valor de la variable total es: ". $total;
}while($total < 10 );

?>


//condicionando un bloque 
$n = 0;
$res = 1;
<i>do</i> {
	$res += $res * $n;
	$n++;
	echo "el valor de la variable n es: ". $n . "  el valor de la variable res es: ".$res;
} <i>while</i> ($n < 10);

<?php 
//condicionando un bloque 
$n = 0;
$res = 1;
do{
  //$res =  $res +($res * $n);
	$res += $res * $n;
	$n++;
	echo "<br>el valor de la variable n es: ". $n . "  el valor de la variable res es: ".$res;
}while ($n < 10);
?>



//la funcion hipotetica abre_archivo()
//intenta abrir un cierto archivc y retoma
//un valor logico que indica si lo logró
$reintentos = 0;
<i>do</i> {

$exito = abre_archivo();
if($exito){
	$reintentos++;
	}
} <i>while</i> ($reintentos < 3);
</pre>





 				<!-- Regresar un directorio anterior ../ -->
        		<a href="../../"><button>ir al índice</button></a>

</div>
</body>
</html>