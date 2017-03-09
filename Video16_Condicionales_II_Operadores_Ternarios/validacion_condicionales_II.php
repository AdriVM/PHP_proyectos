<?php
//===============================================================================================
//						OPERDAORES TERNARIOS
//===============================================================================================
/*					Sintaxis:		Condicion ? Valor si verdadero : Valor si falso
//==============================================================================================
*/

	if(isset($_POST["enviando"])){
		
		$edad = $_POST["edad_usuario"];
		
		/*if($edad < 18){
			echo "Eres menor de edad, Acceso Denegado.";
		}else{
			echo "Acceso permitido, bienvenido.";
		}*/
		
		echo $edad < 18 ? "Eres menor de edad, acceso denegado" : "Acceso permitido, bienvenido.";
		/*
		//Se puede guardar el resultado del operador terciario en una variable: 
		$resultado = $edad < 18 ? "Eres menor de edad, acceso denegado" : "Acceso permitido, bienvenido.";
		echo $resultado;
		*/
//==============================================================================================
//		En el siguiente ejemplo, deben coincidir tanto el nombre de usuario como la contraseña: 
//			NOTA: En el $_POST, se recoge el NAME, NO el ID.		
		
		$nombre = $_POST["nombre_usuario"];
		$pass = $_POST["pass_usuario"];
		
		echo $nombre == "adri" && $pass == "123" ? "<br>Bienvenido $nombre." : "<br>Error en usuario o Contraseña.";
	}

?>