<?php
/* Smarty version 3.1.30, created on 2017-08-31 16:24:51
  from "C:\xampp\htdocs\PAW\miviajante_v24\vista\templates\carrito.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a86283216285_03352731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73378208f4ed95f45dfe598363ce7fc7385ddd03' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PAW\\miviajante_v24\\vista\\templates\\carrito.tpl',
      1 => 1504207483,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:p_layout.tpl' => 1,
  ),
),false)) {
function content_59a86283216285_03352731 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1781859a862832144a1_85469168', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:p_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_1781859a862832144a1_85469168 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
    
<section class="cuerpo">
          
<article>
    <p class="mensaje" id="alerta"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</p> 
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
