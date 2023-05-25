<!DOCTYPE html>
<html>
<head>
        <title>Estructura de PHP</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="/php_desde_0/style.css">
</head>
<body>


<div class = "p_h_p">
        <h1>Estructura General de un programa en <i>PHP</i></h1>
        <pre>
        Etiquetas de inicio y fin de una seccion de codigo <i>PHP</i>
        Toda seccion de la pagina que contenga etiquetas <i>PHP</i> debe comenzar 
        con < ?php  y terminar con  ? >.
        
        Otra posiblidad valida es usar < script language="php"> </ script >  
        tambien existen otras alternativas menos recomendables como <? y ?>
             
        <h3>Separacion de los comandos</h3>
        Una seccion de codigo <i>PHP</i> es una secuencia de uno o mas comandos 
        o llamadas a funciones separados por punto y coma
        Ademas, dos o mas comandos <i>PHP</i> pueden ser agrupados en un 
        bloque usando los caracteres <i>{</i> y <i>}</i>
        
        <h3>Comentarios </h3>
        Existen dos maneras de escribir <i>Comentarios</i>
        Para escribir un comentario de una sola linea solo hay que escribir 
        dos barras oblicuas consecutivas //a continuacion de las cuales, todo 
        lo que se escriba hasta finalizar la linea se considerara un comentario
        
        
        Para escribir comentario de mas de una <i>linea</i> hay que utilizar el <i>delimitador /*</i>, el 
        cual hara que todas las lineas escritas a partir de el sean consideradas comentarios 
        hasta la aparicion de delimitador de cierre
                
        //esto es un comentario 
    
        <h3>Ejemplo basico de declaracion de variables </h3>

        <b>$i</b> = 5; //estos comentarios no afectan
        <b>$j</b> = 8; //la instruccion de la izquierda
        <b>$K</b> = 9;
        <b>$m</b> = $i + $j + $k;
        echo "esta es una funcion para impirmir en pantalla";

       
       <pre>
        <?php 
        $i = 5; //estos comentarios no afectan<br>
        $j = 8; //la instruccion de la izquierda
        $k = 9;
        $m = $i + $j + $k;

        echo "el valor de i es:  ". $i."<br>";
        echo "el valor de j es:  ". $j."<br>";
        echo "el valor de k es:  ". $k."<br>";
        echo "el valor de m es:  ". $m."<br>";

        ?></pre>    
       

        <h3>Variables</h3>
        Una <i>variable</i> es un nombre usado dentro del lenguaje para referenciar un cierto contenido
        este llamado contenido de la variable puede ser un valor simple o puede tener una cierta estructura
        
        Las variables, de nuevo dependiendo de las especificaciones del lenguaje, podrian requerir 
        de una declaracion antes de ser usadas y por lo general,esta preparadas para recibir solo 
        un cierto tipo de informacion
       
        <i>PHP</i> ofrece un manejo de variables muy flexible y a la vez muy poderoso.
        Los tipos de dato son facilmente intercambiables y la declaracion de variables no es 
        necesaria ademas, algunos operadores han sido añadidos al lenguaje para que el usuario 
        pueda decidir por si mismo cuando tomar en cuenta el tipo de los datos y cuando no


        <h3>Reglas que debe cumplir el nombre de una variable</h3>
        Toda <i>variable</i> debe comenzar con el simbolo de dolar <i>$</i>
        El primer caracter del nombre de una variable puede ser cualquier letra o el 
        llamado guion bajo.El resto de los caracteres del nombre pueden ser letras,numeros o guiones bajos </b>


        Los nombres de las variables en <i>PHP</i> son <i>sensibles</i> a <i>mayusculas</i> y <i>minusculas</i>, 
        es decir que las variables
        <i>$sueldo</i> y <i>$Sueldo</i> son distintas

        <h3>Tipos de dato</h3>
        Cualquier variable en <i><i>PHP</i></i> puede ser asignada con datos de cualquier tipo.
        Mas aun, una variable de un tipo puede cambiar a otro sin ningun problema,
        esta flexibilidad trae consigo muchas ventajas pero tambien podria inducir a errores

        <h3>Los principales tipos de dato son:</h3>
    <i>1 Entero(o integer):</i>  &nbsp   permite almacenar numeros enteros positivos o negativos
     <i>2 Texto(o string):</i>  &nbsp   permite almacenar palabras,frases o cualquier secuencia de caracteres
      <i>3 Logico(o boolean):</i>   &nbsp permite almacenar solo dos tipos de valores: verdadero o falso
       <i>4 Punto Flotante(o float):</i> &nbsp  permite guardar numeros con decimales
        <i>5 Arreglos(o arrays):</i>  &nbsp   que actuan como colecciones de variables de cualquier tipo
         <i>6 Objetos:</i>      &nbsp   que son tipos estructurados que pueden contener incluso sus propios programas
          <i>7 Null:</i>       &nbsp      que es el contenido de cualquier variable si no se le ha asignado ningun valor




        <h3>Alcance de Variables</h3>
        Este es otro concepto que iremos aclarando a medida que vayamos adentrandonos en 
        otras partes del lenguaje
        Sin embargo podemos mencionar que las variables definidas de una pagina, 
        existen solo en esa pagina

        <h3>Asignandole contenido a una variable</h3>
        para darle valor a una variable debemos usar el llamado operador de 
        <b>asignacion ( = )</b>, que en <i>PHP</i> es el signo de igual

        Ejemplo:

        //como asignar un valor numerico 
        $valor_numerico = 25; 
        //como asignar un texto 
        $valor_textual = " if luck is a lady, my heart was broken " 


<?php
        //como asignar un valor numerico
        $valor_numerico = 25;
                    echo "<br>Este es el valor de la variable <b>valor_numerico</b> es: ", $valor_numerico;
        //como asignar un texto
        $valor_textual = "if luck is a lady, my heart was broken";
        echo "<br>Este es el valor de la variable <b>valor_textual</b> es: ", $valor_textual;
?>

       


</pre>


        <!-- Regresar un directorio anterior ../ -->
        <a href="../../"><button>ir al índice</button></a>

</div>       
</body>
</html>






