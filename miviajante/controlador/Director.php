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
            $C->invocar($miMetodo,array($REQ['usu'],$REQ['pas']));
        }else{
            echo 'clase no permitida -'.$miClase.'- no se puede acceder';
        }
    }
}