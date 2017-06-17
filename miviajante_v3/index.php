<?php
    include('vista/VistaHtml.php');
    $vista = new VistaHtml();
    $variablesDeVista = array();
    $variablesDeVista['mostrar']='login';
    $vista->setVariables($variablesDeVista);
    $vista->renderizar(); 
?>