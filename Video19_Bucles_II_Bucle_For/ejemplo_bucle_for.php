<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<style>
	.filas{
		
		margin:0 auto;
		margin-top:5px;
		border-style:solid; 
		border-color:#000; 
		background-color:#FF9; 
		width:25%;
	}
	p{
		text-align:center;
	}
	.cabecera{
		width:75%;
		margin:0 auto;
		border-style:solid; 
		border-color:#000; 
		background-color:#FF9; 
	}
		#cabecera_dividir{
		width:75%;
		margin:0 auto;
		margin-top: 10px;
		border-style:solid; 
		border-color:#000; 
		background-color:#FF9; 
	}
	.contenedor{
		margin:0 auto;
	}
</style>
<body>
    <div class="contenedor">
        <div class="cabecera">
            <p>Tabla de multiplicar del 9</p>
        </div>
        <?php 
        //==========================================================================
        //					EJEMPLO BUCLE FOR
        //==========================================================================
        // Tabla del 9
    
                for($i=0; $i<=10;$i++){ ?>
            
                <div class="filas">
                    <p><?php echo"9 x $i = " . $i*9;?></p>
                </div>
             
                <?php }?>
    </div><!-- Fin de div contenedor -->
    <div class="contenedor">
        <div id="cabecera_dividir">
            <p>Tabla de dividir del 9</p>
        </div>
        <?php 
        //==========================================================================
        //					EJEMPLO BUCLE FOR
        //==========================================================================
        // Tabla del 9
    	

                for($i=10; $i>=-10;$i--){ 
				
				if($i == 0){ ?>
                <div class="filas">
                    <p><?php 
						echo"No se puede dividir por 0.";
						?></p>
                </div>
					<?php
							
					//Continue hace que se salte este caso y continue el bucle.
					continue;
				}
					$resultado = "9 / $i = " .$i/9;
						
				
				?>
            
                <div class="filas">
                    <p><?php 
						echo $resultado;
						?></p>
                </div>
             
                <?php }?>
    </div><!-- Fin de div contenedor -->
</body>
</html>