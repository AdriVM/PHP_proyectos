<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php
	
	// rand() devuelve un numero aleatorio, puede pasarsele un minimo y un maximo (en ese orden) para acotar. Mas info en http://php.net/manual/es/ref.math.php
	$num1 = rand();
	
	echo"El número es: " . $num1;
	
	//Ejemplo aleatorio acotado.
	$num2 = rand(10,50);
	
	echo "<br>El numero aleatorio entre 10 y 50 es: " . $num2;	
	
	//Ejemplo de potencia.
	$num3 = pow(5,3);
	
	echo "<br>El numero resultante de la potencia de 5 elevado a 3 es de: " . $num3; 
	
	//Elemplo de redondeo. El segundo argumento indica los decimales con los que se redondea, es opcional y por defecto redondea a entero, por lo que su valor es 0.
	$num4 = round(5.575321);
	
	//$num4 = round(5.575321,3); //Redondea con 3 decimales
	
	echo "<br>El redondeo del numero 5.575321 es: " . $num4;
//=======================================================================================================================================================================
//																CASTING
//=======================================================================================================================================================================
/*
					* PHP contiene un casting implicito, de tal manera que: 
						
						$num1 = "5";
						
						$num1 += 2;
						
						$num1 + 5.75;
					
					En la primera linea, PHP toma a la variable como un string.
					En la segunda linea, hace una comversion del string a entero y le suma 2.
					En la tercera linea, PHP toma la variable $num1, que es entero, y lo comvierte a float para sumarle 5.75.
					
					
					* En ocasiones nos veremos obligados a hace Casting explicitos, de tal manera que:
						
						$num1 = "5";
						
						$resultado = (int)$num1;
						
					En la primera linea, PHP toma a la variable como un string.
					En la segunda linea, debemos guradar en $resultado, un entero. 
						Por lo que si pusiesemos  $resultado = $num1;, $resultado, seria una variable string.
						De la manera señalada en la segunda linea, obligamos la comversion de $num1 a entero.
*/
	
 ?>
</body>
</html>