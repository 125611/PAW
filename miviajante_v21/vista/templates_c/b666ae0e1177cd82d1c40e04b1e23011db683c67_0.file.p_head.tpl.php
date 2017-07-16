<?php
/* Smarty version 3.1.30, created on 2017-07-16 15:08:10
  from "C:\xampp\htdocs\PAW\miviajante_v20\vista\templates\p_head.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596bab8a6e9690_73128057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b666ae0e1177cd82d1c40e04b1e23011db683c67' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PAW\\miviajante_v20\\vista\\templates\\p_head.tpl',
      1 => 1500228363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596bab8a6e9690_73128057 (Smarty_Internal_Template $_smarty_tpl) {
?>
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
vista/JS/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
vista/JS/main.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
vista/CSS/estilo.css">
    
    
    <!--Las siguientes sentencias haran que se cargue (si existe) en archivo extra de
    CSS o JS que lleve el mismo nombre que el template; esta info viene de vistaHTML-->
    <?php if (isset($_smarty_tpl->tpl_vars['tieneCSS']->value)) {?>
        <?php $_smarty_tpl->_assignInScope('myCss', ((string)$_smarty_tpl->tpl_vars['path_base']->value)."vista/CSS/".((string)$_smarty_tpl->tpl_vars['mostrar']->value).".css");
?>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['myCss']->value;?>
">
    <?php }?>  
    <?php if (isset($_smarty_tpl->tpl_vars['tieneJS']->value)) {?>
        <?php $_smarty_tpl->_assignInScope('myJs', ((string)$_smarty_tpl->tpl_vars['path_base']->value)."vista/JS/".((string)$_smarty_tpl->tpl_vars['mostrar']->value).".js");
?>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['myJs']->value;?>
"><?php echo '</script'; ?>
>  
    <?php }?>
    
    <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet"/>
    
    <title>.:MiViajante:.</title>
    
    <?php echo '<script'; ?>
 languaje="JavaScript">var $baseUrl='<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
';<?php echo '</script'; ?>
>
</head>
<?php }
}
