<?php
//===============================================================================================
//						SWITCH - CASE
//===============================================================================================


	if(isset($_POST["enviando"])){
		
		
		
// En este ejemplo, daremos de alta a 3 usuarios: Adri, Maria,Pepe y sus respectivas contraseñas
		
		$nombre = $_POST["nombre_usuario"];
		$pass = $_POST["pass_usuario"];
		
		switch(true){ // true si hay varias sentencias a mirar.
			
			case $nombre == "Adri" && $pass == "1234":
				echo "Usuario autorizado. Hola $nombre";
			break;
			case $nombre == "Maria" && $pass == "1111":
				echo "Usuario autorizado. Hola $nombre";
			break;
			case $nombre == "Pepe" && $pass == "2222":
				echo "Usuario autorizado. Hola $nombre";
			break;
			default:
				echo "Usuario no Autorizado.";
		}
		
		/* Tambien vale asi sin llaves
		switch($nombre):
			
			case "Adri" && $pass == "1234":
				echo "Usuario autorizado. Hola $nombre";
			break;
			case "Maria" && $pass == "1111":
				echo "Usuario autorizado. Hola $nombre";
			break;
			case "Pepe" && $pass == "2222":
				echo "Usuario autorizado. Hola $nombre";
			break;
			default:
				echo "Usuario no Autorizado.";
		endswitch;
		*/
		
	}
?>