<?php
/* Smarty version 3.1.30, created on 2017-06-20 19:03:30
  from "/var/www/html/miviajante_v12/vista/templates/pedido.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59499bb25fb2e1_92643584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11411ee93fd56e014124e8bc297e1572cbc69a9d' => 
    array (
      0 => '/var/www/html/miviajante_v12/vista/templates/pedido.tpl',
      1 => 1497995968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:p_layout.tpl' => 1,
  ),
),false)) {
function content_59499bb25fb2e1_92643584 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_116654264959499bb25fa277_73809065', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:p_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_116654264959499bb25fa277_73809065 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
    
          

    <article>
            <p><?php echo $_smarty_tpl->tpl_vars['listaPedidos']->value;?>
</p>
</article>
    

<?php
}
}
/* {/block 'body'} */
}
