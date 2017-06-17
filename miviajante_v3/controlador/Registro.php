<?php
require_once('controlador/controlador.php');
include('vista/VistaHtml.php');

class Registro extends Controlador{
        
    public function __construct(){
        parent::__construct();

    }
    
    public function mostrar(){

        $vista = new VistaHtml();
        $variablesDeVista = array();
        $variablesDeVista['mostrar']='registro';
        $vista->setVariables($variablesDeVista);
        $vista->renderizar(); 

    }
}
?>