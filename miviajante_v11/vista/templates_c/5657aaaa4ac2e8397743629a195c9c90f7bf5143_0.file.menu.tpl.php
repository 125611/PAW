<?php
/* Smarty version 3.1.30, created on 2017-06-19 20:34:15
  from "C:\xampp\htdocs\miviajante_v8\vista\templates\menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59485f7775b097_34977955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5657aaaa4ac2e8397743629a195c9c90f7bf5143' => 
    array (
      0 => 'C:\\xampp\\htdocs\\miviajante_v8\\vista\\templates\\menu.tpl',
      1 => 1497915197,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:p_layout.tpl' => 1,
  ),
),false)) {
function content_59485f7775b097_34977955 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_916159485f77759b37_30649933', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:p_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_916159485f77759b37_30649933 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

   
<nav>
    <ul>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php">Inicio</a></li>
        <li><a href="">Crear Pedido</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php/Productos">Ver Productos</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php/Pedidos">Ver Pedidos</a></li>				
    </ul>
</nav>
    

<?php
}
}
/* {/block 'body'} */
}
