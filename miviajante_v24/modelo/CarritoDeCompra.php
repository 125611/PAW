<?php

class CarritoDeCompra{
    
private $idUsuario,
        $mensaje,
        $listaCarrito,
        $listaCarritoCantidad,
        $totalCompra;  

public function __construct() {
    
} 

function iniciarCarrito($usu){     
     $tarea = new AdministradorModelo();
     $TODOS_LOS_PRODUCTOS = $tarea->accion('listar', 'productos', '');      
     //BUSCAMOS LAS COOKIES DE PRODUCTOS EN EL CARRITO
     $i=0;
     $this->totalCompra=0;
     foreach ($_COOKIE as $clave => $valor){
         $PROD_LIST=explode("IDP", $clave);
         if ((count($PROD_LIST)>1)and($usu==$PROD_LIST[0])){
             //SI LA COOKIE ES UN PRODUCTO DEL CARRITO
             //OBTENEMOS EL PRODUCTO CON ESE ID en $producto
             foreach ($TODOS_LOS_PRODUCTOS as $myProd){
                 if(($myProd->getCodigo_producto()==$PROD_LIST[1])) 
                     $producto=$myProd;
             } 
             if($valor>0){
                //ARMAMOS LA LISTA DEL CARRITO
                $this->listaCarrito[$i]=$producto; 
                $i+=1;
                $this->listaCarritoCantidad[$producto->getCodigo_producto()]=$valor; 
                //SUMAMOS EL VALOR DEL PRODUCTO
                $this->totalCompra+=$producto->getPrecio_unitario()*$valor;      
             }
         }         
     }
    if(empty($this->listaCarrito)){
        $this->mensaje = "TU CARRITO ESTA VACIO! Elija desde el catalogo los productos que desea comprar.";
    }else{
        $this->mensaje = "Detalle de su compra:";
    }
}

function getMensaje(){return $this->mensaje;}    
function getListaCarrito(){return $this->listaCarrito;}
function getListaCarritoCantidad(){return $this->listaCarritoCantidad;}
function getTotalCompra(){return $this->totalCompra;}
    
    
}
