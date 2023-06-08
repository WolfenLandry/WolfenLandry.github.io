<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/php_desde_0/style.css">
	<title>Estructuras condicionales</title>
</head>

<body>


<div class="p_h_p">
<h1>Estructuras <i>condicionales:</i> El comando <i>switch</i></h1>

<pre>
Se utiliza para poner dos o mas condiciones sobre el resultado de una expresión. 
Veamos una sitacion de este tipo para explicar mejor su estructura 
supongamos que hemos desarrolado una evaluacion en linea y al momento de mostrar la 
calificacion obtenida por el usuario, queremos mostrar un mensaje distinto para 
distintos rangos de notas

Supongamos que las calificaciones son del 1 al 4 y que queremos mostrar lo siguientes mensajes:

1 Muy deficiente
 2 Deficiente 
  3 Buen trabajo
   4 Excelente

Supongamos ademas que queremos actualizar una variable con un valor logico que indique si el usuario
aprobo el examen o no. consideremos aprobado una calificacion por encima o igual a 3
si deseamos desarrollar este ejemplo usando comandos <i>if</i>, se veria de la siguiente manera:

<i>$nota</i> = <i>3</i>; #Calificacion del alumno 

if (<i>$nota</i> == <i>1</i>) {
	  $mensaje = "Muy Deficiente";
	  $aprobado = false;
	  echo "La nota del alumno es: ".$mensaje;
} else {

	if (<i>$nota</i> == <i>2</i>) {
		$mensaje = "Deficiente";
		$aprobado = false;
		echo "La nota del alumno es: ".$mensaje;

	} else {
		if (<i>$nota</i> == <i>3</i>) {
		$mensaje = "Buen trabajo";
		$aprobado = true;
		echo "La nota del alumno es: ".$mensaje;
		} else {

		$mensaje = "Excelente";
		$aprobado = true;
		echo "La nota del alumno es: ".$mensaje;
		}
	}
}
<?php 
$nota = 3; #Calificacion del alumno 

if ($nota == 1) {
	$mensaje = "Muy Deficiente";
	$aprobado = false;
	echo "la nota del alumno es: ".$mensaje;

} else {
	if ($nota == 2) {
		$mensaje = "Deficiente";
		$aprobado = false;
		echo "la nota del alumno es: ".$mensaje;

	} else {
		if ($nota == 3) {
			$mensaje = "Buen trabajo";
			$aprobado = true;
			echo "la nota del alumno es: ".$mensaje;
		} else {
			$mensaje = "Excelente";
			$aprobado = true;
			echo "la nota del alumno es: ".$mensaje;

		}
	}
}

 ?>

Ahora bien, el comando <i>switch</i> permite poner una solar vez la expresion (o variable)
a evaluar, y definir distintos bloques a ser ejecutados dependiendo del valor obtenido

Los bloques dentro un comando <i>switch</i> no se definen del modo tradicional (usando llaves)
sino que se delimitan usando el comando <i>break</i>.


<h2>El comando <i>Switch</i></h2>
Permite evaluar una expresion y definir distintos bloques de ejecución.

Sintaxis:
$expresion = 10;
switch (expresion) {
	case < valor 1 > :
		comandos; 
		break;
	case < valor 2>:
		comandos;	
	...
	default:
		comandos;
		break;
}

Ejemplo:
#¿Cuantas canciones ha escuchado el usuario?
<i>$songs</i> = <i>5</i>;
	switch (<i>$songs</i>) {

		case <i>0</i>:
			$resultado = "cero";
			echo "El usuario ha esuchado ". $resultado. " canciones";
			<i>break;</i>

		case <i>1</i>:
			$resultado = "uno";
			echo "El usuario ha esuchado ". $resultado. " canciones";
			<i>break;</i>

		case <i>2</i>:
			$resultado = "dos";
			echo "El usuario ha esuchado ". $resultado. " canciones";
			<i>break;</i>

		<i>default:</i>
			$resultado = "mas de dos";
			echo "El usuario ha esuchado ". $resultado. " canciones";
			<i>break;</i>
	}
<?php 
#¿Cuantas canciones ha escuchado el usuario?
$songs = 5;
	switch ($songs) {

			case 0:
			$resultado = "cero";
			echo "El usuario ha esuchado <i>". $resultado . "</i> canciones";
			break;

			case 1:
			$resultado = "uno";
			echo "El usuario ha esuchado <i>". $resultado . "</i> canciones";
			break;

			case 2:
			$resultado = "dos";
			echo "El usuario ha esuchado <i>". $resultado . "</i> canciones";
			break;

			default: 
			$resultado = "mas de dos";
			echo "El usuario ha esuchado <i>". $resultado . "</i> canciones";
			break;
	}

 ?>

Para ilustrar el uso del comando <i>switch</i> veamos como podriamos reescribir 
el ejemplo de la evaluacion en linea

<i>$nota</i> = <i>3</i>; #calificacion del alumno
echo "La nota del alumno es: " . $nota;
switch (<i>$nota</i>) {
	
	case <i>1</i>: // el valor que puede contener la variable nota 
		$mensaje = "<i>Muy deficiente</i>";
		$aprobado = false;
		echo "El desempeño del alumno fue: ".$mensaje;
		<i>break;</i>
	
	case <i>2</i>:
		$mensaje = "<i>Deficiente</i>";
		$aprobado = false;
		echo "El desempeño del alumno fue: ".$mensaje;
		<i>break;</i>
	
	case <i>3</i>:
		$mensaje = "<i>Buen trabajo</i>";
		$aprobado = true;
		echo "El desempeño del alumno fue: ".$mensaje;
		<i>break;</i>
	
	case <i>4</i>:
		$mensaje = "<i>Excelente</i>";
		$aprobado = true;
		echo "El desempeño del alumno fue: ".$mensaje;
		<i>break;</i>
		
}

<?php 
$nota = 3; #calificacion del alumno
echo "La nota del alumno es: " . $nota;
switch ($nota) {
	case 1:
		$mensaje = "<i>Muy deficiente</i>";
		$aprobado = false;
		echo "<br>El desempeño del alumno fue: ".$mensaje;
		break;
	
	case 2:
		$mensaje = "<i>Deficiente</i>";
		$aprobado = false;
		echo "<br>El desempeño del alumno fue: ".$mensaje;
		break;
	case 3:
		$mensaje = "<i>Buen trabajo</i>";
		$aprobado = true;
		echo "<br>El desempeño del alumno fue: ".$mensaje;
		break;
	case 4:
		$mensaje = "<i>Excelente</i>";
		$aprobado = true;
		echo "<br>El desempeño del alumno fue: ".$mensaje;
		break;
		
} 
?>

<br>#Ejemplo de numero de libros en una biblioteca

<i>$libros</i> = 1500; #calificacion del alumno
switch (<i>$libros</i>) {
	
	case <i>$libros</i> > 1 && <i>$libros</i> < 2000:
		$mensaje = "<i>Insuficientes</i>";
		$suficientes = false;
		echo "El desempeño del alumno fue: ".$mensaje;
		break;

	#valor true solo si las dos variables son true a su vez
	case <i>$libros</i> > 2000 && <i>$libros</i> < 3000:
		$mensaje = "<i>Muy pocos libros</i>";
		$suficientes = false;
		echo "El desempeño del alumno fue: ".$mensaje;
		break;
	
	case <i>$libros</i> > 3000 && <i>$libros</i> < 4000:
		$mensaje = "<i>Cantidad aceptable</i>";
		$suficientes = true;
		echo "El desempeño del alumno fue: ".$mensaje;
		break;
	
	case <i>$libros</i>  > 4000:
		$mensaje = "<i>Muchos libros</i>";
		$suficientes = true;
		echo "El desempeño del alumno fue: ".$mensaje;
		break;
		
}

 <?php
#ejemplo de numero de libros en una biblioteca
$libros = 1500; 
echo "Libros en la biblioteca : " . $libros;
switch ($libros) {
	
	case $libros > 1 && $libros < 2000:
		$mensaje = "<i>Insuficientes</i>";
		$suficientes = false;
		echo "<br>El numero de libros es : ".$mensaje;
		break;

	#valor true solo si las dos variables son true a su vez
	case $libros > 2000 && $libros < 3000:
		$mensaje = "<i>Muy pocos libros</i>";
		$suficientes = false;
		echo "<br>El numero de libros es : ".$mensaje;
		break;
	
	case $libros > 3000 && $libros < 4000:
		$mensaje = "<i>Cantidad aceptable</i>";
		$suficientes = true;
		echo "<br>El numero de libros es : ".$mensaje;
		break;
	
	case $libros  > 4000:
		$mensaje = "<i>Muchos libros</i>";
		$suficientes = true;
		echo "<br>El numero de libros es : ".$mensaje;
		break;
}
  ?>


En general el comando <i>switch</i> evalua la expresión y "salta" hasta el <i>case</i> correspondiente 
desde alli ejecuta todos los comandos que consigue hasta que llega a un <i>break</i>,
momento en el que salta fuera de la estructura

sabiendo esto, podemos poner mas de  un <i>case</i> en el mismo sitio para indicar que uno de los 
bloques se debe ejecutar por cualquiera de esos valores para ilustrar esto, simplifiquemos el ejemplo
anterior haciendo que las notas 1 y 2 obtengan el mensaje "no aprobado" y 3 y 4 obtengan "Aprobado".

<i>$nota</i> = <i>3</i> #calificacion del alumno
switch (<i>$nota</i>) {

	case <i>1</i>:
	case <i>2</i>:
		$mensaje = "<i>No aprobado</i>";
		$aprobado = false;
		echo "El desempeño del alumno fue: ".$mensaje;
		break;

	case <i>3</i>:
	case <i>4</i>:
		$mensaje = "<i>Aprobado</i>";
		$aprobado = true;
		echo "El desempeño del alumno fue: ".$mensaje;
		break;
}
<?php 
$nota = 3; #calificacion del alumno
switch ($nota) {
	case 1: 
	case 2:
		$mensaje = "<i>No aprobado</i>";
		$aprobado = false;
		echo "<br>El desempeño del alumno fue: ".$mensaje;
		break;

	case 3:
	case 4:
		$mensaje = "<i>Aprobado</i>";
		$aprobado = true;
		echo "<br>El desempeño del alumno fue: ".$mensaje;
		break;
}?>


Una ultima consideracion es que podemos incluir el caso especial <i>defualt</i>,
el cual habra de ejecutarse si el valor no se corresponde con ninguna de las categorias 
</pre>







				<!-- Regresar un directorio anterior ../ -->
        <a href="../../"><button>ir al índice</button></a>

	
</div>
</body>
</html>