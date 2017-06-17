<?php

class query{
 
    
    
    public function __construct($conexion,$sql) {  
        
           $execute = $conexion->prepare($sql);
           
           $execute->execute();
         
    }
    
  
    
 
    
    
}