<?php

require_once('controlador/Controlador.php');
require_once('modelo/Cliente.php');


class Productos extends Controlador{
        
    public function __construct(){
        parent::__construct();

    }
    
    public function defaultAction(){$this->mostrar($REQ);}
    
    public function mostrar($REQ){
        $this->setVariableVista('mostrar', 'productos'); 
    }
    
    public function listar($REQ){       
        $rubro = $REQ['rubro'] ;
        $tarea = new AdministradorModelo();
        $this->setVariableVista('mostrar', 'catalogo'); 
        //devuelve array de productos por rubro
        $rta = $tarea->accion('listar', 'productos', $rubro);
       // get_object_vars($prueba);
        
        $this->setVariableVista('listaProductos', $rta); 
    
    }
}
?>