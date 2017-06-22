<?php

require_once 'modelo/AdministradorBD.php';

class AdministradorModelo{
    
   
    public $query;
    
    public function __construct() {
        
    }
    
    
    //datos a esperar ...
    public function accion($accion, $tabla, $objeto){
        
       
        
        $adminBD = new AdministradorBD($tabla, $objeto);
      
        return $adminBD->$accion();

                 
        
        
    }
    
  
    
    
    
    
}