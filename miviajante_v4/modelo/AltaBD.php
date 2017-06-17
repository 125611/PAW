<?php

include 'Cliente.php';
include 'Producto.php';
include 'Pedido.php';

  class AltaBD implements IAltaBD{ 


public function insert_Cliente(Cliente $cliente){
          
    
        $nombre = $cliente->getNombre_cliente();
        $apellido = $cliente->getApellido_cliente();
        $contraseña = $cliente->getContraseña();
        $correo = $cliente->getCorreo();
        $direccion = $cliente->getDireccion();
        $telefono = $cliente->getTelefono();
        $estado = $cliente->getEstado_cliente();
     
    
        $sql = "INSERT INTO `Cliente`"
        . "(`ID`, `nombre_cliente`, `apellido_cliente`, `correo_electronico`, `direccion`, `telefono`, `estado_cliente`)"
        . " VALUES ('', '$nombre', '$apellido', '$contraseña', '$correo', '$direccion', '$telefono', '$estado')";
        
        return $sql;
        
    }
    
    public function insert_Descripcion($numero_pedido,$codigo_producto,$cantidad,$precio){
       
        $sql = "INSERT INTO `Descripcion`"
        . "(`nro_pedido`, `codigo_producto`, `cantidad`, `precio`)"
        . " VALUES ('$numero_pedido', '$codigo_producto', '$cantidad', '$precio')";
         
        return $sql;
        
    }
    
    
     public function insert_Pedido(Pedido $pedido){
         
         $id_cliente = $pedido->getId_cliente();
         $fecha_inicio = $pedido->getFecha_de_inicio();
         $fecha_entrega = $pedido->getFecha_de_entrega();
         $estado_pedido = $pedido->getEstado_pedido();
         $precio_total = $pedido->getPrecio_total();
         
        $sql = "INSERT INTO `Pedido`"
                . "(`nro`, `id_cliente`, `fecha_de_inicio`, `fecha_de_entrega`, `estado_pedido`, `precio_total`)"
                . " VALUES ('',$id_cliente,$fecha_inicio,$fecha_entrega,$estado_pedido,$precio_total)";
        
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
        . " VALUES ('$codigo_producto', '$codigo_rubro', '$descripcion', '$precio_unitario','$stock')";
        
        return $sql;
        
    }
    
    
     public function insert_Rubro($codigo_rubro,$nombre_rubro){
        
        $sql = "INSERT INTO `Rubro`"
        . "(`codigo_rubro`, `nombre_rubro`)"
        . " VALUES ('$codigo_rubro', '$nombre_rubro')";
        
        return $sql;
        
    }
    
 }