<?php

class Producto{
    
    Private $codigo_producto,
        $codigo_rubro,
        $titulo,
        $descripcion,
        $precio_unitario,
        $stock,
        $rutaImagen;
    
    
    public function __construct() {    
} 

function getTitulo(){
    return $this->titulo;
}

function setTitulo($titulo){
    $this->titulo = $titulo ;
}

function getRutaImagen(){
    return $this->rutaImagen;
}

function setRutaImagen($ruta){
    $this->rutaImagen = $ruta ;
}
        
function getCodigo_producto() {
    return $this->codigo_producto;
}

function getCodigo_rubro() {
    return $this->codigo_rubro;
}

function getDescripcion() {
    return $this->descripcion;
}

function getPrecio_unitario() {
    return $this->precio_unitario;
}

function getStock() {
    return $this->stock;
}

function setCodigo_producto($codigo_producto) {
    $this->codigo_producto = $codigo_producto;
}

function setCodigo_rubro($codigo_rubro) {
    $this->codigo_rubro = $codigo_rubro;
}

function setDescripcion($descripcion) {
    $this->descripcion = $descripcion;
}

function setPrecio_unitario($precio_unitario) {
    $this->precio_unitario = $precio_unitario;
}

function setStock($stock) {
    $this->stock = $stock;
}


    
}