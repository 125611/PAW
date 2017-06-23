<?php
/* Smarty version 3.1.30, created on 2017-06-22 17:59:15
  from "C:\xampp\htdocs\miviajante_v14\vista\templates\catalogo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594c2fa3c9c710_08283498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53f66861204a11e66439ec6e9e8f9e71ddb3ccd4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\miviajante_v14\\vista\\templates\\catalogo.tpl',
      1 => 1498164963,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:p_layout.tpl' => 1,
  ),
),false)) {
function content_594c2fa3c9c710_08283498 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26614594c2fa3c992d7_91626888', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:p_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_26614594c2fa3c992d7_91626888 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
    
<section class="cuerpo">         
<aside>
    <ul>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php/Productos/verCatalogo?rubro=conectividad">Conectividad</a>
        </li>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php/Productos/verCatalogo?rubro=perifericos">Perifericos</a>
        </li>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php/Productos/verCatalogo?rubro=monitores">Monitores</a>
        </li>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php/Productos/verCatalogo?rubro=impresoras">Impresoras</a>
        </li>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php/Productos/verCatalogo">Todos</a>
        </li>
    </ul>
</aside>
   
<article class="listado" <?php if (empty($_smarty_tpl->tpl_vars['listaProductos']->value)) {?>
        style="display:none"
     <?php }?>>
    <ul>
        
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listaProductos']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <li class='item_listaProductos' data-idProducto='<?php echo $_smarty_tpl->tpl_vars['item']->value->getCodigo_producto();?>
'>
            <h1><?php echo $_smarty_tpl->tpl_vars['item']->value->getTitulo();?>
</h1>
            <img src='<?php echo $_smarty_tpl->tpl_vars['item']->value->getRutaImagen();?>
'>
            <p><?php echo $_smarty_tpl->tpl_vars['item']->value->getDescripcion();?>
</p>
            <h3>$<?php echo $_smarty_tpl->tpl_vars['item']->value->getPrecio_unitario();?>
</h3>
        </li>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        
        
    </ul>
</article>
    
</section>
<?php
}
}
/* {/block 'body'} */
}
