<?php
require_once('Controlador.php');
require_once('Login.php');
require_once('Registro.php');
require_once('../config.php');

class Director{
    
    public function __construct(){}
    
    public function action($REQ, $PATH){ 
        // $REQ trae datos
        // $PATH trae url
        $PATH = split('/',$PATH);
        $miClase=$PATH[4];
        $miMetodo=$PATH[5];
        
        //if (!class_exists($miClase)){$miClase='Login';$miMetodo='iniciarSesion';}
        
        if($miClase=='Login'){            
            //VER SI SE PUEDE GENERALIZAR ALGO...
            
            $C=new Login();
            $C->invocar($miMetodo,array($REQ['usuario'],$REQ['password']));
        }
        
        if($miClase=="Registro"){
            $C=new Registro();
            if($miMetodo=="mostrar"){
                $C->pasarAVista($miMetodo,"registro.tpl");
            }
            
        }
    }
}