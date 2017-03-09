<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php 
	
		$var1 = 1;
//============================================================================================
//						EJEMPLO WHILE
//============================================================================================	
		while($var1 < 6){
			
			echo "Hola, soy la variable: $var1 <br>";
			
			$var1++;
		}
		
		echo "Vaya, parece que la variable ya no es < a 6 -.-¡<br>";
		
//============================================================================================
//						EJEMPLO DO-WHILE
//============================================================================================
//			* En el bucle do-while, siempre se ejeguta una vez aunque no se cumpla la condición, ejemplo: 
		echo"============================================================================<br>";
		
		$var2 = 7;
		
		do{
			echo "Hola, soy la variable: $var2 del bucle do-while <br>";
			
			$var2++;
		}while($var2 < 6);
		
		echo "Vaya, parece que la variable ya no es < a 6 -.-¡";
		
		// Si volvemos a poner $var2 = 1, nos devolverá lo mismo que el bucle while.
?>
</body>
</html>