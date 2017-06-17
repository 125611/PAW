<?php

require_once('configs/ConectarDB.php');

class AdministradorModelo{
    
    public $conexion;
    public $query;
    
    public function __construct() {
        echo "conectando.." ;
       $this->conexion = (new ConectarDB())->start();
       echo "conectado !!";
        
    }
    
    
    //datos a esperar ...
    public function accion(){
        return false;
        
    }
    
    public function query($sql){
        
       new query(($this->conexion), $sql);
        
    }
    
    
    
    
    
}