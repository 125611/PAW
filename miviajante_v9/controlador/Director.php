<?php
require_once('controlador/Controlador.php');
require_once('controlador/Login.php');
require_once('controlador/Registro.php');
require_once('controlador/Catalogo.php');
require_once('controlador/Menu.php');
require_once('config.php');
require_once('controlador/AdministradorModelo.php');

class Director{

    
    public function action($REQ, $PATH){ 
        //parseamos los parametros recibidos a clase/metodo
        $PATH = split('/',$PATH);
        if($PATH[1]!='')$miClase=$PATH[1];
        if($PATH[2]!='')$miMetodo=$PATH[2];
        if(sizeof($PATH)>3){
            if($PATH[3]!='')$miCategoria=$PATH[3];
        }else $miCategoria = '';
        //echo 'recibo'. $miClase.'|'.$miMetodo.'|'.$miCategoria;
        //si la clase buscada no existe -> al Login
        if (!class_exists($miClase)){$miClase='Login';$miMetodo='mostrar';}        
        
        //INICIA SECTOR PARA VERIFICAR EL LOGUEO DEL USUARIO        
            //detallamos las clases que se pueden acceder sin estar logueado
            $permitidoSinLoguearse=(($miClase!='Login')or($miClase!='Registro'));
            $C=new $miClase();
            $L=new Login();
            //si NO estoy logueado y voy a un lugar no permitido me redirije al login
             if (!$L->isLogueado()){
                if(!$permitidoSinLoguearse){$miClase='Login';$miMetodo='mostrar';}
                
            }else{
                 if($miMetodo=='registrar'){$miClase='Login';$miMetodo='mostrar';}
                 //$C->setVariableVista('isLogueado',$_SESSION['isLogueado']);
                 $C->ponerDatosDeUsuarioEnVista();
             }

        //FIN SECTOR PARA VERIFICAR EL LOGUEO DEL USUARIO        
        
        //creamos la clase y llamamos al metodo..
        
       //echo 'invoco'. $miClase.'|'.$miMetodo;
        $C->invocar($miMetodo,array($REQ),$miCategoria);
    }
}