<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/php_desde_0/style.css">
	<title>Parametros</title>
</head>
<body>
<div class="p_h_p">

<h1>Tipos de pases de parametros</h1>
<pre>
Normalmente los parametros se usan solo para comunicar valores de inicio a una <i>función</i>, 
asi que las variables que pudieran ser colocadas en la llamada copian sus contenidos en las 
variables de la <i>función</i>, llamadas <i>parametros formales</i>.

<h2>Pase de parametros por valor</h2>
Si durante el cuerpo de la <i>función</i> el contenido de una de esas variables es cambiado,
la variable original que colocamos en la llamada permanecera <i>inalterada</i>. Es decir, que 
bajo condiciones normales, la <i>función</i> habra de trabajar con una copia de los valores que les pasemos. 
A esto se le llama <i>pase de parametros por valor</i>.

<h2>Pase de parametros por referencia</h2>
Puede ser que necesitemos llamar a una <i>función</i> y nos convenga obtener de vuelta no 
solo el valor retornado, sino que tambien queramos que alguno de los parametros vuelva alterado 
de una o otra manera. Esto se logra atraves del llamado <i>pase de parametros por referencia</i>

Hagamos un pequeño cambio sobre nuestra <i>función</i> <i>en_rango</i> (funcion en la pagina 2 Funciones ) 
para ilustrar el concepto 
Supongamos que deseamos que la <i>función</i> no solo retorne un valor logico como lo hace hasta ahora, sino que 
deseamos obtener un mensaje que indique la relación del primer <i>parametro</i> respecto al rango, es decir, 
si es menor, mayor o esta en medio 


function <i>en_rango</i>($valor1,$min, $max,<i>&$mensaje</i>){
  $res = true;
  $mensaje = "en rango";
  if($valor1 < $min){
    $res = false;
    $mensaje = "<i>por debajo</i>";

  }else if( $valor1 > $max){
    $res = false;
    $mensaje = "<i>por encima</i>";
  }  
  return $res;
}

$edad = 26;
if( <i>en_rango</i> ($edad, 13, 19, <i>$relacion</i>))
echo "La edad indicada pertenece al rango de la adolecencia";
else 
echo "La edad indicada esta " . <i>$relacion</i> . " del rango de la adolecencia";

<?php 
function en_rango($valor1,$min, $max, &$mensaje){
  $res = true;
  $mensaje = "en rango";
  if($valor1 < $min){
    $res = false;
    $mensaje = "<i>por debajo</i>";

  }else if( $valor1 > $max){
    $res = false;
    $mensaje = "<i>por encima</i>";
  }  
  return $res;
}


$edad = 26;
if(en_rango($edad, 13, 19, $relacion))
echo "La edad indicada pertenece al rango de la adolecencia";
else 
echo "La edad indicada esta " . $relacion . " del rango de la adolecencia";
?>



Hemos alterado la <i>función</i> para agregar un nuevo parámetro, el cual esta precedido
por el signo <i>&</i>. Al hacer esto estamos indicando que ese <i>parametro</i> esta <i>pasado por referencia</i>.
es decir, que cualquier cambio que se haga internamente sobre el parametro <i>$mensaje</i>, va a afectar
tambien a la variable <i>$relacion</i>. 

Esto es asi porque en este tipo de pase de <i>parametros</i> no se copia internamente el contenido 
de una variable sobre una nueva sino que esta usando la misma variable de la llamada.

Podemos ver que el texto, que se muesrta cuando la <i>función</i> retorna <i>FALSE</i>, se utliza el contenido 
de la variable <i>$relacion</i>, la cual habra de contener las frases "por encima" o "por debajo"


<h2>Omitiendo <i>parámetros</i></h2>
Hay ocasiones en las que al llamar a una <i>función</i>, usamos casi siempre un cierto valor en alguno de los 
<i>parámetros</i>. Para estos casos, PHP ofrece la posiblidad de asignar <i>parametros</i> un valor por defecto.

Cuando una <i>función</i> tiene un valor por defecto en uno de sus <i>parametros</i>, el usuario tiene la posiblidad 
de ignorar ese parametro en la llamada, con lo que la <i>función</i> usara el valor <i>pre asignado</i> 

                                    Parametro con valor por defecto
function <i>saludo</i> ($nombreDeUsuario, <i>$titulo = "Mr"</i> ){
    echo "Buenos dias $titulo. $nombreDeUsuario";
}

saludo ("Johnny Taylor");
saludo ("Joan Parker", "Mss");

<?php
function saludo ($nombreDeUsuario, $titulo = "Mr"){
    echo "<br>Buenos dias <i>$titulo</i>. <i>$nombreDeUsuario</i>";
}

saludo ("Johnny Taylor");
saludo ("Joan Parker", "Mss");

?>


En el ejemplo anterior hemos agregado al <i>parametro</i> titulo un valor por defecto: <i>"Mr"</i>
De esta manera, siempre que llamemos a la <i>función</i> saludo omitiendo el segundo <i>parametro</i>,
la <i>función</i> usara el titulo por defecto, de lo contrario usara el que sea enviado.

Es importante resaltar que los <i>parametro</i> que sean susceptibles a ser 
<i>omitidos</i> deben esta al <i>final</i> de la <i>función</i>.


</pre>



 				<!-- Regresar un directorio anterior ../ -->
        		<a href="../../"><button>ir al índice</button></a>
	
</div>
</body>
</html>