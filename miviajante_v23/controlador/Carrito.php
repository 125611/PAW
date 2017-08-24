<?php

require_once('controlador/Controlador.php');
require_once('modelo/CarritoDeCompra.php');
require_once('modelo/Pedido.php');
require_once('modelo/Descripcion.php');
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
        $miPedido=new Pedido();
        $miCarrito=new CarritoDeCompra();
        $miCarrito->iniciarCarrito($_SESSION['id']);
        
        $miPedido->setId_cliente($_SESSION['id']);
        
        $miPedido->setNro(1);
        $miPedido->setId_cliente($_SESSION['id']);
        $miPedido->setFecha_de_inicio($this->armarFecha(0));
        $miPedido->setFecha_de_entrega($this->armarFecha(20));
        $miPedido->setEstado_pedido(1);$miPedido->setPrecio_total($miCarrito->getTotalCompra());
        $miPedido->setDescripcion('?');
        
        $tarea = new AdministradorModelo();
        $tarea->accion('registrar', 'pedido', $miPedido);        
        $miPedido = $tarea->accion('especial', 'ultimoPedido', '');
        $nroPedido=$miPedido->getNro();
        
        //CREAMOS UNA DESCRIPCION CON EL NRO del PEDIDO        
        $miDescripcion=new Descripcion();
        $miDescripcion->setNro_pedido($nroPedido);
        
        //OBTENEMOS LA LISTA DE PRODUCTOS Y LA DE CANTIDADES
        //QUE TENEMOS EN NUESTRO CARRITO
        $PROD_CARRITO=$miCarrito->getListaCarrito();
        $CANTIDAD_CARRITO=$miCarrito->getListaCarritoCantidad();
        
        //PARA CADA P DEL CARRITO REGISTRAMOS UN NUEVO DETALLE
        foreach($PROD_CARRITO as $miP){
            $nroMiP=$miP->getCodigo_producto();
            $miDescripcion->setCodigo_producto($nroMiP);
            $miDescripcion->setCantidad($CANTIDAD_CARRITO[$nroMiP]);
            $miDescripcion->setPrecio($miP->getPrecio_unitario());
            $tarea->accion('registrar', 'descripcion', $miDescripcion);  
        }        
        
        //if ($rta){throw new Exception('rta BBDD: '.$rta);}
       // setcookie('debugMSJ', 'nroPedido: '.$miPedido->getNro(), time() + 99999, "/");
        
        //BORRAMOS EL DETALLE
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
    
    public function armarFecha($masDias){
        //(masDias indica cuantos dias suma a la fecha actual)
        $t=60*60*24*$masDias; 
        $f = getdate(time()+$t);        
        return $f['year']."-".$f['mon']."-".$f['mday'];
    }
}
?>