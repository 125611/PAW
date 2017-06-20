<?php
require_once 'controlador/Controlador.php';


class PedidoNuevo extends Controlador{
        
    public function __construct(){
        parent::__construct();

    }
    
    public function defaultAction(){$this->mostrar($REQ);}
    
    public function mostrar($REQ){
        $this->ponerDatosDeUsuarioEnVista(); 
        $this->setVariableVista('mostrar', 'pedido_nuevo');
    }
    
    //public function ponerDatosDeUsuarioEnVista(){}
}
?>