<?php
/* Smarty version 3.1.30, created on 2017-06-17 16:36:23
  from "C:\xampp\htdocs\miviajante_originCancro\vista\templates\p_layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59453e67a9b1f3_20986317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c0b140ff0687b8c8fc3e63d1819695cc1f0fc3c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\miviajante_originCancro\\vista\\templates\\p_layout.tpl',
      1 => 1497710180,
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
function content_59453e67a9b1f3_20986317 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1747959453e67a80037_28144848', 'head');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2571659453e67a8a317_23604288', 'header');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1986959453e67a8ff90_84474225', 'body');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_462659453e67a98315_84839469', 'footer');
?>

</html><?php }
/* {block 'head'} */
class Block_1747959453e67a80037_28144848 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:p_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'head'} */
/* {block 'header'} */
class Block_2571659453e67a8a317_23604288 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:p_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'header'} */
/* {block 'body'} */
class Block_1986959453e67a8ff90_84474225 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
/* {block 'footer'} */
class Block_462659453e67a98315_84839469 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:p_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'footer'} */
}
