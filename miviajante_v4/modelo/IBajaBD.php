<?php


interface IBajaBD {
    
      //bajas en la BD
    
        public function delete_Cliente($id);
        public function delete_Pedido($nro);
        public function delete_Producto($cod);

    
}
