<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
//===============================================================================================================
//										FUNCIONES PREDEFINIDAS EN PHP
//===============================================================================================================
//					* Para más información, visitar http://php.net/manual/es/indexes.functions.php

	echo strtolower("ACABARAMOS ESTO ESTABA EN MAYUSCULA!!! <br>");
	echo ucwords("pone cada primera letra de palabra de una frase en mayucula <br>");
//===============================================================================================================


//===============================================================================================================
//										FUNCIONES PROPIAS EN PHP
//===============================================================================================================
	
		function suma($num1, $num2){
			
			$resultado = $num1 + $num2;
			
			return $resultado;
		}
		
		echo "La suma de 125 y 521 es = " . suma(125,521). "<br>";
//===============================================================================================================

		
		function frase_mayus($frase,$conversion = true){
				
			$frase = strtolower($frase);
			
			if($conversion == true){
				$resultado = ucwords($frase);
			}else{
				$resultado = strtoupper($frase);
			}
			
			return $resultado;
		}

		echo(frase_mayus("esto es una frase de prueba. <br>"));
		
		echo(frase_mayus("esto es una frase de prueba. <br>",false));

?>
</body>
</html>