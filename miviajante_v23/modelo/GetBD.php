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
    
    public function get_pedidos_por_nro($nroPedido){
        
        $sql = "SELECT * FROM  `Pedido` WHERE nro='$nroPedido'" ;
        
        return $sql;
    }
    
    public function get_descripcion_de_pedido($nroPedido){
        
        $sql = "SELECT * FROM  `Descripcion` WHERE nro_pedido='$nroPedido'" ;
        
        return $sql;
    }
    
    public function get_ultimoPedido(){
        
        $sql = "SELECT * FROM `pedido` WHERE 1 ORDER BY nro DESC LIMIT 1" ;
        
        return $sql;
    }
    
    public function get_clienteAndPassword($user,$pass){
       
     
        
        $sql = "SELECT `correo_electronico`, `password` "
                . "FROM `Cliente` "
                . "WHERE `correo_electronico` = '$user' AND `password` = '$pass'" ;
       
        
         
        return $sql ;
    }
    
    
    public function get_cliente($mail,$password){
        
        $sql = "SELECT * 
                FROM  `Cliente` 
                WHERE correo_electronico = '$mail' and password = '$password'" ;
        
        return $sql;
    }
    
    
    public function get_cliente_google($id,$email){
       
        $sql = "SELECT `google_id`, `google_name`, `google_email`, `google_link`, `google_picture_link`"
                . " FROM `google_users` "
                . "WHERE 'google_id' = $id AND 'google_email' = '$email'" ;
                
        return $sql ;
       
    }
    
    
    public function get_productos_por_rubro($rubro){
        
        
        $sql = "SELECT *
        FROM `Producto`
        INNER JOIN `Rubro` ON `Producto`.`Codigo_rubro` = `Rubro`.`Codigo_rubro`
        WHERE `Rubro`.`nombre_rubro` = '$rubro'";
        
       return $sql ;
    }
    
     public function get_productos_por_id($idp){
                
        $sql = "SELECT *
        FROM `Producto`
        WHERE `codigo_producto` = '$idp'";
        
       return $sql ;
    }
    
    public function get_pedidos_por_id($idcliente){
        
        $sql = "SELECT * FROM `Pedido` WHERE id_cliente = '$idcliente'";
        
        return $sql;
    }
    
    
}