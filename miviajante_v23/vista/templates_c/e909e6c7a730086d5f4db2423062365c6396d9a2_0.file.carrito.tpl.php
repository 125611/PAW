<?php
/* Smarty version 3.1.30, created on 2017-08-22 21:35:56
  from "C:\Develop\AppServ\www\PAW\miviajante_v23\vista\templates\carrito.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_599ccdec56b801_79986862',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e909e6c7a730086d5f4db2423062365c6396d9a2' => 
    array (
      0 => 'C:\\Develop\\AppServ\\www\\PAW\\miviajante_v23\\vista\\templates\\carrito.tpl',
      1 => 1503448538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:p_layout.tpl' => 1,
  ),
),false)) {
function content_599ccdec56b801_79986862 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1596599ccdec567988_78914620', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:p_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_1596599ccdec567988_78914620 extends Smarty_Internal_Block
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
    <button id='btnCarrito_cancelar' >Cancelar Pedido</button>
    <button id='btnCarrito_comprar' >Comprar</button>
</article>  
</section>
<?php
}
}
/* {/block 'body'} */
}
