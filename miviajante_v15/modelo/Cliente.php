<?php

class Cliente{
    
private $id,
        $nombre_cliente,
        $apellido_cliente,
        $password,
        $correo,
        $direccion,
        $telefono,
        $activo;  

public function __construct() {
    
} 


 function getPassword(){
     return $this->password;
 }
        
function setPassword($pass){
    $this->password = $pass;
} 
        
function getId() {
    return $this->id;
}

function getNombre_cliente() {
    return $this->nombre_cliente;
}

function getApellido_cliente() {
    return $this->apellido_cliente;
}

function getCorreo() {
    return $this->correo;
}

function getDireccion() {
    return $this->direccion;
}

function getTelefono() {
    return $this->telefono;
}

function getActivo() {
    return $this->activo;
}

function setId($id) {
    $this->id = $id;
}

function setNombre_cliente($nombre_cliente) {
    $this->nombre_cliente = $nombre_cliente;
}

function setApellido_cliente($apellido_cliente) {
    $this->apellido_cliente = $apellido_cliente;
}

function setCorreo($correo) {
    $this->correo = $correo;
}

function setDireccion($direccion) {
    $this->direccion = $direccion;
}

function setTelefono($telefono) {
    $this->telefono = $telefono;
}

function setActivo($activo) {
    $this->activo = $activo;
}



    
}