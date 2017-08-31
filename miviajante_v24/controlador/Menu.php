<?php
require_once('controlador/Controlador.php');

class Menu extends Controlador{
        
    public function __construct(){
        parent::__construct();
    }
    
    public function defaultAction(){$this->mostrar($REQ);}
    
    public function mostrar($REQ){
        //$this->ponerDatosDeUsuarioEnVista();
        $this->setVariableVista('mostrar', 'home'); 
    }
    
    public function contacto($REQ){
        //$this->ponerDatosDeUsuarioEnVista();
        $this->setVariableVista('mostrar', 'contacto'); 
    }
}
?>