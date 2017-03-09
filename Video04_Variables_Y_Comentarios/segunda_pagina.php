<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
	$nombre = "Adrián";
	
	$edad = 24;
	
	//En php se concatena con punto
	print "El nombre del usuario es " . $nombre . "<br>"; //Imprime la variable nombre por pantalla, tambien hace lo mismo echo.
	
	//Tambien se puede hacer con:
	echo "Y su edad es de $edad años de edad";
	
	/* NOTA:
	  ================================================================
		Las comillas simples escriben el texto literal, de tal forma que:
		
		print 'La edad del usuario es $edad'; no devolveria <<La edad del usuario es 24>> sino que devolveria <<La edad del usuario es $edad>>
		
		=============================================================
		print es una funcion, devuelve siempre 1
		echo es una expresion.
		
		Generalmente se usa echo pues consume menos recursos.
	*/
?>
</body>
</html>