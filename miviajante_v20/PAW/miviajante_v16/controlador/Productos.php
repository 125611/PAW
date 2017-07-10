<?php

require_once('controlador/Controlador.php');
require_once('modelo/Cliente.php');


class Productos extends Controlador{
        
    public function __construct(){
        parent::__construct();

    }
    
    public function defaultAction(){$this->mostrar($REQ);}
    
    public function mostrar($REQ){
        $this->setVariableVista('mostrar', 'catalogo'); 
    }
        
    public function verCatalogo($REQ){
        if(isset ($REQ['rubro'])){
            $rubro = $REQ['rubro'];
        }else{
            $rubro = '';
        }
        $tarea = new AdministradorModelo();
        $rta = $tarea->accion('listar', 'productos', $rubro);
        // envia el array con los productos a la vista       
        $this->setVariableVista('listaProductos', $rta);                 
            
        $this->setVariableVista('elemento', '');
        $this->setVariableVista('mostrar', 'catalogo'); 
    }
}
?>