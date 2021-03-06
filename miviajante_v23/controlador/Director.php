<?php
require_once('controlador/Controlador.php');
require_once('controlador/Login.php');
require_once('controlador/LoginGoogle.php');
require_once('controlador/Registro.php');
require_once('controlador/Productos.php');
require_once('controlador/Pedidos.php');
require_once('controlador/Carrito.php');
require_once('controlador/Menu.php');
require_once('config.php');
require_once('controlador/AdministradorModelo.php');

class Director{

    
    public function action($REQ, $PATH){ 
        //parseamos los parametros recibidos a clase/metodo
        $PATH = split('/',$PATH);
        if($PATH[1]!='')$miClase=$PATH[1];
        if($PATH[2]!='')$miMetodo=$PATH[2];
        //echo 'recibo'. $miClase.'|'.$miMetodo;
        //si la clase buscada no existe -> al Login
        if (!class_exists($miClase)){$miClase='Login';$miMetodo='mostrar';}        
        
        //INICIA SECTOR PARA VERIFICAR EL LOGUEO DEL USUARIO        
            //detallamos las clases que se pueden acceder sin estar logueado
            $permitidoSinLoguearse=(($miClase=='Login')or($miClase=='LoginGoogle')or($miClase=='Registro'));
            $C=new $miClase();
            $L=new Login();
            //si NO estoy logueado y voy a un lugar no permitido me redirije al login
             if (!$L->isLogueado()){
                // echo 'no esta logueado';
                if(!$permitidoSinLoguearse){
                    //echo 'se intenta acceder a pagina no autorizada';
                    $C=new Login();$miMetodo='mostrar';}                
            }else{
                 //echo 'si esta logueado';
                 if($miMetodo=='registrar'){$miClase='Login';$miMetodo='mostrar';}
                 //$C->setVariableVista('isLogueado',$_SESSION['isLogueado']);
                 $C->ponerDatosDeUsuarioEnVista();
             }
        //FIN SECTOR PARA VERIFICAR EL LOGUEO DEL USUARIO        
        
        //creamos la clase y llamamos al metodo..        
       //echo 'invoco'. $miClase.'|'.$miMetodo;
        if(! method_exists($C,$miMetodo)){$miMetodo='defaultAction';}
        $C->invocar($miMetodo,array($REQ));
    }
}