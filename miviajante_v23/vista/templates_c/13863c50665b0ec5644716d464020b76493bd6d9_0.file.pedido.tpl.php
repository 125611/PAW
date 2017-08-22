<?php
/* Smarty version 3.1.30, created on 2017-07-17 22:26:30
  from "C:\xampp\htdocs\PAW\miviajante_v21\vista\templates\pedido.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596d63c6695740_57433953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13863c50665b0ec5644716d464020b76493bd6d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PAW\\miviajante_v21\\vista\\templates\\pedido.tpl',
      1 => 1500228363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:p_layout.tpl' => 1,
  ),
),false)) {
function content_596d63c6695740_57433953 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8458596d63c6693932_15906675', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:p_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_8458596d63c6693932_15906675 extends Smarty_Internal_Block
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
        <li class='item_listado'>
            <h1>Numero de pedido: <?php echo $_smarty_tpl->tpl_vars['item']->value->getNro();?>
</h1>
            <p>Solicitado el: <?php echo $_smarty_tpl->tpl_vars['item']->value->getFecha_de_Inicio();?>
</p>
            <p>Entregado el: <?php echo $_smarty_tpl->tpl_vars['item']->value->getFecha_de_Entrega();?>
</p>
            <p>El pedido se encuentra: <?php echo $_smarty_tpl->tpl_vars['item']->value->getEstado_pedido();?>
</p>
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
