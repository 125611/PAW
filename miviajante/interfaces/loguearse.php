<?php
    if($_POST['usu']=='test') {
        session_start();
        $_SESSION['logueado']=1;
    }
    header('location: ../main.php?p=menu');
?>