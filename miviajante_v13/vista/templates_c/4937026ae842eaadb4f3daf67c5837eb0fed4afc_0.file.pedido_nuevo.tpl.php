<?php
/* Smarty version 3.1.30, created on 2017-06-20 18:49:28
  from "/var/www/html/miviajante_v12/vista/templates/pedido_nuevo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59499868b50087_27601250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4937026ae842eaadb4f3daf67c5837eb0fed4afc' => 
    array (
      0 => '/var/www/html/miviajante_v12/vista/templates/pedido_nuevo.tpl',
      1 => 1497993705,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:p_layout.tpl' => 1,
  ),
),false)) {
function content_59499868b50087_27601250 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148068945459499868b4f0a5_47836309', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:p_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_148068945459499868b4f0a5_47836309 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
    
          

    <article>
            <p>nuevo pedido</p>
</article>
    

<?php
}
}
/* {/block 'body'} */
}
