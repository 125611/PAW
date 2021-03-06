<?php
require_once 'controlador/Controlador.php';
require_once 'modelo/Cliente.php';
require_once 'libs/Google/autoload.php';

class Login extends Controlador{
        
    public function __construct(){
        parent::__construct();
       
          if(!isset($_SESSION)) 
         { 
         session_start(); 
         } 
    }
   
    public function defaultAction(){$this->mostrar($REQ);}
    
        
    public function mostrar($REQ){
        if ($this->isLogueado()){
            $this->setVariableVista('mostrar','home');
        }else{
            $this->setVariableVista('mensaje', '');
            $this->setVariableVista('mostrar','login');
            
        }
    }
    
    
    public function iniciarSesion($REQ){
        if ($this->isLogueado()){
            $this->setVariableVista('mostrar','home');
        }else{
            //SINO ESTA INICIADA LA SESION
            $tarea = new AdministradorModelo();
            if (!empty ($REQ)){
                $userPass = $REQ['usuario'] ."/". $REQ['password'];
                $rta = $tarea->accion('verificar', 'cliente', $userPass);
                if ($rta){
                    //ACA HAY QUE CARGAR EN LAS VARIABLES DE SESION LOS DATOS DEL CLIENTE
                    //$tarea->accion('obtener', 'cliente', $REQ['usuario']);
                    $cliente = new Cliente();
                    $cliente = $tarea->accion("get", "cliente", $userPass);
                    //trae objeto cliente
                    $_SESSION['isLogueado']= 'true';                
                    $_SESSION['nombreCliente']=  $cliente->getNombre_cliente();
                    $_SESSION['telefonoCliente']= $cliente->getTelefono();
                    $_SESSION['mailCliente']= $cliente->getCorreo();
                    $_SESSION['id']= $cliente->getId();
                    $this->ponerDatosDeUsuarioEnVista();
                    $this->setVariableVista('mostrar','home');
                }else{
                    $this->setVariableVista('mensaje','Usuario o pasword incorrecto, vuelva a intentar..');
                    $this->setVariableVista('mostrar','login');
                }
            }else{
                $this->setVariableVista('mensaje','Usuario o pasword incorrecto, vuelva a intentar..');
                $this->setVariableVista('mostrar','login');
            } 
            
        }
    }

    public function cerrarSesion(){
        unset($_SESSION["isLogueado"]);
        unset($_SESSION["nombreCliente"]); 
        unset($_SESSION["telefonoCliente"]);
        unset($_SESSION["mailCliente"]);
        
        //PARA SESSION DE GOOGLE
        //unset($_SESSION['access_token']); 
       // setcookie("APISID", "", time()-1000, "/");
        
        session_destroy();
        
        //$this->ponerDatosDeUsuarioEnVista();
        $this->setVariableVista('mensaje', '');
        $this->setVariableVista('mostrar','login');
    }
    
    public function isLogueado(){
        if (empty($_SESSION)){
        return false;
        }else{
        return ($_SESSION['isLogueado'] == 'true');        
        }
        
     }
    
    
}
?>