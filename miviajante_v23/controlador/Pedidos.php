<?php

require_once('controlador/Controlador.php');
require_once('modelo/Pedido.php');
require_once('modelo/Descripcion.php');

class Pedidos extends Controlador{
        
    public function __construct(){
        parent::__construct();

    }
    
    public function defaultAction(){$this->mostrar($REQ);}
    
    public function mostrar($REQ){
        $this->setVariableVista('mostrar', 'pedido'); 
    }
    
    public function listar($REQ){        
        $tarea = new AdministradorModelo();
        //$this->setVariableVista('mostrar', 'pedido'); 
        //devuelve array de pedidos por id
        $rta = $tarea->accion('listar', 'pedidos', $_SESSION['id']);
        
        if (empty($rta)){
            $this->setVariableVista('alerta', 'No tienes ningún pedido');
            $this->setVariableVista('mensaje', '');
            $this->setVariableVista('mostrar', 'pedido');
        }else{  
        $this->setVariableVista('alerta', '');
        $this->setVariableVista('mensaje', '');
        $this->setVariableVista('listaPedidos', $rta);
        $this->setVariableVista('mostrar', 'pedido');
        }
       // $this->setVariableVista('listaPedidos', $rta); 
    }
}
?>