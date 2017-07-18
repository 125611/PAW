<?php

class Descripcion{
    
    private $nro_pedido,
            $codigo_producto,
            $cantidad,
            $precio;
    
    public function __construct() {
    } 
    
    function getNro_pedido() {
        return $this->nro_pedido;
    }

    function getCodigo_producto() {
        return $this->codigo_producto;
    }

    function getCantidad() {
        return $this->cantidad;
    }
    
    function getPrecio() {
        return $this->precio;
    }

    function setNro_pedido($nro_pedido) {
        $this->nro_pedido = $nro_pedido;
    }

    function setCodigo_producto($codigo_producto) {
        $this->codigo_producto = $codigo_producto;
    }

    function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

}
