<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php 
	
	$alimentos = array("fruta"=>array("tropical"=>"kiwi",
									  "citrico"=>"naranja",
									  "otros"=>"manzana"
									  ),
					   "leche"=>array("animal"=>"vaca",
					   				  "vegetal"=>"coco"
									  ),
					   "carne"=>array("porcino"=>"lomo",
					   				  "vacuno"=>"solomillo"
									  )
				);
	//echo $alimentos["carne"]["porcino"];
	//=================================================================================
	//funcion list crea un listado.
	foreach($alimentos as $indice_alim=>$valor_alim){
		
		echo "$indice_alim: <br>";
		
		//Mientras haya elementos en la lista, va 
		while(list($indice,$valor) = each($valor_alim)){
			echo"$indice=$valor <br>";
		}
		echo "<br>";
	}
	echo"=======================================================================";
	//=================================================================================
	var_dump($alimentos);
	
?>
</body>
</html>