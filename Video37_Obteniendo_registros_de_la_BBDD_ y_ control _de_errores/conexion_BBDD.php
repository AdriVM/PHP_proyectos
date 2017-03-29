<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Documento sin título</title>
	</head>

	<body>
		<?php
	
			$db_host = "localhost";
			$db_nombre = "pruebas";
			$db_usuario = "root";
			$db_pass = "admin1337";
			
			//=========================================================== POR PROCEDIMIENTOS ===========================================================
			
			$conexion = mysqli_connect($db_host,$db_usuario,$db_pass); //Conexion al servidor de la BBDD.
			
			//=========================================================== CONTROL DE ERRORES ===========================================================
			if(mysqli_connect_errno()){
				echo "Fallo al conectar con la BBDD.";
				exit(); //Salimos del php.
			}
			//Control de error si no encuentra la BBDD.
			mysqli_select_db($conexion,$db_nombre) or die("No se encuentra la BBDD."); // Conexion a la BBDD.
			
			//==========================================================================================================================================
			
			
			//Linea que soluciona los errores de cotejamiento. tener todo lo demas en UTF8.
				mysqli_set_charset($conexion,"utf8"); 
			
			$consulta = "SELECT * FROM DATOSPERSONALES";
			
			$resultados = mysqli_query($conexion,$consulta);
			
			while($fila = mysqli_fetch_row($resultados)){
			
			echo $fila[0] . "<br>";
			echo $fila[1] . "<br>";
			echo $fila[2] . "<br>";
			echo "<br>";
			
			}
	
		?>
	</body>
</html>