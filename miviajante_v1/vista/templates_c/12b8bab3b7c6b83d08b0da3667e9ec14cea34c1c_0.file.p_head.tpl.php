<?php
/* Smarty version 3.1.30, created on 2017-06-16 10:49:07
  from "C:\AppServ\www\PAW\miviajante\vista\templates\p_head.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5943e1d31b60c7_26541693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12b8bab3b7c6b83d08b0da3667e9ec14cea34c1c' => 
    array (
      0 => 'C:\\AppServ\\www\\PAW\\miviajante\\vista\\templates\\p_head.tpl',
      1 => 1497620847,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5943e1d31b60c7_26541693 (Smarty_Internal_Template $_smarty_tpl) {
?>
<head>
    <meta charset="utf-8">
    <title>TP JAVASCRIPT</title>
    <meta name="description" content="Trabajo practico de javascript UNLU-PAW 2017">
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
vista/JS/main.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
vista/JS/<?php echo $_smarty_tpl->tpl_vars['mostrar']->value;?>
.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
vista/CSS/estilo.css">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
</head><?php }
}
