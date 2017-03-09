<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Documento sin título</title>
  </head>

  <body>
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
        
        }
        
        //Instancia de la clase Coche. Son llamadas al constructor. Le damos un valor inicial.
        $renault = new Coche();
        
        $mazda = new Coche();
        
        $seat = new Coche();
        
        //para llamar al metodo, se usa  ->, es decir, se referencia al metodo.
        $mazda->girar();
        
        echo $mazda->ruedas;
    
    ?>
  </body>
</html>