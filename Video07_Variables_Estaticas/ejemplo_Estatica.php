<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php
	
	function incrementaVariable(){
		
		static $contador = 0; // Con static se conserva la variable, no se destruye, incrementandose cada vez que se llama a la funcion.
		
		$contador++;
		
		echo $contador . "<br>";	
	
	}
	
	incrementaVariable();
	incrementaVariable();
	
	incrementaVariable();
	incrementaVariable();
	

?>

</body>
</html>