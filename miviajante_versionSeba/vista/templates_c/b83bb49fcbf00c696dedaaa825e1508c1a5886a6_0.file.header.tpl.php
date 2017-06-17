<?php
/* Smarty version 3.1.30, created on 2017-06-12 17:18:48
  from "C:\AppServ\www\PAW\miviajante\vista\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_593eccf89c7550_36206815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b83bb49fcbf00c696dedaaa825e1508c1a5886a6' => 
    array (
      0 => 'C:\\AppServ\\www\\PAW\\miviajante\\vista\\templates\\header.tpl',
      1 => 1496630753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_593eccf89c7550_36206815 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
    <h1>Bienvenido a MiViajante!</h1>
    <article>
        <h2><?php echo '<?=';?>$nombreEmpresa<?php echo '?>';?></h2>
        <address>Tel: (02346) 15-536248  -  <a href="mailto:nombreProveedor@miviajante.esy.es">nombreProveedor@miviajante.esy.es</a></address>
        <a href="interfaces/desloguearse.php">cerrar sesion</a>
    </article>    
</header><?php }
}
