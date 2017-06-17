<?php
/* Smarty version 3.1.30, created on 2017-06-14 22:07:28
  from "C:\AppServ\www\PAW\miviajante\vista\templates\p_header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5941ddd015dac2_01115533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e80b0ab7e8c5355968c3b618b2ff78febe8c7fc1' => 
    array (
      0 => 'C:\\AppServ\\www\\PAW\\miviajante\\vista\\templates\\p_header.tpl',
      1 => 1497488820,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5941ddd015dac2_01115533 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
    <h1>Bienvenido a MiViajante!</h1>
    <article>
        <h2><?php echo '<?=';?>$nombreEmpresa<?php echo '?>';?></h2>
        <address>Tel: (02346) 15-536248  -  <a href="mailto:nombreProveedor@miviajante.esy.es">nombreProveedor@miviajante.esy.es</a></address>
        <a href="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php/Login/cerrarSesion">cerrar sesion</a>
    </article>    
</header><?php }
}
