<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/php_desde_0/style.css">
	<title>Incluyendo programas en otros programas</title>

</head>
<body>
<div class="p_h_p">



<h1>Incluendo programas en otros programas</h1>
<pre>
PHP ofrece la posibilidad  de aislar parte del codigo en un archivo independiente para luego incluirlo
donde y cuando sea necesario esta utilidad permite escribir programas mas legibles a la vez hace posible
reutilizar funciones

El programador puede agrupar ciertas funciones en librerias es decir, en grupos que tengan una utilidad 
comun y asi incluirlas en todos aquiellos archivos donde tales funciones deben ser llamadas

Los comandos que permitan incluir un archivo dentro de otro son los siguientes:

<h2>El comando <i>require</i></h2>
Este comando expande el archivo mencionado como parametro en la posicion donde él se encuentre:
Sintaxis del comando <i>require</i>
require("funciones.php");

El comando <i>require</i> se resuelve al momento de cargar la pagina,  por lo tanto no puede ser condicionado 
de ninguna manera todo lo que incluyamos utilizando <i>requiere</i> se expande dentro del archivo como si 
fuese parte de el

<h2>El Comando <i>include</i></h2>
Existen ocasiones en las que deseamos incluir parte del codigo solo si se cumple alguna condicion, o tal vez
necestiamos incluir una misma secuencia varias veces, o tal vez deseamos armar dinamicamente el 
nombre del archivo a ser incluido.

para resolver cualquiera de las situaciones anteriores, debemos evitar que el interpretador 
cargue el archivo automaticamente.Necesitamos primero ejecutar ciertas instrucciones para poder 
decidir si cargar el archivo o no cargarlo, o cargarlo repetidamente veces para eso existe el 
comando <i>include</i>

El comando <i>include</i> es similar al anterior, pero se diferencia de este en cuanto al momento 
en que es ejecutado, es decir el comando <i>require</i>, carga un archivo a ciegas, y lo hace
 al momento de cargar el archivo principal.

El comando <i>include</i> por su parte, espera hasta que el interpretador PHP llegue a la linea donde el 
se encuentra para incluir el archivo.

Sintaxis del comando <i>include</i>
include("funciones.php");


<h2>Las variantes <i>require_once</i>, e <i>include_once</i></h2>
Existe un variante que permite evitar la expansion de un mismo archivo mas de una vez. Esto podria ser
deseable en situaciones en las que se desea cargar una libreria que a su vez carga a otras librerias

Es necesario tener presente que el interpretador generará un error y detendrá la ejecucion de un archivo
si, por ejemplo, existen dos funciones con el mismo nombre 

Sintaxis de <i>include_one</i>
include_once("funciones.php");

Sintaxis de <i>require_once</i>
require_once("funciones.php");

</pre>


		<!-- Regresar un directorio anterior ../ -->
        <a href="../../"><button>ir al índice</button></a>

	
</div>
</body>
</html>