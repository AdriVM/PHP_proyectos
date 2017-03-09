<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php 
//================================================================================================================================
//									OPERADORES	LOGICOS
//================================================================================================================================
/*
								&&					Y LOGICO
								AND					Y LOGICO
								||					O LOGICO
								OR					O LOGICO
								XOR					O EXCLUSIVO
								!					NEGACION(NOT)
//===============================================================================================================================
						
						* Hay operadores que quieren decir lo mismo a priori, pero no es asi. Existe una diferenciacion fundamental en la prioridad de la condicion.
						
*/


			$var1 = true;
			$var2 = false;
			$resultado = $var1 && $var2; //$resultado = false; Debido a que && tiene prioridad frente a = obliga a que amgos sean true, para guardar true en $resultado.
			
			if($resultado == true){
				echo "Correcto";
			}else{
				echo "Incorrecto"; //Sale Incorrecto
			}
			
			$resultado1 = $var1 and $var2; //$resultado = true; Debido a que AND no tiene prioridad sobre =, primero se hace el $resultado1 = $var1 y luego el and $var2;. Por lo que $resultado1 = $var1 = true.
			
			if($resultado1 == true){
				echo "<br>Correcto1"; //Sale Correcto1
			}else{
				echo "<br>Incorrecto1";
			}
			
?>

</body>
</html>