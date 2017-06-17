<?php

require_once 'configs/ConectarDB.php';
require_once 'configs/Query.php';
require_once 'modelo/AltaBD.php';
require_once 'modelo/GetBD.php';

class AdministradorModelo{
    
    public $conexion;
    public $query;
    
    public function __construct() {
        
        $this->conexion = (new ConectarDB())->start();
       
        
    }
    
    
    //datos a esperar ...
    public function accion($accion, $tabla, $objeto){
  
        
      
        
      //  $alta = new AltaBD();
        
        $get = new GetBD();
              
        
        $sql = $get->get_clientes();

 
        $r = $this->query($sql);
        
        
       foreach($r as $row){
	
		$id = $row['ID'];
      
                 echo $id ;
       }
  
   
        
        
    }
    
   public function query($sql){
    
            $bd = new query(($this->conexion), $sql);
           
            
            $respuesta = $bd->prepareAndExecute();
            

        return $respuesta ;
        
    } 
    
    
    
    
    
}