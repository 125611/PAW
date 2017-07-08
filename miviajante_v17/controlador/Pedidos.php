<?php

require_once('controlador/Controlador.php');
require_once('modelo/Pedido.php');


class Pedidos extends Controlador{
        
    public function __construct(){
        parent::__construct();

    }
    
    public function defaultAction(){$this->mostrar($REQ);}
    
    public function mostrar($REQ){
        $this->setVariableVista('mostrar', 'pedido'); 
    }
    
    public function listar($REQ){
       
        $id = $_SESSION['id'];
        
        $tarea = new AdministradorModelo();
        //$this->setVariableVista('mostrar', 'pedido'); 
        //devuelve array de pedidos por id
        $rta = $tarea->accion('listar', 'pedidos', $id);
        
        if (empty($rta)){
            $this->setVariableVista('alerta', 'No tienes ningún pedido');
            $this->setVariableVista('mostrar', 'pedido');
        }else{  
        $this->setVariableVista('alerta', '');
        $this->setVariableVista('listaPedidos', $rta);
        $this->setVariableVista('mostrar', 'pedido');
        }
       // $this->setVariableVista('listaPedidos', $rta); 
    }
    
    public function setDetalleNuevoPedido($REQ){
        setcookie('IDP'.$REQ['idProducto'], $REQ['cantidad'], time() + (86400 * 30), "/");
        echo 'IDP'.$REQ['idProducto'].$REQ['cantidad'];
        $this->setVariableVista('mostrar', 'vacio');
    }
    
    public function getDetalleNuevoPedido($REQ){
        echo $_COOKIE['IDP'.$REQ['idProducto']];
        $this->setVariableVista('mostrar', 'vacio');
    }
}
?>