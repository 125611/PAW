<?php

require_once('controlador/Controlador.php');
require_once('modelo/Cliente.php');


class Pruducto extends Controlador{
        
    public function __construct(){
        parent::__construct();

    }
    
    public function defaultAction(){$this->mostrar($REQ);}
    
    public function mostrar($REQ){
        $this->setVariableVista('mostrar', 'productos'); 
    }
    
    public function listar($REQ){
        
        //TRAER EL VALOR ACA!!!!!
        $rubro = ($REQ['rubro']);
        
        $tarea = new AdministradorModelo();
        
        //devuelve array de productos por rubro
        $rta = $tarea->accion('listar', 'productos', $rubro);
       
    }
}
?>