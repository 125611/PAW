<?php
/* Smarty version 3.1.30, created on 2017-06-19 19:13:42
  from "C:\xampp\htdocs\miviajante_v8\vista\templates\p_head.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59484c968bd645_24253927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c28591bf0866ed99f706e25f8e88ab76f48e416f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\miviajante_v8\\vista\\templates\\p_head.tpl',
      1 => 1497910232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59484c968bd645_24253927 (Smarty_Internal_Template $_smarty_tpl) {
?>
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet"/>
    <title>.:MiViajante:.</title>
</head>
<?php }
}
