<?php

require_once 'modelo/AdministradorBD.php';

class AdministradorModelo{
    
   
    public $query;
    
    public function __construct() {
        
    }
    
    
    //datos a esperar ...
    public function accion($accion, $tabla, $objeto){
        
       /* echo $accion;
            echo $tabla;
            print_r($objeto);
            */
        $adminBD = new AdministradorBD($tabla, $objeto);
        
     
        
        switch ($accion) {
                case "registrar":

                 return $adminBD->$accion($tabla, $objeto);

                 break;
             
                 
                 case "get":

                 return $adminBD->$accion($tabla, $objeto);

                 break;
                 
                 case "verificar":

                 return $adminBD->$accion($tabla, $objeto);

                 break;
                        
             
                 
                        }
        
        
    }
    
  
    
    
    
    
}