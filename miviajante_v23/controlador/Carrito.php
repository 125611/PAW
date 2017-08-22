<?php

require_once('controlador/Controlador.php');
require_once('modelo/CarritoDeCompra.php');

class Carrito extends Controlador{
        
    public function __construct(){
        parent::__construct();

    }
    
    public function defaultAction(){$this->mostrar($REQ);}
    
    public function mostrar($REQ){
        $this->nuevaCompra(); 
    }
    
    public function setDetalleNuevoPedido($REQ){        setcookie($_SESSION['id'].'IDP'.$REQ['idProducto'], $REQ['cantidad'], time() + (86400 * 30), "/");
        echo 'IDP'.$REQ['idProducto'].$REQ['cantidad'];
        $this->setVariableVista('mostrar', 'vacio');
    }
    
    public function getDetalleNuevoPedido($REQ){        if(isset($_COOKIE[$_SESSION['id'].'IDP'.$REQ['idProducto']])){
            echo $_COOKIE[$_SESSION['id'].'IDP'.$REQ['idProducto']];
        }
        $this->setVariableVista('mostrar', 'vacio');
    }
    
    public function clearDetallePedido($REQ){        
        foreach ($_COOKIE as $clave => $valor){
            $PROD_LIST=explode("IDP", $clave);
            if ((count($PROD_LIST)>1)and($_SESSION['id']==$PROD_LIST[0])){             setcookie($clave, '', time() - 999, "/");  
            }
        }
       // echo 'cookies de carrito eliminadas para '.$_SESSION['id'];
    }
    
    public function generarPedido($REQ){  
        //FALTA HACER!!!!
        
        $this->clearDetallePedido($REQ);
    }
    
    public function nuevaCompra($REQ){
        $miCarrito=new CarritoDeCompra();
        $miCarrito->iniciarCarrito($_SESSION['id']);
        
        $this->setVariableVista('listaCarrito', $miCarrito->getListaCarrito());
        $this->setVariableVista('listaCarritoCantidad', $miCarrito->getListaCarritoCantidad());
        $this->setVariableVista('totalCompra', $miCarrito->getTotalCompra());  
        $this->setVariableVista('mostrar', 'carrito'); 
    }
}
?>