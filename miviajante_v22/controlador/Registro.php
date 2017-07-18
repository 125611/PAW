<?php
require_once('controlador/Controlador.php');
require_once('modelo/Cliente.php');


class Registro extends Controlador{
        
    public function __construct(){
        parent::__construct();

    }
    
    public function defaultAction(){$this->mostrar($REQ);}
    
    public function mostrar($REQ){
        $this->setVariableVista('mostrar', 'registro'); 
    }
    
    public function registrar($REQ){
        $c = new Cliente();
        $c->setNombre_cliente($REQ['nombre']);
        $c->setApellido_cliente($REQ['apellido']);
        $c->setPassword($REQ['pass']);
        $c->setCorreo($REQ['email']);
        $c->setDireccion($REQ['direccion']);
        $c->setTelefono($REQ['telefono']);
        
        $tarea = new AdministradorModelo();
        $rta = $tarea->accion('registrar', 'cliente', $c);
        if($rta){
 
            $this->setVariableVista('mensaje', 'El usuario ha sido registrado, para ingresar complete sus datos'); 
            $this->setVariableVista('mostrar', 'login'); 
        }else{
            $this->setVariableVista('mensaje', 'El usuario ya existe'); 
            $this->setVariableVista('mostrar', 'registro'); 
        }
    }
    
        //public function ponerDatosDeUsuarioEnVista(){}
}
?>