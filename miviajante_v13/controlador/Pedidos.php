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
            echo "no hay pedidos" ;
        }else{        
        print_r($rta);
        }
       // $this->setVariableVista('listaPedidos', $rta); 
    }
}
?>