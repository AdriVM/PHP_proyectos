<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php 
	
	//Array indexado
		//Forma1: Se pueden poner o no los indices.
	$semana[] = "Lunes";
	$semana[] = "Martes";
	$semana[] = "Miércoles";
	echo $semana[1] . "<br>";
	
		//Forma2: 
	$dia = array("Lunes","Martes","Miercoles");
	echo $dia[0] . "<br>";
	
	//Array Asociativo
	$datos = array("Nombre"=>"Juan","Apellido"=>"Gomez","Edad"=>21);
	echo $datos["Apellido"] . "<br>";
	
	
?>
</body>
</html>