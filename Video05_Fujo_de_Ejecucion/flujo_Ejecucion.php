<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
	//El flujo de ejecucion va de arriba a abajo.
	echo "Este es el primer mensaje <br>";
	/* Movemos la funcion a otra pagina.
	//Creacion de una función.
	function dameDatos(){
		
		echo "Este es el mensaje del interior de la función <br>";
		
	}*/
	
	include ("proporciona_Datos.php");
	
	/*NOTAS
	  =================================================
	  Diferencia entre include y require:
	  
	  En el caso de que el include diese un error porque no encontrase la página, daria el error en las lineas donde hiciese el include y en la llamada a la función, permitiendo la continuacion del programa.
	  
	  En el caso de que tuviesemos require y diese error al no encontrar la página, la ejecucion del programa se pararía en esa linea, abortando la continuación del programa.
	  
	  ====================================================
	
	
	//Llamada a la función.
	dameDatos();
	
	echo "Este es el segundo mensaje <br>";
	
?>
</body>
</html>