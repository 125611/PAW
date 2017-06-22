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
        
    public function verCatalogo($REQ){
        $rubro = $REQ['rubro'] ;
        //if($rubro!=''){            
            //devuelve array de productos por rubro
            $tarea = new AdministradorModelo();
            $rta = $tarea->accion('listar', 'productos', $rubro);
            // envia el array con los productos a la vista       
            $this->setVariableVista('listaProductos', $rta);           
      //  }else{
            //si rubro es vacio hay que mostrar todos los productos!!!!!!!!!!!!!!!!!!!!!!!!!
      //  }       
            
        $this->setVariableVista('elemento', '');
        $this->setVariableVista('mostrar', 'catalogo'); 
    }
}
?>