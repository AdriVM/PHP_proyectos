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
	echo"================================================================== <br>";
		//Forma2: 
	$dia = array("Lunes","Martes","Miercoles");
	echo $dia[0] . "<br>";
	
	//Array Asociativo
	$datos = array("Nombre"=>"Juan","Apellido"=>"Gomez","Edad"=>21);
	echo $datos["Apellido"] . "<br>";
	echo"================================================================== <br>";
//===============================================================================================================================
	
	//PROPBLEMA: Al llamarse igual, la variable datos, sobreescribe la Array!
	$datos = array("Nombre"=>"Juan","Apellido"=>"Gomez","Edad"=>21);
	$datos = "Panocho";
	// Funcion isArray nos indica si la variable es una variabloe o un array. Devuelve un booleano.
	if(is_array($datos)){
		echo "Es un jodido Array tio!" . "<br>";
		echo $datos["Nombre"];
	}else{
		echo "Es una puta variable tron!" . "<br>";
		echo $datos . "<br>";
	}
	echo"================================================================== <br>";
//================================================================================================================================
	
	//Recorrer el Array
	
	
		//Array Asociativo.
	$persona = array("Nombre"=>"Juan","Apellido"=>"Gomez","Edad"=>21);
	
	// NOTA: Si en vez de ponerle el $indice y referenciarlo al $valor, le ponemos directamente $valor, coge directamente el valor sin la necesidad de la clave. 
	foreach($persona as $indice=>$valor){
		echo "A $indice le corresponde el valor: $valor <br>";
	}
	echo"================================================================== <br>";
	
		//Array Indexado:
	
	$mes[] = "Enero";
	$mes[] = "Febrero";
	$mes[] = "Marzo";
	$mes[] = "Abril";
	$mes[] = "Mayo";
	$mes[] = "Junio";
	$mes[] = "Julio";
	$mes[] = "Agosto";
	$mes[] = "Septiembre";
	$mes[] = "Octubre";
	$mes[] = "Noviembre";
	$mes[] = "Diciembre";
	
	for($i=0;$i<count($mes);$i++){
		echo $mes[$i] . "<br>";
	}
	echo"================================================================== <br>";	
//================================================================================================================================

	//Agregar elemento en array asociativo:
	
	$persona["Pais"] = "España";
	
	// NOTA: Si en vez de ponerle el $indice y referenciarlo al $valor, le ponemos directamente $valor, coge directamente el valor sin la necesidad de la clave. 
	foreach($persona as $indice=>$valor){
		echo "A $indice le corresponde el valor: $valor <br>";
	}
	echo"================================================================== <br>";
//================================================================================================================================
	
	//Ordenacion: 

	
	//La funcion sort ordena alfabeticamente.
	sort($mes);
	
	for($i=0;$i<count($mes);$i++){
		echo $mes[$i] . "<br>";
	}
	echo"================================================================== <br>";	
//================================================================================================================================
	
?>
</body>
</html>