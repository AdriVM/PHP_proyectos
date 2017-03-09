<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
	
	$nombre = "Adrian";
	
	function dameNombre(){
		
		global $nombre; // con esto cambiamos el ambito, indicando que nos referimos a la variable global nombre. Debe ir SIEMPRE dentro de la funcion, fuera no funciona.
		
		$nombre ="El nombre es " . $nombre;
	
	}
	
	//include ("datos_Otros.php");
	
	dameNombre();
	
	echo $nombre; // Sale Adrian porque la funcion no puede acceder a la variable nombre, lo que hace es crear otra dentro, no modificarla, pero como rampoco puede mostrarse fuera de la funcion, pues se muestra Adrian.



?>

</body>
</html>