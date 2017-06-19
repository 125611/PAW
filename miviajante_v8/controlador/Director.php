<?php
require_once('controlador/Controlador.php');
require_once('controlador/Login.php');
require_once('controlador/Registro.php');
require_once('controlador/Menu.php');
require_once('config.php');
require_once('controlador/AdministradorModelo.php');

class Director{

    
    public function action($REQ, $PATH){ 
        //parseamos los parametros recibidos a clase/metodo
        $PATH = split('/',$PATH);
        if($PATH[1]!='')$miClase=$PATH[1];
        if($PATH[2]!='')$miMetodo=$PATH[2];
        
        //si la clase buscada no existe -> al Login
        if (!class_exists($miClase)){$miClase='Login';$miMetodo='mostrar';}        
        
        //INICIA SECTOR PARA VERIFICAR EL LOGUEO DEL USUARIO        
            //detallamos las clases que se pueden acceder sin estar logueado
            $permitidoSinLoguearse=(($miClase!='Login')or($miClase!='Registro'));
            
            $L=new Login();
            //si NO estoy logueado y voy a un lugar no permitido me redirije al login
             if (!$L->isLogueado()){
                if(!$permitidoSinLoguearse){$miClase='Login';$miMetodo='mostrar';}
            }

        //FIN SECTOR PARA VERIFICAR EL LOGUEO DEL USUARIO        
        
        //creamos la clase y llamamos al metodo..
        $C=new $miClase();
       // $C->setVariableVista('isLogueado',$_SESSION['isLogueado']);
        $C->invocar($miMetodo,array($REQ));
    }
}