<style>
.resultado{
	color:#F00;
	font-weight:bold;
	font-size:32px;
	}
</style>
<?php 
//================================================================================
//						OPERADORES MATEMÁTICOS
//================================================================================
/*						+				SUMA
						-				RESTA
						*				MULTIPLICACIÓN
						/				DIVISIÓN
						%				MÓDULO(Devuelve el resto de una división)
					  ++ +=				INCREMENTO
					  -- -=				DECREMENTO
 =================================================================================
*/

	//Si damos al boton de enviar, mandamos los datos.
	if(isset($_POST["button"])){
		
		//Recogemos los datos de los campos y lo guardamos en variables.
		$numero1 = $_POST["num1"];
		$numero2 = $_POST["num2"];
		$operacion = $_POST["operacion"];
		
		//Pasamos las variables recogidas del html para que opere.
		calcular($numero1,$numero2,$operacion);
		
	}
	
	//Creamos la funcion calcular y le pasamos las variables recogidas del html para que opere.
	function calcular($num1,$num2,$calculo){
		
		if(!strcmp("Suma",$calculo)){
			
			/*//indicando las variables numero como globales no hace falta pasarselas a la funcion, pero hay que ponerlas en cada caso.
			global $numero1;
			global $numero2;*/
			
			echo "<p class='resultado'>El resultado de la Suma es: " . ($num1 + $num2) . "</p>";
			}
		if(!strcmp("Resta",$calculo)){
			

			/*//indicando las variables numero como globales no hace falta pasarselas a la funcion, pero hay que ponerlas en cada caso.
			global $numero1;
			global $numero2;*/
			echo "<p class='resultado'>El resultado de la Resta es: " . ($num1 - $num2) . "</p>";
			}
		if(!strcmp("Multiplicación",$calculo)){
			
			/*//indicando las variables numero como globales no hace falta pasarselas a la funcion, pero hay que ponerlas en cada caso.
			global $numero1;
			global $numero2;*/
			echo "<p class='resultado'>El resultado de la Multiplicación es: " . ($num1 * $num2) . "</p>";
			}
		if(!strcmp("División",$calculo)){
			
			/*//indicando las variables numero como globales no hace falta pasarselas a la funcion, pero hay que ponerlas en cada caso.
			global $numero1;
			global $numero2;*/
			echo "<p class='resultado'>El resultado de la División es: " . ($num1 / $num2) . "</p>";
			}
		if(!strcmp("Módulo",$calculo)){
			
			/*//indicando las variables numero como globales no hace falta pasarselas a la funcion, pero hay que ponerlas en cada caso.
			global $numero1;
			global $numero2;*/
			echo "<p class='resultado'>El resultado del Módulo es: " . ($num1 % $num2) . "</p>";
			}
		
		}

?>