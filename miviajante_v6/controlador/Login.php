<?php
require_once('controlador/Controlador.php');

class Login extends Controlador{
        
    public function __construct(){
        parent::__construct();
        session_start();
    }
   
    public function defaultAction(){$this->mostrar($REQ);}
    
        
    public function mostrar($REQ){
        if ($this->isLogueado()){
            $this->setVariableVista('mostrar','menu');
        }else{
            $this->setVariableVista('mostrar','login');
        }
    }
    
    
    public function iniciarSesion($REQ){
        if ($this->isLogueado()){
            $this->setVariableVista('mostrar','menu');
        }else{
            //SINO ESTA INICIADA LA SESION
            $tarea = new AdministradorModelo();
            $userPass = $REQ['usuario'] ."/". $REQ['password'] ;
            $rta = $tarea->accion('verificar', 'cliente', $userPass);
            if ($rta){
                //ACA HAY QUE CARGAR EN LAS VARIABLES DE SESION LOS DATOS DEL CLIENTE
                //$tarea->accion('obtener', 'cliente', $REQ['usuario']);
                echo "usuarioCorrecto";
                $_SESSION['isLogueado']='true';                
                $_SESSION['nombreCliente']=  'Juan(forzado)';
                $_SESSION['telefonoCliente']='15532122(forzado)';
                $_SESSION['mailCliente']='bulofriends@gmail.com(forzado)';
                $this->ponerDatosDeUsuarioEnVista();
                $this->setVariableVista('mostrar','menu');
            }else{
                $this->setVariableVista('mensaje','usuario o pasword incorrecto, vuelva a intentar..');
                $this->setVariableVista('mostrar','login');
            }
        }
    }

    public function cerrarSesion(){
        unset($_SESSION["isLogueado"]);
        unset($_SESSION["nombreCliente"]); 
        unset($_SESSION["telefonoCliente"]);
        unset($_SESSION["mailCliente"]);
        session_destroy();
        $this->ponerDatosDeUsuarioEnVista();
        $this->setVariableVista('mostrar','login');
    }
    
    public function isLogueado(){
        return ($_SESSION['isLogueado'] == 'true');        
    }
    
    public function ponerDatosDeUsuarioEnVista(){
        $this->setVariableVista('isLogueado',$_SESSION['isLogueado']);
        $this->setVariableVista('nombreCliente',$_SESSION['nombreCliente']);
        $this->setVariableVista('telefonoCliente',$_SESSION['telefonoCliente']);
        $this->setVariableVista('mailCliente',$_SESSION['mailCliente']);
    }
}
?>