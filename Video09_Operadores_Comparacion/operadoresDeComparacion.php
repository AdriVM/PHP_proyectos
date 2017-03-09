<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php

	$variable1 = 8;
	$variable2 = "8";
	$variable3 = "Adri";
//=========================================================================
	// ==   Compara el valor sin importar el tipo.
	if($variable1 == $variable2){
		echo "son iguales con == <br>";
		}else{
			echo "no son iguales con ==<br>";
			}
//========================================================================	
	// ===   Compara el valor y el tipo.
	if($variable1 === $variable2){
		echo "son iguales con ===<br>";
		}else{
			echo "no son iguales con ===<br>";
			}
			
//========================================================================	
	// !=   Mira si son diferentes
	if($variable1 != $variable3){
		echo "son diferentes con !=<br>";
		}else{
			echo "son iguales con !=<br>";
			}

	
?>
</body>
</html>