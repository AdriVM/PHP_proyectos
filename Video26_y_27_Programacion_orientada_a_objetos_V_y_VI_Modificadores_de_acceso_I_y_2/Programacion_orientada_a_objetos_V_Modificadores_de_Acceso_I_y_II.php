<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Documento sin título</title>
  </head>

  <body>
    <?php
    	
		include("vehiculos.php");
		
		$mazda = new Coche();
		$pegaso = new Camion();
		
		
		
		echo "El mazda tiene " . $mazda->get_ruedas() . " ruedas <br>";
		echo "El pegaso tiene " . $pegaso->get_ruedas() . " ruedas <br>";
		echo "El Mazda tiene un motor de " . $mazda->get_motor() . " CV <br>";
		
		//metodo heredado de coche.
		$pegaso->frenar(); 
		
		$pegaso->set_color("Pegaso","Gris");
		
		$pegaso->arrancar();
		
    ?>
  </body>
</html>