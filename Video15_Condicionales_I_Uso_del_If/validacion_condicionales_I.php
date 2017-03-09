<?php

	if(isset($_POST["enviando"])){
		
		$edad = $_POST["edad_usuario"];
		
		if($edad <= 18){
			echo "Eres menor de edad, Acceso Denegado.";
		}else if($edad <= 40){
			echo "Eres jóven.";
		}else if($edad <= 65){
			echo "Eres maduro como una perita en dulce.";
		}else{
			echo "Cuídate :D";	
		}	
	}

?>