<?php
/* Smarty version 3.1.30, created on 2017-06-19 21:00:04
  from "C:\xampp\htdocs\miviajante_v9\vista\templates\p_head.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59486584333f59_95357978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07f0f39a8c1513ac64a9221f231dd5f1d7dfea60' => 
    array (
      0 => 'C:\\xampp\\htdocs\\miviajante_v9\\vista\\templates\\p_head.tpl',
      1 => 1497910232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59486584333f59_95357978 (Smarty_Internal_Template $_smarty_tpl) {
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
