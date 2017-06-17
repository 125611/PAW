<?php
require_once('Controlador.php');
include('../vista/smarty.php');

class Registro extends Controlador{
        
    public function __construct(){
        parent::__construct();

    }
    
    public function mostrar($tpl){
        echo "hola";
        $miSmarty->assign ("body", $tpl);
        $miSmarty->display("p_layout.tpl");

    }
}
?>