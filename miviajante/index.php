<?php    
    require_once('controlador/Director.php');
    $D=new Director();
    $D->action($_REQUEST,$_SERVER['PATH_INFO']);
?>