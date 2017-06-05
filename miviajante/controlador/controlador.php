<?php
session_start();

$vdir="vista/htmls/";
$page=$_REQUEST['p'];

if($_SESSION['logueado']=='') $page="login";
//if($_SESSION['nombreEmpresa'] == '') $page="login";
//console.log(session_id());
if (!file_exists($vdir.$page.".html")) $page="menu";

//generamos las variables del usuario
$nombreEmpresa=$_SESSION['nombreEmpresa'];
$telefonoEmpresa='(2346) 15182477';
$mailEmpresa='bulofriends@gmail.com';

?>