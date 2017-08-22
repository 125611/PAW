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
    
    public function nuevo($REQ){
        /*$fecha = getdate();
        $fechaInicio = $fecha['mday'].'-'.$fecha['mon'].'-'.$fecha['year'];
        $pedido = new Pedido();
        $pedido->setId_cliente($_SESSION['id']);
        $pedido->setFecha_de_inicio($fechaInicio);
        $descripciones = array();
        */
        $tarea = new AdministradorModelo();
        $TODOS_LOS_PRODUCTOS = $tarea->accion('listar', 'productos', '');
       
        //BUSCAMOS lAS COOKIES DE PRODUCTOS EN EL CARRITO
        $i=0;
        $totalCompra=0;
        foreach ($_COOKIE as $clave => $valor){
            $PROD_LIST=explode("IDP", $clave);
            if ((count($PROD_LIST)>1)and($_SESSION['id']==$PROD_LIST[0])){
                //SI LA COOKIE ES UN PRODUCTO DEL CARRITO
                //OBTENEMOS EL PRODUCTO CON ESE ID en $producto
                foreach ($TODOS_LOS_PRODUCTOS as $myProd){
                    if($myProd->getCodigo_producto()==$PROD_LIST[1])
                        $producto=$myProd;
                }    
                //ARMAMOS LA LISTA DEL CARRITO
                $listaCarrito[$i]=$producto; 
                $i+=1;
                $listaCarritoCantidad[$producto->getCodigo_producto()]=$valor; 
                //SUMAMOS EL VALOR DEL PRODUCTO
                $totalCompra+=$producto->getPrecio_unitario()*$valor;  
            }         
        }
        
        $this->setVariableVista('listaCarrito', $listaCarrito);
        $this->setVariableVista('listaCarritoCantidad', $listaCarritoCantidad);
        $this->setVariableVista('totalCompra', $totalCompra);  
        $this->setVariableVista('mostrar', 'carrito'); 
    }
}
?>