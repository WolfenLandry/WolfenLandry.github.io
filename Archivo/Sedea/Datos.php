
<<?php  ?>


<!DOCTYPE html>
<html>
<head>
	<title>Productividad Agropecuaria Sustentable</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>


	<p>Folio de Autorizacion</p> <input type="text" name="FolioAutorizacion">
	<p>Folio Impreso</p> <input type="text" name="FolioImpreso">


	<h2>Datos de la Ventanilla Receptora</h2>
	<p>Direccion Regional</p> <input type="text" name="DirRegional">
	
	<p>Selecciona el Municipio</p>
	 <Select name="Municipio">
		<option value="Amealco de Bonfil">Amealco de Bonfil</option>
		<option value="Arroyo Seco">Arroyo Seco</option>
		<option></option>
	</Select>
	
		<script>
			function FormularioDesplegableF(){
			mostrar = new XMLHttpRequest();
			mostrar.open('GET','Personas/personaFisica.php',true);
			mostrar.send();
			mostrar.onreadystatechange = function(){
				if (mostrar.readyState == 4 && mostrar.status == 200) {
					document.getElementById('PersonaF').innerHTML = mostrar.responseText;
					}
				}	
			}
		</script>

		<h2>Solicitante Persona Fisica</h2>
		<button class="" onclick="FormularioDesplegableF()">Persona Fisica</button>


	
	
	<p id="PersonaF"></p>


 
<a href="Personas/personaFisica.php"> <button>Persona Fisica</button> </a> 
<a href="Personas/personaMoral.php"><button> Persona Moral</button> </a>
	<script>
			function FormularioDesplegableM(){
			mostrar = new XMLHttpRequest();
			mostrar.open('GET','Personas/personaMoral.php',true);
			mostrar.send();
			mostrar.onreadystatechange = function(){
				if (mostrar.readyState == 4 && mostrar.status == 200) {
					document.getElementById('PersonaM').innerHTML = mostrar.responseText;
					}
				}	
			}
		</script>

		<h2>Solicitante Persona Moral</h2>
		<button class="" onclick="FormularioDesplegableM()">Persona Moral</button>
   
   <p id="PersonaM"></p>
   



</body>
</html>