<?php
/* Smarty version 3.1.30, created on 2017-07-09 16:40:11
  from "/var/www/html/PAW/miviajante_v18/vista/templates/p_layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5962869b1e4231_18227437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'feddbc802922d8cf01393a3a8c8fb49081ae8aa2' => 
    array (
      0 => '/var/www/html/PAW/miviajante_v18/vista/templates/p_layout.tpl',
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
function content_5962869b1e4231_18227437 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1993040815962869b1da257_90269229', 'head');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18971096705962869b1dda18_40900648', 'header');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13233563125962869b1dfec7_25511623', 'body');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3501282505962869b1e3067_82326477', 'footer');
?>

</html><?php }
/* {block 'head'} */
class Block_1993040815962869b1da257_90269229 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:p_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'head'} */
/* {block 'header'} */
class Block_18971096705962869b1dda18_40900648 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:p_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'header'} */
/* {block 'body'} */
class Block_13233563125962869b1dfec7_25511623 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
/* {block 'footer'} */
class Block_3501282505962869b1e3067_82326477 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:p_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'footer'} */
}
