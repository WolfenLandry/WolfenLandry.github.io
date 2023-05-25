<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/php_desde_0/style.css">
    <title>Variable de Variable</title>
</head>
<body>

<div class="p_h_p">
<pre>
<h1>Variable de Variable</h1>
una de las caracteristicas del lenguaje que le aporta una tremenda flexiblidad es la posiblidad 
de expandir "macros".
Es decir, la posiblidad de poder armar el nombre de una variable dentro de otra variable 
para luego inspeccionar su contenido

Existen ocaciones en las que debemos usar una u otra variable dependiendo de 
una cierta condicion, para este tipo de casos <i>PHP</i> ofrece la posiblidad de armar el 
nombre de la variable que deseamos utilizar dentro de una tercera, para luego acceder 
al contenido de la varaible seleccionada prefijando el nombre de la variable contenedora
por un signo de dolar adicional


$normal = 22;
$oferta = 20; 
$devaluado = 15; 
$finDeMes = true; 
$articuloDeteriorado = false;

    if ($finDeMes) 
        $precio ="oferta"; 
    else {
     if($articuloDeteriorado) 
        $precio = "devaluado"; 

    else 
        $precio ="normal"; 
 }

"El precio seleccionado es: ". $$precio; 
"el doble signo sirve para acceder al valor que contiene precio 
osea el valor de normal,oferta,devaluado";

"En el ejemplo anterior podemos observar que hemos preparado una variable ($precio) 
con el nomnre de la variable que contiene el valor a usar Luego para saber el 
contenido de esa variable cuyo nombre tenemos almacenado, hemos usado el  
doble signo de dolar de esa manera hemos accedido no al texto "oferta"(por ejemplo) 
sino al valor de la variable $oferta";

<?php
    $normal     = 400;
    $oferta     = 200;
    $devaluado  = 150;

    $finDeMes = true;
    $articuloDeteriorado = false;

    if ($finDeMes) 
        $precio ="oferta";
     else {
    
     if($articuloDeteriorado)
         $precio = "devaluado";
     else 
        $precio ="normal";
    }

    echo "El precio seleccionado es: ". $$precio; 
    echo "<br>variable de variable, se tiene que poner la variable a la que se hace referencia";
    echo "<br>en comillas dobles y sin el signo de $ <br>"; 

    $Raton = 2000;
    $Gato = "Raton"; 

    echo "<br>para hacer referencia a la variable Raton no es necesario usar el simbolo de <i>$</i>";
    echo "<br>solo es necesario usar la palabra de la <i>variable</i>";
    echo "<br>Valor de la variable Raton " , $Raton;
    echo "<br>el gato tiene en su estomago un ".$$Gato;

?>



        <!-- Regresar un directorio anterior ../ -->
        <a href="../../"><button>ir al índice</button></a>

</pre>
</div>                                   
</body>
</html>