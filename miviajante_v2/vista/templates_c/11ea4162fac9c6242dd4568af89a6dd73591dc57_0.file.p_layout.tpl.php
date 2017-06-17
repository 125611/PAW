<?php
/* Smarty version 3.1.30, created on 2017-06-17 05:56:06
  from "C:\xampp\htdocs\miviajante_versionSeba\vista\templates\p_layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5944a85678ee91_91846892',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11ea4162fac9c6242dd4568af89a6dd73591dc57' => 
    array (
      0 => 'C:\\xampp\\htdocs\\miviajante_versionSeba\\vista\\templates\\p_layout.tpl',
      1 => 1497671745,
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
function content_5944a85678ee91_91846892 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113405944a85675d573_88332393', 'head');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134615944a856767bb6_10548450', 'header');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_311465944a856782092_52863696', 'login');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188435944a85678bb17_47203872', 'footer');
?>

</html><?php }
/* {block 'head'} */
class Block_113405944a85675d573_88332393 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:p_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'head'} */
/* {block 'header'} */
class Block_134615944a856767bb6_10548450 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:p_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'header'} */
/* {block 'login'} */
class Block_311465944a856782092_52863696 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo $_smarty_tpl->tpl_vars['body']->value;
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
/* {/block 'login'} */
/* {block 'footer'} */
class Block_188435944a85678bb17_47203872 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:p_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'footer'} */
}
