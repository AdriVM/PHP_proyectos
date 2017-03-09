<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

<style>
	.resaltar{
		color:#F00;
		font-weight:bold;
	}
</style>

</head>

<body>
<?php
	
	//Se mete comilla doble en el class porque la comilla doble no vale a menos que se escape la comilla, aunque en este caso, con la simple vale.
	echo "<p class='resaltar'>Esto es un ejemplo de frase</p>";
	
	//Otro caso valido, invirtiendo comillas.
	echo '<p class="resaltar">Esto es otro caso con las comillas inversas</p>';
	
	//Caso escapando comillas.
	echo "<p class=\"resaltar\">Esto es un ejemplo con las comillas escapadas</p>";
	
	
	$nombre = "Adri";
	echo "Hola $nombre <br>"; //Funciona sin concatenar, siempre y cuando esté entre comillas dobles, si es comilla simpre lo toma literal no como variable.



//========================================================================
/*Ejemplos de comparacion de strings:

	* strcmp : 		Compara valores de tipo string, teniendo en cuenta la
			   		distincion entre mayusculas y minusculas
	
	* strcasecmp: 	Compara 2 strings ignorando las mayusculas y las
					minusculas.


	> Ambas funciones devuelven un 0 si son iguales  y un 1 si los valores
	  string no coinciden.
===========================================================================
*/

//Ejemplos: 
	
	$variable1 = "casa";
	$variable2 = "Casa";
	$resultado = strcmp($variable1,$variable2); //Devuelve 1 si no son iguales
	$resultado2 = strcasecmp($variable1,$variable2);
	if($resultado == 1){
		echo "Los resultados son distintos.";
	} else if($resultado == 0){
			echo"Los resultados son iguales";
			}
 
?>

</body>
</html>