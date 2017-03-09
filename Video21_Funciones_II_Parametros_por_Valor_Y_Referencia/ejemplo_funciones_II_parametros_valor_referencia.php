<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php 
//===================================================================================================================================
//										PARAMETROS POR VALOR Y REFERENCIA
//===================================================================================================================================
/*													SINTAXIS
					-------------------------------------------------------------------
								VALOR									REFERENCIA
						Function ejemplo($param){				Function ejemplo(&$param){
							$param++;								$param++;
						}										}
							
*/
		//Funcion por valor
			function incrementa($num){
				$num++;
				
				return $num;
			}
			
			$numero = 5;
			echo "============================================================================= <br>";
			echo "POR VALOR <br>";
			echo "============================================================================= <br>";
			echo incrementa($numero) . "<br>";
			
			echo $numero . "<br>";
			
			
		//Funcion por referencia, la referencia enlaza con la variable original, de tal manera que al incrementarse $num, tambien se incrementa $numero.
			function incrementa1(&$num){
				$num++;
				
				return $num;
			}
			
			$numero = 5;
			
			echo "============================================================================= <br>";
			echo "POR REFERENCIA <br>";
			echo "============================================================================= <br>";
			echo incrementa1($numero) . "<br>";
			
			echo $numero. "<br>";
?>
</body>
</html>