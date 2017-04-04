<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Documento sin título</title>
        
        <style>
        	table{
				width:50%;
				border:1px dotted #FF0000;
				margin:auto;
			}
			
			td{
				border-bottom:1px dotted #FF0000;
			}
			
			tr:last-child td{
				border:none;
			}
			
        </style>
        
	</head>

	<body>
		<?php
	
			require("datos_conexion.php");
			
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
			
			$consulta = "SELECT * FROM productos ORDER BY CODART";
			
			$resultados = mysqli_query($conexion,$consulta);
			
				echo "<table>";
				
			while($fila = mysqli_fetch_row($resultados)){
				
				echo "<tr>";
				
				for($i=0;$i<count($fila);$i++){
					echo "<td>" .$fila[$i] . "</td>";
					
				}
			
				echo "</tr>";
			
			}
			echo "</table>";
	
		?>
	</body>
</html>