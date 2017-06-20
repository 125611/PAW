<?php
/* Smarty version 3.1.30, created on 2017-06-19 18:54:05
  from "/var/www/html/miviajante/vista/templates/menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594847fdb4e051_07227869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31becd5b03954ccf58a4002a4d54ce0fc17d56a7' => 
    array (
      0 => '/var/www/html/miviajante/vista/templates/menu.tpl',
      1 => 1497909168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:p_layout.tpl' => 1,
  ),
),false)) {
function content_594847fdb4e051_07227869 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_574198549594847fdb4aeb8_67860793', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:p_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_574198549594847fdb4aeb8_67860793 extends Smarty_Internal_Block
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
