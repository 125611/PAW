<?php
require_once('controlador/Controlador.php');


class Catalogo extends Controlador{
        
    public function __construct(){
        parent::__construct();

    }
    
    public function defaultAction(){$this->mostrar($REQ);}
    
    public function mostrar($REQ){
        $this->ponerDatosDeUsuarioEnVista();
        $this->setVariableVista('mostrar', 'catalogo'); 
    }
    
    //public function ponerDatosDeUsuarioEnVista(){}
}
?>