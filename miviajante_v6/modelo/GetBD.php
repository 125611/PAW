<?php

include_once 'Cliente.php';
include_once 'Producto.php';
include_once 'Pedido.php';

class GetBD{
    
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
    
    public function get_clienteAndPassword($user,$pass){
       
        if (strlen($pass) <= 8){
        
        $sql = "SELECT `correo_electronico`, `password` "
                . "FROM `Cliente` "
                . "WHERE `correo_electronico` = '$user' AND `password` = '$pass'" ;
       
        }
         
        return $sql ;
    }
    
    
}