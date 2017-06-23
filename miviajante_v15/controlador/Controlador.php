<?php   
    
    ///VER MODIFICADORES DE ACCESO!!! PUBLIC PRIVATE ETC...

require_once('vista/VistaHtml.php');

abstract class Controlador{
    //ABSTRACTA
    protected $tipoDeVista;
    private $variablesDeVista;
    private $vista;
        
    public function __construct (){
        //echo 'se construyo el CONTROLADOR abstracto </br>';
        $this->variablesDeVista=array(); 
        $this->tipoDeVista='VistaHtml';        
        $this->vista=new $this->tipoDeVista();
    }
        
    public function invocar($accion, $parametros){
        if($accion=='')$accion='defaultAction';
        call_user_func_array(array($this,$accion),$parametros);
        
        $this->ponerDatosDeUsuarioEnVista();
        $this->vista->setVariables($this->variablesDeVista);
        
        $this->vista->renderizar();
    }
    
    protected function defaultAction(){
        $this->variablesDeVista['mostrar']='login';
    }
    
    public function setVariableVista($clave,$valor){
        //echo $clave.'>'.$valor.'</br>';
        $this->variablesDeVista[$clave]=$valor;
    }
    
    public function ponerDatosDeUsuarioEnVista(){
        if(isset($_SESSION['isLogueado'])){
        $this->setVariableVista('isLogueado',$_SESSION['isLogueado']);
        $this->setVariableVista('nombreCliente',$_SESSION['nombreCliente']);
        $this->setVariableVista('telefonoCliente',$_SESSION['telefonoCliente']);
        $this->setVariableVista('mailCliente',$_SESSION['mailCliente']);
        }else{
           $this->setVariableVista('isLogueado','');
            $this->setVariableVista('nombreCliente','');
            $this->setVariableVista('telefonoCliente','');
            $this->setVariableVista('mailCliente',''); 
        }
        
        }
}
?>