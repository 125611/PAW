<?php

class Pedido{
    
    private $nro,
            $id_cliente,
            $fecha_de_inicio,
            $fecha_de_entrega,
            $estado_pedido,
            $precio_total,
            $descripcion;
    
    public function __construct() {
    } 
    
    function getNro() {
        return $this->nro;
    }

    function getId_cliente() {
        return $this->id_cliente;
    }

    function getFecha_de_inicio() {
        return $this->fecha_de_inicio;
    }

    function getFecha_de_entrega() {
        return $this->fecha_de_entrega;
    }

    function getEstado_pedido() {
        return $this->estado_pedido;
    }

    function getPrecio_total() {
        return $this->precio_total;
    }
    
    function getDescripcion(){
        return $this->descripciones;
    }

    function setNro($nro) {
        $this->nro = $nro;
    }

    function setId_cliente($id_cliente) {
        $this->id_cliente = $id_cliente;
    }

    function setFecha_de_inicio($fecha_de_inicio) {
        $this->fecha_de_inicio = $fecha_de_inicio;
    }

    function setFecha_de_entrega($fecha_de_entrega) {
        $this->fecha_de_entrega = $fecha_de_entrega;
    }

    function setEstado_pedido($estado_pedido) {
        $this->estado_pedido = $estado_pedido;
    }

    function setPrecio_total($precio_total) {
        $this->precio_total = $precio_total;
    }

    function setDescripcion($descripciones){
        $this->descripciones = $descripciones;
    }
    
}

