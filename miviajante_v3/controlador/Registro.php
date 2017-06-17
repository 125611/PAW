<?php
require_once('controlador/controlador.php');
include('vista/VistaHtml.php');

class Registro extends Controlador{
        
    public function __construct(){
        parent::__construct();

    }
    
    public function defaultAction(){$this->mostrar();}
    
    public function mostrar(){
        $this->setVariableVista('mostrar', 'registro'); 

    }
}
?>