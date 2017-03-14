<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Documento sin título</title>
  </head>

  <body>
    <?php
    	
		include("Concesionario.php");

		$compra_Antonio = new Compra_vehiculo("compacto");
		
		$compra_Antonio->climatizador();
		
		$compra_Antonio->tapiceria_cuero("blanco");
		
		echo "El precio final del coche de Antonio axciende a: " . $compra_Antonio->precio_final() . " €<br>";
//==========================================================================================================================		
		
		$compra_Ana = new Compra_vehiculo("compacto");
		
		$compra_Ana->climatizador();
		
		$compra_Ana->tapiceria_cuero("rojo");
		
		Compra_Vehiculo::plan_PIVE(); //llamamos al metodo statico desde la clase. 
		
		echo "El precio final del coche de Ana asciende a: " . $compra_Ana->precio_final() . " €<br>";
		 
    ?>
  </body>
</html>