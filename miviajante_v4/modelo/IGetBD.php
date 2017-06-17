<?php
include 'Cliente.php';
include 'Producto.php';
include 'Pedido.php';

interface IGetBD {
    
      public function get_clientes();
      public function get_productos();
      public function get_pedidos();
    
}
