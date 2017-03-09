    <?php
    
        class Coche{
            
            //variables.
            var $ruedas; 
            var $color;
            var $motor;
            
            //constructor
            function Coche(){
                //this referencia a la clase.
                // -> es una referencia.
                $this->ruedas=4;
                
                $this->color="";
                
                $this->motor=1600;
            }
            
            function arrancar(){
                echo "Estoy arrancando</br>";
            }
            
            function girar(){
                echo"Estoy Girando</br>";
            }
            
            function frenar(){
                echo"Estoy frenando</br>";
            }
			
			function establece_color($nombre_coche,$color_coche){
				
				//Establecemos el color pasado por parametro.
				$this->color=$color_coche;
				echo"El color del coche $nombre_coche es: " . $this->color ."<br>";
			}
				
        
        }
        
       /* 
	   //Instancia de la clase Coche. Son llamadas al constructor. Le damos un valor inicial.
        $renault = new Coche();
        
        $mazda = new Coche();
        
        $seat = new Coche();
		
		//paso de parametros al metodo.
		$renault->establece_color("renault","Rojo");
		
		$seat->establece_color("seat","Azul");
        
        //para llamar al metodo, se usa  ->, es decir, se referencia al metodo.
        $mazda->girar();
        
        echo $mazda->ruedas;*/
	
//==============================================================================================================================================	
		
		class Camion{
            
            //variables.
            var $ruedas; 
            var $color;
            var $motor;
            
            //constructor
            function Camion(){
                //this referencia a la clase.
                // -> es una referencia.
                $this->ruedas=8;
                
                $this->color="Gris";
                
                $this->motor=2600;
            }
            
            function arrancar(){
                echo "Estoy arrancando</br>";
            }
            
            function girar(){
                echo"Estoy Girando</br>";
            }
            
            function frenar(){
                echo"Estoy frenando</br>";
            }
			
			
				
        
        }
        
       /* 
	   //Instancia de la clase Coche. Son llamadas al constructor. Le damos un valor inicial.
        $renault = new Coche();
        
        $mazda = new Coche();
        
        $seat = new Coche();
		
		//paso de parametros al metodo.
		$renault->establece_color("renault","Rojo");
		
		$seat->establece_color("seat","Azul");
        
        //para llamar al metodo, se usa  ->, es decir, se referencia al metodo.
        $mazda->girar();
        
        echo $mazda->ruedas;*/
    
    ?>