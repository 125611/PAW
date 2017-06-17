<?php
/* Smarty version 3.1.30, created on 2017-06-14 13:17:20
  from "C:\AppServ\www\PAW\miviajante\vista\templates\p_layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594137606cb326_09990975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6fdac744f9ef464ae092951d15c33e07acfa9b6' => 
    array (
      0 => 'C:\\AppServ\\www\\PAW\\miviajante\\vista\\templates\\p_layout.tpl',
      1 => 1497445839,
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
function content_594137606cb326_09990975 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2917959413760680f96_74426269', 'head');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1282459413760698694_99105287', 'header');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21617594137606abf21_56735269', 'body');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4694594137606c3627_44956725', 'footer');
?>

</html><?php }
/* {block 'head'} */
class Block_2917959413760680f96_74426269 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:p_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'head'} */
/* {block 'header'} */
class Block_1282459413760698694_99105287 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:p_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'header'} */
/* {block 'body'} */
class Block_21617594137606abf21_56735269 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>no Body found..</h2><?php
}
}
/* {/block 'body'} */
/* {block 'footer'} */
class Block_4694594137606c3627_44956725 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:p_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'footer'} */
}
