<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php 
//Las constantes en PHP se definen con la funcion define, de la siguiente forma: 			
//					define("NOMBRE_CONSTANTE",Valor);
/* NOTA: 	El valor puede ser tanto numerico como string. 
			EL NOMBRE DE LAS CONSTANTES, POR CONVENIO, DEBE IR EN MAYUSCULAS.
			LAS CONSTANTES NO DEBEN LLEVAR EL SIMBOLO $
			ES OBLIGATORIO EL USO DE DEFINE() PARA DEFINIR CONSTANTES
			EL AMBITO DE UNA CONSTANTE, POR DEFECTO ES GLOBAL
			LAS CONSTANTES NO SE PUEDEN REDEFINIR
			LAS CONSTANTES SOLO PUEDEN ALMACENAR VALORES ESCALARES, Ej: int, float, boolean, double, string, char... NUNCA UN ARRAY,DADO QUE SE PUEDE PARTIR EN FRAGMENTOS.*/

// La funcion define, puede recibir 3 parametros, aunque los dos mencionados son los obligatorios. El tercer parametro es un booleano que sirve para expecificar si queremos que sea sensible a las mayusculas o no lo sea.


	define("AUTOR","Adrian");
	
	// Imprime por pantalla el valor de la constante.
	echo AUTOR; 
	
	//Si introducimos el nombre de la constante en el string, no saca el valor como con las variables, porque no lo reconoce, saca el nombre de la constante que hayamos puesto.
	echo"<br> El nombre del autor es: AUTOR";
	
	//Imprime el valor de la constante en una cadena de texto
	echo "<br> El autor es: " . AUTOR;

//=========================================================================

	//En el caso de poner el nombre de la constante en miniscula, sin haber puesto un true, en el 3º parametro de la funcion define, saldrá un error.
	// define("AUTOR","Adrián",true);
	echo "<br> El autor en minuscula es: " . autor;
	
	//Existen constantes predefinidas en PHP, para mas informacion, visitar la pagina de PHP.net; Ejemplos: __LINE__ (muestra el numero de linea), __FILE__(muestra la ruta del fichero). 
?>
</body>
</html>