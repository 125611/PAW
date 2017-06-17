<?php
require_once('controlador/Controlador.php');
require_once('controlador/Login.php');
require_once('controlador/Registro.php');
require_once('config.php');
require_once('controlador/AdministradorModelo.php');

class Director{

    
    public function action($REQ, $PATH){ 
        $PATH = split('/',$PATH);
        if($PATH[1]!='')$miClase=$PATH[1];
        if($PATH[2]!='')$miMetodo=$PATH[2];
        
        if (!class_exists($miClase)){$miClase='Login';$miMetodo='mostrar';}
        
        $C=new $miClase();
        $C->invocar($miMetodo,array($REQ));
    }
}