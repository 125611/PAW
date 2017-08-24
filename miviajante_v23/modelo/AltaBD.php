<?php

include_once 'Cliente.php';
include_once 'Producto.php';
include_once 'Pedido.php';

  class AltaBD{ 


public function insert_Cliente(Cliente $cliente){
        
        $nombre = $cliente->getNombre_cliente();
        $apellido = $cliente->getApellido_cliente();
        $p = $cliente->getPassword();
        $password = md5($p);
        $correo = $cliente->getCorreo();
        $direccion = $cliente->getDireccion();
        $telefono = $cliente->getTelefono();
        
     
    
        $sql = "INSERT INTO `Cliente`(`ID`, `nombre_cliente`, `apellido_cliente`, `password`, `correo_electronico`, `direccion`, `telefono`, `activo`) VALUES"
                . " ('','$nombre','$apellido','$password','$correo','$direccion',$telefono,0)";
        
        return $sql;
        
  }
  
  
  public function insert_Cliente_google($user){
      
      $id = $user['id'];
      $name = $user['name'];
      $email = $user['email'];
      $link = $user['link'];
      $picture_link = $user['picture'];
      
      $sql = "INSERT INTO `google_users`(`google_id`, `google_name`, `google_email`, `google_link`, `google_picture_link`)"
              . " VALUES ($id,'$name','$email','$link','$picture_link')";
      
      return $sql;
  }
  
    
    public function insert_Descripcion($miDesc){
        $nP=$miDesc->getNro_pedido();
        $cP=$miDesc->getCodigo_producto();
        $cnt=$miDesc->getCantidad();
        $pr=$miDesc->getPrecio();
        
        $sql = "INSERT INTO `Descripcion`"
        . "(`nro_pedido`, `codigo_producto`, `cantidad`, `precio`)"
        . " VALUES ($nP, $cP, $cnt, $pr)";
        
        return $sql;
        
    }
    
    
     public function insert_Pedido(Pedido $pedido){
         
         $id_cliente = $pedido->getId_cliente();
         $fecha_inicio = "'".$pedido->getFecha_de_inicio()."'";
         $fecha_entrega = "'".$pedido->getFecha_de_entrega()."'";
         $estado_pedido = $pedido->getEstado_pedido();
         $precio_total = $pedido->getPrecio_total();
         
        $sql = "INSERT INTO `Pedido`"
                . "(`id_cliente`, `fecha_de_inicio`, `fecha_de_entrega`, `estado_pedido`, `precio_total`)"
                . " VALUES ($id_cliente,$fecha_inicio,$fecha_entrega,$estado_pedido,$precio_total)";
         return $sql;
        
    }
    
    public function insert_Producto(Producto $producto){
        
        $codigo_producto = $producto->getCodigo_producto();
        $codigo_rubro = $producto->getCodigo_rubro();
        $descripcion = $producto->getDescripcion();
        $precio_unitario = $producto->getPrecio_unitario();
        $stock = $producto->getStock();
        
         
        $sql = "INSERT INTO `Producto`"
        . "(`codigo_producto`, `codigo_rubro`, `descripcion`, `precio_unitario`, `stock`)"
        . " VALUES ($codigo_producto, $codigo_rubro, '$descripcion', $precio_unitario,$stock)";
        
        return $sql;
        
    }
    
    
     public function insert_Rubro($codigo_rubro,$nombre_rubro){
        
        $sql = "INSERT INTO `Rubro`"
        . "(`codigo_rubro`, `nombre_rubro`)"
        . " VALUES ($codigo_rubro, $nombre_rubro)";
        
        return $sql;
        
    }
    
 }