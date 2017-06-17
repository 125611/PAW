<?php
/* Smarty version 3.1.30, created on 2017-06-16 21:32:34
  from "C:\xampp\htdocs\miviajante_originCancro\vista\templates\p_header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594478a2112e49_19953214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ec3929fda388b247ccb77ca3766694396da8540' => 
    array (
      0 => 'C:\\xampp\\htdocs\\miviajante_originCancro\\vista\\templates\\p_header.tpl',
      1 => 1497645357,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594478a2112e49_19953214 (Smarty_Internal_Template $_smarty_tpl) {
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
