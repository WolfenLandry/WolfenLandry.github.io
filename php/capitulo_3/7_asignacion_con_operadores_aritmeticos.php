<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/php_desde_0/style.css">
    <title>Asignación con operadores aritmeticos</title>
</head>
<body>


<div class="p_h_p">
 
<h1>Asignación con operadores aritmeticos basicos </h1>

<pre>
<h2><i>Asignación con suma</i></h2>
Sintaxis: <$variable> <i>+=</i> < expresion>;
existen otras maneras de asignar un valor a una variable basado en el contenido que ella contenga

$z = 150;
$z = $z + 50;
la instruccion anterior puede ser escrita de la siguiente manera:

$z = 150;
$z <i>+=</i> 50;

<?php 
$z = 150;
$z += 50;
echo "el valor de z es: ". $z;
?>

</pre>

<pre>
<h2><i>Asignación con resta</i></h2>

Sintaxis: <$variable> <i>-=</i> < expresion>;

Ejemplo:
$precio = 200;
$descuento = 40;

$precio <i>-=</i> $descuento;
equivale a $precio = $precio - descuento;

<?php 
$precio = 200;
$descuento = 40;
$precio -= $descuento;

echo "el precio final menos el descuento es: " .$precio;
?>
</pre>

<pre>

<h2><i>Asignación con Multiplicación<</i></h2>

Sintaxis: <$variable> <i>*=</i> < expresion>;

Ejemplo:
$riesgo = 300;
$riesgo <i>*=</i> 2;
//Equivale a $riesgo = $riesgo * 2;

<?php 
$riesgo = 300;
$riesgo *= 2;
echo "el riego aumento el doble: " . $riesgo;

?>

<h2><i>Asignacion con division</i> </h2>

Sintaxis: <$variable> <i>/= </i> < expresion>;

Ejemplo:
$ganancia = 1000;
$personas = 100;
$ganancia <i>/= </i> $personas;
//Equivale a $ganancia = $ganancia/$personas 
<?php 
$ganancia = 1000;
$personas = 100;
$ganancia /= $personas;
echo "La ganancia final es: ".$ganancia;

?>


<h2><i>Asignación con resto %</i></h2>

Sintaxis: <$variable> <i>%=</i> < expresion>;

Ejemplo:
$personas = 9;
$grupos = 2;
$personas <i>%=</i> $grupos;
otra forma de escribirlo 
//$personas = $personas % $grupos;

$personas contendra el resto de 9/2
<?php 
$personas = 9;
$grupos = 2;
$personas %= $grupos;
echo "el resto de la division de persones entre grupos es " .$personas;
 ?>


</pre>


<h2><i>Asignación con concatenación</i></h2>
<pre>
Sintaxis: <$variable> <i>.= </i> < nexpresion>

Ejemplo:
$alfabeto ="abcede_";
$alfabeto .= "XWZQR ";
equivale a $alfabeto = $alfabeto . "XWZQR"
le asigna nuevo valor a la variable alfabeto y mantiene el que ya contenia


<?php 
$alfabeto ="abcede_";
echo "<br>la variable alfabeto contiene: " .$alfabeto;
$alfabeto .= "XWZQR ";
echo "<br>la variable alfabeto ahora contiene: " .$alfabeto;


 ?>

<h1>Asignación con operadores Lógicos</h1>

<h2><i>Asignación con "Y" Lógico</i></h2>

Sintaxis: <$variable> &= < expresion>;

Ejemplo:
$tiene_Licencia = true;
$esta_asegurado = false;
$puede_conducir     =   $tiene_Licencia;
$puede_conducir     &=  $esta_asegurado;

//La ultima condicion equivale a haber escrito 
$puede_conducir = $puede_conducir && $esta_asegurado
el cual evalua las dos expresiones contenidas en la variable $puede_conducir son true

if ($puede_conducir == true) {
    echo "Puede conducir";

}else{
    echo "no puede puede conducir";

}

<?php 
$tiene_Licencia = true;
$esta_asegurado = true;
$puede_conducir     =   $tiene_Licencia;
$puede_conducir     &=  $esta_asegurado;

if ($puede_conducir == true) {
    echo "Puede conducir";

}else{
    echo "no puede puede conducir";

}
 ?>

<h2><i>Asignacion con "O" logico</i></h2>

Sintaxis: <$variable> |= < expresion>;

Ejemplo:
$es_animal = false;
$es_vegetal = true;

$es_un_ser_vivo = $es_animal;
$es_un_ser_vivo  |= $es_vegetal;


//la ultima instruccion equivale a haber escrito 
//$es_un_ser_vivo = $es_un_ser_vivo || $es_vegetal;
//sera true si al menos una de las condiciones escritas es true

if ($es_un_ser_vivo == true) {
    echo "puede que sea un animal o un vegetal";
}else {
    echo "no es ni animal ni vegetal por lo tanto no e es un ser vivo";
} 


 
<?php 
$es_animal = false;
$es_vegetal = true;

$es_un_ser_vivo = $es_animal;
$es_un_ser_vivo  |= $es_vegetal;
if ($es_un_ser_vivo == true) {
    echo "puede que sea un animal o un vegetal";
}else {
    echo "no es ni animal ni vegetal por lo tanto no e es un ser vivo";
} 


?>



</pre>










        <!-- Regresar un directorio anterior ../ -->
        <a href="../../"><button>ir al índice</button></a>





</div>
</body>
</html>