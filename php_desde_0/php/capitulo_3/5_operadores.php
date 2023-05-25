<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/php_desde_0/style.css">
    <title>Operadores</title>
</head>
<body>
<div class="p_h_p">
<u><i></i></u>
<h1>Operadores (<i>asignacion</i>, <i>aritméticos</i>, <i>incremento</i>, <i>decremento</i>)</h1>

<pre>
Los operadores son simbolos que ofrece el lenguaje para permitir efectuar acciones simples sobre 
variables o valores individuales,como asignar un valor,comparar contenidos,incrementar variables, 
redondear, etc.

<h2>Operador basico de <i>asignación</i> </h2>
el operador de asignacion permite otorgarle un contenido a una variable

Sintaxis: <$variable> = < expresion >;

Ejemplo:
$i= 5;
$nombre <i> = </i> "Andrea";
$total = 5;

<?php 
 Ejemplo:
 $i= 5;
 $nombre = "Andrea";
 $total = 5;
 echo "<br>el valor de la variable total es: ". $total;
?>

<h2>Operador de <i>concatenación</i></h2>
Permite unir dos cadenas de caracteres en una sola

Sintaxis: <$variable> = < expresion> <i> . </i> < expresion>;

ejemplo:
$nombre = "Felipe". "Meza";
$letras ="A"."B"."C";
$cadena = $nombre.$letras;

<?php 
$nombre = "Felipe". "Meza";
$letras ="A"."B"."C";
$cadena = $nombre.$letras;
echo "<br>La variable cadena almacena:" .$cadena;
 ?>

<h2>Operadores <i>Aritmeticos</i> Basicos</h2>
<h2><i>Suma</i></h2>
Sintaxis: <$variable> = < expresion> <i> + </i> < expresion>;
Ejemplos:
$a = 30;
$b = 70;
$total = $a + $b;

<?php 
$a = 30;
$b = 70;
$total = $a + $b;
echo "el total de la suma de a + b es: " . $total;
 ?>

<h2><i>Resta</i></h2>
Sintaxis: <$variable> =  < expresion> <i> - </i>< expresion>
Ejemplos:
$precio = 1000.45;
$descuento = 200.45;
$preciofinal = $precio - $descuento;
echo "El precio final es: ". $preciofinal

<?php 
$precio = 1000.45;
$descuento = 200.45;
$preciofinal = $precio - $descuento;
echo "El precio final es: ". $preciofinal;
 ?>

<h2><i>Multiplicación</i></h2>
Sintaxis: <$variable> = < expresion> <i>*</i> < expresion>
Ejemplo:
$distancia = $distancia * 3;
<?php 
$pesomexicano = 17.98;
$dolar =  10000;
$conversion = $dolar * $pesomexicano;
echo "$dolar dolares a pesos mexicanos son:  " .$conversion ." pesos mexicanos";
?>

<h2><i>División</i></h2>
Sintaxis: <$variable> = < expresion><i> / </i>< expresion>
Ejemplo:
$pastel = 44;
$invitados = 4;
$rebanadas = $pastel / $invitados;
<?php 
$pastel = 44;
$invitados = 4;
$rebanadas = $pastel / $invitados;
echo "A los invitados les toca de $rebanadas por persona";
?>

<h2><i>Resto de división</i></h2>
Sintaxis: <$variable> = < expresion> % < expresion>;
Ejemplo:
$total = 400;
$porciones = 24;   
$sobrante = $total % $porciones;
<?php 
$total = 400;
$porciones = 24;  
$sobrante = $total % $porciones;
echo "el sobrante es de : " . $sobrante;
 ?>

<h2>Operadores de <i>incremento</i> y <i>decremento</i></h2>
Las operaciones aritmeticas donde debemos incrementar o decrementar en uno el contenido de una 
variable son muy frecuentes
Para esos casos PHP ha adoptado los operadores unitarios del lenguaje C

<h2><i>Incremento</i></h2>
Sintaxis: <$variable> ++

Ejemplos:
$total = 20;
$total ++;
//EL ejemplo anterior es equivalente a escribir
$total = $total + 1;
<?php 
$total = 20;
echo "<br>valor de la variable total: ". $total;
$total ++;
echo "<br>valor de la variable total despues del incremento: ". $total;
?>

<h2><i>Decremento</i></h2>
Sintaxis: <$variable> --

Ejemplos:
$total = 20;
$total--;
//El ejemplo anterior es equivalente a escribir
$total = $total - 1;
<?php 
$total = 20;
echo "<br>valor de la variable total: ". $total;
$total --;
echo "<br>valor de la variable total despues del decremento: ". $total;
?>

<h3>Una variable puede ser usada dentro de una expresion conteniendo un 
    operador de <i>incremento</i> o <i>decremento</i></h3>

<i>Incrementar</i>el valor de $a dentro de la tercera asignación

$a = 19;
$b = 20;
$d = $a++ + $b; (al hacer asi la asignacion crea un conflicto de operadores aritmeticos en el cual
                a no aumenta su valor)
$d = $b + $a++ ;
<?php 
$a = 19;
$b = 20;
echo "el valor de a es: ". $a;
echo "<br>el valor de b es: ".$b;
$d = ++$a + $b;
echo "<br>el valor de d es: " . $d;
?>

en una sola instrucción la variable $d ha tomado el valor de la suma de $a y $b,
y luego, el valor de la variable $a ha sido incrementando en uno, pasando a tener un valor de 20

otra manera de hacer el incremento. Consiste en poner el operador antes del nombre de la variable, 
en cuyo caso la variable seria afectada antes de aportar su valor para la asignacion 

$a = 6;
$b = 3;
$F = ++$a + $b;
//$a ha sido incrementado y ahora vale 7
//el valor asignado a $F es ahora 10
//$b sigue valiendo 3
<?php
$a = 6;
echo "<br>El valor de a es: ". $a;
$b = 3;
echo "<br>El valor de b es: " . $b;
$f = ++$a + $b;
echo "<br>el valor de F es: " . $f;
?>


<i>Decrementar</i> el valor de $l dentro de la tercera asignación

$l = 31;
$m = 70;
$f = --$l + $m;
<?php 
$l = 31;
$m = 70;
echo "El valor de l es: " . $l;
echo "<br>El valor de m es: " . $m;
$f = --$l + $m;
echo "<br>El valor de l es: " . $l;
echo "<br>El valor de f es: " . $f

?>


$l = 200;
$m = 100;
$f = --$l - $m;
<?php 
$l = 200;
$m = 100;
echo "El valor de l es: " . $l;
echo "<br>El valor de m es: " . $m;
$f = --$l - $m;
echo "<br>El valor de l es: " . $l;
echo "<br>El valor de f es: " . $f
?>



en cualquier problema de matemáticas debes empezar resolviendo los paréntesis, 
luego los exponentes; luego las multiplicaciones y divisiones y luego las sumas y restas
</pre>







        <!-- Regresar un directorio anterior ../ -->
        <a href="../../"><button>ir al índice</button></a>
</div>
</body>
</html>

