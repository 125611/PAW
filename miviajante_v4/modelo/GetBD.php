<?php

include 'Cliente.php';
include 'Producto.php';
include 'Pedido.php';

class GetBD implements IGetBD{
    
    public function get_clientes(){
        
        $sql = "SELECT * FROM  `Cliente` WHERE 1" ;
        
        return $sql;
    }
    
    public function get_productos(){
        
        $sql = "SELECT * FROM  `Producto` WHERE 1" ;
        
        return $sql;
    }
    
    public function get_pedidos(){
        
        $sql = "SELECT * FROM  `Pedido` WHERE 1" ;
        
        return $sql;
    }
    
    
    
    
}