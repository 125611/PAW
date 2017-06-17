<?php   


abstract class Controlador{
        
    public function __construct (){}
        
    public function invocar($accion, $parametros){
        call_user_func_array(array($this,$accion),$parametros);
    }
    
    public function pasarAVista($accion, $parametros){
        call_user_func_array(array($this,$accion),$parametros);
    }
    
}
?>