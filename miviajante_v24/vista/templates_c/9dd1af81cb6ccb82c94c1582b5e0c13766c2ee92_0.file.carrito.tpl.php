<?php
/* Smarty version 3.1.30, created on 2017-08-19 21:24:10
  from "C:\Develop\AppServ\www\PAW\miviajante_v22\vista\templates\carrito.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5998d6aaa0f005_83290000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9dd1af81cb6ccb82c94c1582b5e0c13766c2ee92' => 
    array (
      0 => 'C:\\Develop\\AppServ\\www\\PAW\\miviajante_v22\\vista\\templates\\carrito.tpl',
      1 => 1503188618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:p_layout.tpl' => 1,
  ),
),false)) {
function content_5998d6aaa0f005_83290000 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150865998d6aaa0b183_44774610', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:p_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_150865998d6aaa0b183_44774610 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
    
<section class="cuerpo">
          
<article>
    <?php if (empty($_smarty_tpl->tpl_vars['listaCarrito']->value)) {?>
    <p class="mensaje">Elige los productos que quieras comprar desde el catalogo..</p>
    <?php } else { ?>
    <p class="mensaje">Detalle de tu compra:</p>
    <?php }?> 
</article>  
    
<article class="listadoCarrito" <?php if (empty($_smarty_tpl->tpl_vars['listaCarrito']->value)) {?>style="display:none"
     <?php }?>>
    
    <ul>        
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listaCarrito']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <li class='item_listadoCarrito'>
            <p><?php echo $_smarty_tpl->tpl_vars['item']->value->getTitulo();?>
</p>
            <p>($<?php echo $_smarty_tpl->tpl_vars['item']->value->getPrecio_unitario();?>
 c/u)</p>
            <p>x<?php echo $_smarty_tpl->tpl_vars['listaCarritoCantidad']->value[$_smarty_tpl->tpl_vars['item']->value->getCodigo_producto()];?>
</p>
            <p>$<?php echo $_smarty_tpl->tpl_vars['item']->value->getPrecio_unitario()*$_smarty_tpl->tpl_vars['listaCarritoCantidad']->value[$_smarty_tpl->tpl_vars['item']->value->getCodigo_producto()];?>
</p>
        </li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
   
        <li class='item_listadoCarrito listadoCarrito_TOTAL'>
            <p>TOTAL</p>
            <p>$<?php echo $_smarty_tpl->tpl_vars['totalCompra']->value;?>
</p>
        </li>
    </ul>
</article>  
</section>
<?php
}
}
/* {/block 'body'} */
}
