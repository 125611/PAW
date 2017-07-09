<?php
/* Smarty version 3.1.30, created on 2017-07-09 16:47:59
  from "/var/www/html/PAW/miviajante_v16/vista/templates/p_layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5962886f796230_72483149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c31e67f5dd99548a77b57f9cfb106d4ef68c8b7' => 
    array (
      0 => '/var/www/html/PAW/miviajante_v16/vista/templates/p_layout.tpl',
      1 => 1499629083,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:p_head.tpl' => 1,
    'file:p_header.tpl' => 1,
    'file:p_footer.tpl' => 1,
  ),
),false)) {
function content_5962886f796230_72483149 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9978260625962886f78b751_39800310', 'head');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8712655995962886f78ed99_65033091', 'header');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9738430995962886f791250_92956782', 'body');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15613794525962886f794c37_16081678', 'footer');
?>

</html><?php }
/* {block 'head'} */
class Block_9978260625962886f78b751_39800310 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:p_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'head'} */
/* {block 'header'} */
class Block_8712655995962886f78ed99_65033091 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:p_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'header'} */
/* {block 'body'} */
class Block_9738430995962886f791250_92956782 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
/* {block 'footer'} */
class Block_15613794525962886f794c37_16081678 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:p_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'footer'} */
}
