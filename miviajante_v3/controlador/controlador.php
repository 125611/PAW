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
        
        $this->vista->setVariables($this->variablesDeVista);
        
        $this->vista->renderizar();
    }
    
    protected function defaultAction(){
        echo 'default Action '.static::class.'</br>';
        $this->variablesDeVista['mostrar']='login';
    }
    
    protected function setVariableVista($clave,$valor){
        $this->variablesDeVista[$clave]=$valor;
    }
}
?>