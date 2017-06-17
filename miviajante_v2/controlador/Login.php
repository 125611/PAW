<?php
require_once('Controlador.php');

class Login extends Controlador{
        
    public function __construct(){
        parent::__construct();
    }
    
    public function iniciarSesion($usuario, $clave){
        echo $usuario;
        echo $clave;
    }
}
?>