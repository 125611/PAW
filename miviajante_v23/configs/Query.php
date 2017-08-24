<?php

class query{
 
    private $sql;
    private $conexion;
    
    public function __construct($conexion,$sql) {  
       $this->sql = $sql ;
       $this->conexion = $conexion;
       
       
    }
    
  
    public function prepareAndExecute(){
                
           // echo $this->sql;
           $bd = $this->conexion->prepare($this->sql);
           
                    
           $bd->execute();
                     	
           
           return $bd ;
        
    }
 
    
    
}