<?php
/* Smarty version 3.1.30, created on 2017-06-16 21:32:34
  from "C:\xampp\htdocs\miviajante_originCancro\vista\templates\p_head.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594478a20f34e5_84553557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfb14ad9cd807711e57c51ab1d963245c4c84d90' => 
    array (
      0 => 'C:\\xampp\\htdocs\\miviajante_originCancro\\vista\\templates\\p_head.tpl',
      1 => 1497645357,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594478a20f34e5_84553557 (Smarty_Internal_Template $_smarty_tpl) {
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
</head><?php }
}
