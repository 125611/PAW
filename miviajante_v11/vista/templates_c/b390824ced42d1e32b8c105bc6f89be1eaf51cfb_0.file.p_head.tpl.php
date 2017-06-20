<?php
/* Smarty version 3.1.30, created on 2017-06-19 18:20:55
  from "/var/www/html/miviajante/vista/templates/p_head.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594840373ec940_57959809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b390824ced42d1e32b8c105bc6f89be1eaf51cfb' => 
    array (
      0 => '/var/www/html/miviajante/vista/templates/p_head.tpl',
      1 => 1497898523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594840373ec940_57959809 (Smarty_Internal_Template $_smarty_tpl) {
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
