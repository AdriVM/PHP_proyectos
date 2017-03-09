<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style>
	h1{
		text-align:center;
	}
	table{
		background-color:#FF9;
		padding:5px;
		border: #666 5px solid;
	}
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	.validado{
		font-size:18px;
		color: #0C3;
		font-weight:bold;
	}
	
	
</style>
</head>

<body>
<h1>USANDO OPERADORES DE COMPARACIÓN</h1>

<form action="../../../Curso PHP/validacion_condicionales.php" method="post" name="datos_usuario" id="datos_usuario">
	<table width="15%" align="center">
    	<tr>
        	<td>
            	Nombre
            </td>
            <td>
            	<label for="nombre_usuario"></label>
            	<input type="text" name="nombre_usuario" id="nombre_usuario"/>
            </td>
        </tr>
        <tr>
        	<td>
            	Edad
            </td>
            <td>
            	<label for="edad_usuario"></label>
            	<input type="text" name="edad_usuario" id="edad_usuario"/>
            </td>
        </tr>
        <tr>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
        <tr>
        	<td colspan="2" align="center">
            	<input type="submit" name="enviando" id="enviando" value="Enviar" />
            </td>
        </tr>
    </table>
</form>

<?php
	/* Nos lo llevamos al archivo validacion.php, por lo que tenemos que poner en el action del form, la pagina php que tiene la validacion.
	
	
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
*/
?>

</body>
</html>