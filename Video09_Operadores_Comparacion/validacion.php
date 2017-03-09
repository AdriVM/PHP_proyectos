<?php
	
	//Comprobamos si se ha pulsado el boton de enviar
	// NOTA: $_POST es una variable super global.
	if(isset($_POST["enviando"])){
		$usuario = $_POST["nombre_usuario"];
		$edad = $_POST["edad_usuario"];
		
		if($usuario == "Adrian" && $edad >= 18){
			echo "<p class='validado'>Puedes entrar</p>";
		}else{
			echo "<p class=\"no_validado\">Acceso denegado</p>";	
		}
	}

?>