<?php
/* Smarty version 3.1.30, created on 2017-07-17 23:44:55
  from "C:\xampp\htdocs\PAW\miviajante_v21\vista\templates\catalogo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596d76277e4a71_72656099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fea2c25d6c50c3da0e5bce0992d6ffe9ab53bc16' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PAW\\miviajante_v21\\vista\\templates\\catalogo.tpl',
      1 => 1500345893,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:p_layout.tpl' => 1,
  ),
),false)) {
function content_596d76277e4a71_72656099 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8865596d76277dd635_37029273', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:p_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_8865596d76277dd635_37029273 extends Smarty_Internal_Block
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
        <li class='item_listado' >
           <section class="imagen">
               <img src='<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
vista/imagenes/<?php echo $_smarty_tpl->tpl_vars['item']->value->getRutaImagen();?>
'>
           </section>
           <section class="descripcion">
                <h1><?php echo $_smarty_tpl->tpl_vars['item']->value->getTitulo();?>
</h1>
                <p><?php echo $_smarty_tpl->tpl_vars['item']->value->getDescripcion();?>
</p>
                <h3>$<?php echo $_smarty_tpl->tpl_vars['item']->value->getPrecio_unitario();?>
</h3>
           </section>
            <section class="botones" data-idProducto='<?php echo $_smarty_tpl->tpl_vars['item']->value->getCodigo_producto();?>
'>
                <p>Cantidad de unidades en mi Carrito:</p>
            </section>
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
