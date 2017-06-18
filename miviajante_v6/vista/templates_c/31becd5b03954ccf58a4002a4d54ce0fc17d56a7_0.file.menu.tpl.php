<?php
/* Smarty version 3.1.30, created on 2017-06-18 03:10:06
  from "/var/www/html/miviajante/vista/templates/menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5946193e7f0040_27917955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31becd5b03954ccf58a4002a4d54ce0fc17d56a7' => 
    array (
      0 => '/var/www/html/miviajante/vista/templates/menu.tpl',
      1 => 1497766112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:p_layout.tpl' => 1,
  ),
),false)) {
function content_5946193e7f0040_27917955 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10649766955946193e7eede6_51405947', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:p_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_10649766955946193e7eede6_51405947 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<nav>
    <p>MOSTRAR ACA EL MENU PARA UN USUARIO LOGUEADO</p>
</nav>
<?php
}
}
/* {/block 'body'} */
}
