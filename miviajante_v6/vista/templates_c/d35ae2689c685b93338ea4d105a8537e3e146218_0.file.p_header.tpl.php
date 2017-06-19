<?php
/* Smarty version 3.1.30, created on 2017-06-18 20:31:20
  from "C:\AppServ\www\PAW\miviajante_v6\vista\templates\p_header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59470d489f57c1_65981587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd35ae2689c685b93338ea4d105a8537e3e146218' => 
    array (
      0 => 'C:\\AppServ\\www\\PAW\\miviajante_v6\\vista\\templates\\p_header.tpl',
      1 => 1497828602,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59470d489f57c1_65981587 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
    <img src="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
vista/imagenes/logo.png" alt="Logo de la empresa">
    <h2>Bienvenidos al Sitio Oficial de <br><span>"Mi Viajante"</span></h2>
    <?php if (isset($_smarty_tpl->tpl_vars['isLogueado']->value) && ($_smarty_tpl->tpl_vars['isLogueado']->value == "true")) {?>
        <a href='<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php/Login/cerrarSesion'>cerrar sesion</a>
    <?php }?>
    <a href='<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php/Login/cerrarSesion'>logueado=<?php echo $_smarty_tpl->tpl_vars['isLogueado']->value;?>
</a>
</header><?php }
}
