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
    
    
    public function get_cliente($mail,$password){
        
        $sql = "SELECT * 
                FROM  `Cliente` 
                WHERE correo_electronico = '$mail' and password = '$password'" ;
        
        return $sql;
    }
    
    public function get_productos_por_rubro($rubro){
        
        
        $sql = "SELECT *
        FROM `Producto`
        INNER JOIN `Rubro` ON `Producto`.`Codigo_rubro` = `Rubro`.`Codigo_rubro`
        WHERE `Rubro`.`nombre_rubro` = '$rubro'";
        
       return $sql ;
    }
    
    
}