<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/php_desde_0/style.css">
	<title>Operadores lógicos</title>
</head>
<body>
<div class="p_h_p">


<h1>Operadores lógicos</h1>
Estos operadores permiten efectuar operaciones entre dos valores o 
expresiones logicas,es decir, aquellas que representan valores de verdarero o falso

<h2><i>Negacion</i></h2>
<pre>
Sintaxis: !< expresion>
Ejemplo:
$dia = 	true;
$noche = !$dia;
equivale a decir que <i>$noche</i> va a tomar el 
valor <i>logico contrario</i> al que tome <i>$dia</i>

$dia =  true;
if (!$dia == false) {
    echo "es de noche";
}else {
    echo "es de dia";
}


<?php 
$dia = 	true;
if (!$dia == false) {
    echo "es de <i>noche</i>";
}else  {
    echo "es de dia";
}
?>
</pre>
<h2><i>"Y" Logico</i></h2>
<pre>
Sintaxis: <$variable> = < expresion> && < expresion>;
Ejemplo:
$comprendo = true;
$practico = false;
$voy_a_aprender = $comprendo && $practico;
if ($voy_a_aprender == true) {
    echo "Si va a aprender si practico y comprende";
}else {
    echo "No va a aprender";
}

<?php 
$comprendo = true;
$practico = false;
$voy_a_aprender = $comprendo && $practico;
if ($voy_a_aprender == true) {
    echo "Si va a aprender si practico y comprende";
}else {
    echo "No va a aprender";
}
?>

la variable <i>$voy_a_aprender</i> va a tener el valor true(1) 
solo si las variables <i>$comprendo</i> y <i>$practico</i> son a su vez <i>true</i>

</pre>

<h2><i>"O" lógico</i></h2>

<pre>Sintaxis: <$variable> = < expresion> || < expresion>
Ejemplo:
$ha_llovido = false;
$hay_fuga = false;
$acera_mojada = $ha_llovido || $hay_fuga;
if ($acera_mojada == true) {
    echo "la acera esta mojada ya sea porque llovio o porque hay fuga de agua";
}else{
    echo "la acera no esta mojada ya sea porque no llovio o porque no hay fuga de agua";
}
<?php 
$ha_llovido = false;
$hay_fuga = false;
$acera_mojada = $ha_llovido || $hay_fuga;
if ($acera_mojada == true) {
    echo "la acera esta mojada ya sea porque llovio o porque hay fuga de agua <br>";
}else{
    echo "la acera no esta mojada ya sea porque no llovio o porque no hay fuga de agua <br>";
}

 ?>
la variable <i>$acera_mojada</i> sera <i>true</i> si al menos <i>uno</i> de las dos <i>variables</i> es cierta

</pre>

<h2><i>"Y" logico de evaluación completa</i></h2>
<pre>
Sintaxis: <$variable> = < expresion> and < expresion>;
Nota:
Funciona en forma similar al operador && excepto porque este ultimo 
no <i>evalua la segunda expresion</i> si la <i>primera resulta falsa </i>

$tiene_libros_de_java = true;
$esta_estudiando = false;
$va_a_aprender = $tiene_libros_de_java and $esta_estudiando;
if ($va_a_aprender) {
    echo "Si va a aprender";
}else{
    echo "no va a aprender";
}

<?php 
$tiene_libros_de_java = true;
$esta_estudiando = false;
$va_a_aprender = $tiene_libros_de_java and $esta_estudiando;
if ($va_a_aprender) {
    echo "Si va a aprender";
}else{
    echo "no va a aprender";
}
?>
</pre>

<h2><i>"O" logico de evaluación completa</i></h2>
<pre>Sintaxis: <$variable> = < expresion> or < expresion>;

Nota: al igual que el caso anterior, operador or funciona en forma similar al operador ||, 
pero con <i>evaluación completa de ambas expresiones </i>

$comprar_libro = true;
$comprar_juego = false;
$tiene_dinero = $comprar_juego or $comprar_juego;
if ($tiene_dinero == true) {
    echo "tiene dinero para comprar un juego o un libro";
}else{
    echo "no tiene dinero para comprar un juego o un libro";
}

<?php
$comprar_libro = true;
$comprar_juego = false;
$tiene_dinero = $comprar_juego or $comprar_juego;
if ($tiene_dinero == true) {
    echo "tiene dinero para comprar un juego o un libro";
}else{
    echo "no tiene dinero para comprar un juego o un libro";
}
?>

</pre>

<h2><i>"O" exclusivo</i></h2>
<pre>
Sintaxis: <$variable> = < expresion> xor < expresion>;

Ejemplo:
$tiene_azucar = true;
$tiene_sacarina = false;
$bien_endulzado = $tiene_azucar xor $tiene_sacarina;
 
solo puede estar <i>$bien_endulzado</i> si <i>$tiene_azucar</i> o si <i>$tiene_sacarina</i> 
<i>nunca si tiene ambas cosas</i>

$tiene_azucar = true;
$tiene_sacarina = false;

if ($bien_endulzado = $tiene_azucar xor $tiene_sacarina) {
    echo "si esta bien bien_endulzado";
}else{
    echo "no esta bien bien_endulzado";
}


<?php 
$tiene_azucar = true;
$tiene_sacarina = false;

if ($bien_endulzado = $tiene_azucar xor $tiene_sacarina) {
    echo "si esta bien bien_endulzado";
}else{
    echo "no esta bien bien_endulzado";
}
?>

</pre>









        <!-- Regresar un directorio anterior ../ -->
        <a href="../../"><button>ir al índice</button></a>




</div>
</body>
</html>