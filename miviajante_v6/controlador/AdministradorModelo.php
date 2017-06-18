<?php

require_once 'modelo/AdministradorBD.php';

class AdministradorModelo{
    
   
    public $query;
    
    public function __construct() {
        
    }
    
    
    //datos a esperar ...
    public function accion($accion, $tabla, $objeto){
        
            
        $adminBD = new AdministradorBD($tabla, $objeto);
        
     
        
        switch ($accion) {
                case "registrar":

                 return $adminBD->registrar($tabla, $objeto);

                 break;
                 
                 case "verificar":

                 return $adminBD->verificar($tabla, $objeto);

                 break;
                        
             
                 
                        }
        
        
    }
    
  
    
    
    
    
}