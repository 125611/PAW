<?php


include 'Cliente.php';
include 'Producto.php';
include 'Pedido.php';


interface IAltaBD {
    
    
    //altas en la BD
    
    public function insert_Cliente(Cliente $cliente);
    public function insert_Descripcion($numero_pedido,$codigo_producto,$cantidad,$precio);
    public function insert_Pedido(Pedido $pedido);
    public function insert_Producto(Producto $producto);
    public function insert_Rubro($codigo_rubro,$nombre_rubro);
    
  
    
    
}
