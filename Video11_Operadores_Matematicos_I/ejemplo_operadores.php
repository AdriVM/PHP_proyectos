<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<p>&nbsp;</p>
<form name="form1" method="post" action="ejemplo_operadores.php">
  <p>
    <label for="num1"></label>
    <input type="text" name="num1" id="num1">
    <label for="num2"></label>
    <input type="text" name="num2" id="num2">
    <label for="operacion"></label>
    <select name="operacion" id="operacion">
      <option>Suma</option>
      <option>Resta</option>
      <option>Multiplicación</option>
      <option>División</option>
      <option>Módulo</option>
    </select>
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Enviar" onClick="prueba">
  </p>
</form>
<p>&nbsp;</p>

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
		
		if(!strcmp("Suma",$operacion)){
			echo "El resultado de la Suma es: " . ($numero1 + $numero2);
			}
		if(!strcmp("Resta",$operacion)){
			echo "El resultado de la Resta es: " . ($numero1 - $numero2);
			}
		if(!strcmp("Multiplicación",$operacion)){
			echo "El resultado de la Multiplicación es: " . ($numero1 * $numero2);
			}
		if(!strcmp("División",$operacion)){
			echo "El resultado de la División es: " . ($numero1 / $numero2);
			}
		if(!strcmp("Módulo",$operacion)){
			echo "El resultado del Módulo es: " . ($numero1 % $numero2);
			}
		
		}

?>


</body>
</html>