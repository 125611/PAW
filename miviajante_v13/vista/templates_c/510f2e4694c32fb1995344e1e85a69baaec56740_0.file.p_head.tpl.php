<?php
/* Smarty version 3.1.30, created on 2017-06-20 18:25:02
  from "/var/www/html/miviajante_v12/vista/templates/p_head.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594992aec702e1_85970647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '510f2e4694c32fb1995344e1e85a69baaec56740' => 
    array (
      0 => '/var/www/html/miviajante_v12/vista/templates/p_head.tpl',
      1 => 1497993705,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594992aec702e1_85970647 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet"/>
    <title>.:MiViajante:.</title>
    <?php echo '<script'; ?>
 languaje="JavaScript">var $baseUrl='<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
';<?php echo '</script'; ?>
>
</head>
<?php }
}
