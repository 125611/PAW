<?php
require_once('controlador/Controlador.php');

class Login extends Controlador{
        
    public function __construct(){
        parent::__construct();
        session_start();
    }
   
    //public function defaultAction(){}
    
    public function iniciarSesion($usuario, $clave){
        //echo '...intento de logueo usu:'.$usuario.' pas:'.$clave.'</br>';
        if($_SESSION['logueado']==1){
            $this->setVariableVista('mostrar','menu');
        }else{//SINO ESTA INICIADA LA SESION
            if($this->usuarioCheck($usuario,$clave)) {
                $_SESSION['logueado']=1;
                $_SESSION['nombreEmpresa']='Juan';
                $_SESSION['telefonoEmpresa']='15532122';
                $_SESSION['mailEmpresa']='bulofriends@gmail.com';
                $this->setVariableVista('mostrar','menu');
            }else{
                $this->setVariableVista('mostrar','login');
                if ($usuario!='') $this->setVariableVista('mensaje','usuario o pasword incorrecto, vuelva a intentar..');
            }
        }
    }
    
    public function cerrarSesion(){
        unset($_SESSION["nombreEmpresa"]); 
        unset($_SESSION["telefonoEmpresa"]);
        unset($_SESSION["mailEmpresa"]);
        session_destroy();
        $this->setVariableVista('mostrar','login');
    }
    
    public function isLogueado(){
        return (!$_SESSION['logueado']=='');
    }
    
    private function usuarioCheck($usuario,$clave){
        if($usuario=='test') return true;
    }
}
?>