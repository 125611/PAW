<?php
/* Smarty version 3.1.30, created on 2017-08-30 19:31:31
  from "C:\xampp\htdocs\PAW\miviajante_v24\vista\templates\pedido.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a73cc3619923_30351582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40e548cd7d1e15885fe587de0fdd7c777ba1e2ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PAW\\miviajante_v24\\vista\\templates\\pedido.tpl',
      1 => 1503886834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:p_layout.tpl' => 1,
  ),
),false)) {
function content_59a73cc3619923_30351582 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106259a73cc36154b8_79712252', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:p_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_106259a73cc36154b8_79712252 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
    
<section class="cuerpo">
          
<article>
    <p class="mensaje"><?php echo $_smarty_tpl->tpl_vars['alerta']->value;?>
</p>
    <p class="mensaje"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</p>
</article>          
<article class="listado" <?php if (empty($_smarty_tpl->tpl_vars['listaPedidos']->value)) {?>
        style="display:none"
     <?php }?>>
    <ul>
        
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listaPedidos']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <li class='item_listado_detalle'>
            <a href="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php/Pedidos/listar?idp=<?php echo $_smarty_tpl->tpl_vars['item']->value->getNro();?>
">
                <h1>Numero de pedido: <?php echo $_smarty_tpl->tpl_vars['item']->value->getNro();?>
</h1>
            </a>
            <p>Solicitado el: <?php echo $_smarty_tpl->tpl_vars['item']->value->getFecha_de_Inicio();?>
</p>
            <p>Entregado el: <?php echo $_smarty_tpl->tpl_vars['item']->value->getFecha_de_Entrega();?>
</p>
            <p>El pedido se encuentra en estado: 
                <?php if (($_smarty_tpl->tpl_vars['item']->value->getEstado_pedido() == 1)) {?>
                    NUEVO
                <?php }?>
                <?php if (($_smarty_tpl->tpl_vars['item']->value->getEstado_pedido() == 2)) {?>
                    DESPACHADO
                <?php }?>
                <?php if (($_smarty_tpl->tpl_vars['item']->value->getEstado_pedido() == 3)) {?>
                    ENTREGADO
                <?php }?>
            </p>  
            
            <?php if (isset($_smarty_tpl->tpl_vars['productoSeleccionado']->value) && ($_smarty_tpl->tpl_vars['item']->value->getNro() == $_smarty_tpl->tpl_vars['productoSeleccionado']->value)) {?>
                <ul class='listaDeDetalles'>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listaDescripciones']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                        <li><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
            <?php }?>            
            <h3>Monto total: $<?php echo $_smarty_tpl->tpl_vars['item']->value->getPrecio_total();?>
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
