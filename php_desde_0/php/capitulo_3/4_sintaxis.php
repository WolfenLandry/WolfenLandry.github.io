<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/php_desde_0/style.css">
	<title>Sintaxis</title>
</head>
<body>

<div class="p_h_p">

<h1>Sintaxis</h1>

<h2>Descripción sintactica</h2>

<pre>no es otra cosa que un diagrama que muestra la forma valida en que una instruccion 
cualquiera deba ser construida

<h2><i>variable</i> = nombre_de_funcion([parametros]);</h2>

en la linea anterior estamos indicando lo siguiente:

1.Un <i>nombre</i> de una <i>variable</i>(cualquiera) 
 2.Operador de <i>asignacion</i> 
  3.Un <i>nombre</i> de <i>función</i> (cualquiera) 
   4.Parentesis de <i>apertura</i> ( 
    5.Opcionalmente pueden haber parametros 
     6.Parentesis de <i>cierre</i> )
      7.Punto y coma <i>;</i> 

un ejemplo de lo descrito en la regla anterior seria
$precio = calcular_precio();
o 
Tambien:  $salario = calcular($neto,$bonos,$deuda);

<h2>reglas de sintaxis:</h2>
<table border="5">
	<tr>
	<td>Elemento</td>	
	<td>Significado</td>
	</tr>

	<tr>
	<td><h2>texto normal</h2></td>	
	<td>indica que el elemento debe estar escrito precisamente de esa manera.</td>
	</tr>

	<tr>
	<td>< texto entre simbolos de comparacion></td> 
	<td>indica que debes colocar en esa posicion un elemento que cumpla 
con lo descrito por ejemplo <i>variable</i> indica que en ese lugar es 
posible escribir algo $cantidad </td>
	</tr>

	<tr>
	<td>[] </td>
	<td>siempre que algo este entre corchetes significa que es opcional</td>	
	</tr>
</table>



<h1>¿Que es una expresión?</h1>
una <i>expresion</i> puede ser desde algo tan simple como un valor (digamos 5 ) o un texto 
(por ejemplo "edificio") o una operacion entre dos o mas valores(5 + 8 - 2 ) o operaciones 
entre valores y variables ($sueldo + $bonos - $descuentos)

para describir como se asigna un valor a una variable, podriamos decir que 
puede ser de una  de las siguientes maneras:

1 <$variable> = <i>< numero>;</i>
 2 <$variable> = <i>< cadena de caracteres>;</i>
  3 <$variable> = <i><$variable></i>
   4 <$variable> = <i><$variable> + < numero>;</i>
    5 <$variable> = <i><$variable> + <$variable>;</i> 
</pre>


		<!-- Regresar un directorio anterior ../ -->
        <a href="../../"><button>ir al índice</button></a>
</div>
</body>
</html>
