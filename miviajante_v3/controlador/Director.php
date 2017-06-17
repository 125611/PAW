<?php
require_once('controlador/Controlador.php');
require_once('controlador/Login.php');
require_once('config.php');

class Director{
    
    public function __construct(){}
    
    public function action($REQ, $PATH){        
        $PATH = split('/',$PATH);
        $miClase=$PATH[1];
        $miMetodo=$PATH[2];
        
        if (!class_exists($miClase)){$miClase='Login';$miMetodo='iniciarSesion';}
        
        if($miClase=='Login'){            
            //VER SI SE PUEDE GENERALIZAR ALGO...
            $C=new Login();
            $C->invocar($miMetodo,array($REQ['usuario'],$REQ['password']));
        }
        
        if($miClase=='Registro'){
            $C=new Registro();
            $C->invocar($miMetodo,array());
        }
        
        
    }
}