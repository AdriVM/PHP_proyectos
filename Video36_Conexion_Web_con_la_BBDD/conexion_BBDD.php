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
			
			$conexion = mysqli_connect($db_host,$db_usuario,$db_pass,$db_nombre);
			
			//Linea que soluciona los errores de cotejamiento. tener todo lo demas en UTF8.
				mysqli_set_charset($conexion,"utf8"); 
			
			$consulta = "SELECT * FROM DATOSPERSONALES";
			
			$resultados = mysqli_query($conexion,$consulta);
			
			$fila = mysqli_fetch_row($resultados);
			
			echo $fila[0] . "<br>";
			echo $fila[1] . "<br>";
			echo $fila[2] . "<br>";
			
	
	
		?>
	</body>
</html>