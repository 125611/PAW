<?php
/* Smarty version 3.1.30, created on 2017-06-20 20:11:46
  from "/var/www/html/miviajante_v12/vista/templates/catalogo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5949abb249a326_74192480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4f57dc3aa7a6f791f81f9d6c2b25dc0446dcca0' => 
    array (
      0 => '/var/www/html/miviajante_v12/vista/templates/catalogo.tpl',
      1 => 1497998712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:p_layout.tpl' => 1,
  ),
),false)) {
function content_5949abb249a326_74192480 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14760461665949abb2497c87_67858004', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:p_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_14760461665949abb2497c87_67858004 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
    
<section class="cuerpo">         
<aside>
    <ul>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php/Productos/listar?rubro=conectividad">Conectividad</a>
        </li>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php/Productos/listar?rubro=perifericos">Perifericos</a>
        </li>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php/Productos/listar?rubro=monitores">Monitores</a>
        </li>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php/Productos/listar?rubro=impresoras">Impresoras</a>
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
        <li class='item_listaProductos'>
            <p class='id_producto'><?php echo $_smarty_tpl->tpl_vars['item']->value->getCodigo_producto();?>
</p>
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
