<?php
/* Smarty version 3.1.30, created on 2017-06-12 14:28:27
  from "C:\AppServ\www\PAW\miviajante\vista\templates\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_593ecf3b27b3e6_71245076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d2b7d3befc164bc38788d8ad8c032f3a4a34ec7' => 
    array (
      0 => 'C:\\AppServ\\www\\PAW\\miviajante\\vista\\templates\\layout.tpl',
      1 => 1497288475,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_593ecf3b27b3e6_71245076 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14662593ecf3b1fe3c1_61515816', 'head');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26375593ecf3b21d7c6_64518153', 'header');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12340593ecf3b238d54_77621318', 'body');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3677593ecf3b26f859_49496751', 'footer');
?>

</html><?php }
/* {block 'head'} */
class Block_14662593ecf3b1fe3c1_61515816 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'head'} */
/* {block 'header'} */
class Block_26375593ecf3b21d7c6_64518153 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'header'} */
/* {block 'body'} */
class Block_12340593ecf3b238d54_77621318 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
no Body found..<?php
}
}
/* {/block 'body'} */
/* {block 'footer'} */
class Block_3677593ecf3b26f859_49496751 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'footer'} */
}
