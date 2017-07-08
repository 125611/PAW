<?php
    require_once("controlador/Director.php");
    $D=new Director();
    if(empty($_SERVER["PATH_INFO"])){
        $D->action($_REQUEST,'/Login/mostrar'); 
    }else
        $D->action($_REQUEST,$_SERVER["PATH_INFO"]); 
?>