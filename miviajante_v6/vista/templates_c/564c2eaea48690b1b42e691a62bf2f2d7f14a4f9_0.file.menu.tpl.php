<?php
/* Smarty version 3.1.30, created on 2017-06-18 19:43:42
  from "C:\AppServ\www\PAW\miviajante_v6\vista\templates\menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5947021ee7d4d5_58718603',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '564c2eaea48690b1b42e691a62bf2f2d7f14a4f9' => 
    array (
      0 => 'C:\\AppServ\\www\\PAW\\miviajante_v6\\vista\\templates\\menu.tpl',
      1 => 1497825703,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:p_layout.tpl' => 1,
  ),
),false)) {
function content_5947021ee7d4d5_58718603 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98275947021ee33143_69849712', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:p_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_98275947021ee33143_69849712 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="menu" class="bodySection"> 
    <nav>
        <ul class='sectorMenu'>
        <li >
            <h2 onclick="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php/Pedidos">Pedidos</h2>
            <p><img src="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
/vista/imagenes/icon_pedidos.png" alt="icono de pedidos">
            En Esta seccion podremos administrar nuestros pedidos, crear nuevos pedidos, modificar o visualizar los ya existentes.</p> 
            <a href='<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php/Productos'>ir</a> 
        </li>
        <li>
            <h2>Productos</h2>
            <p><img src="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
/vista/imagenes/icon_productos.png" alt="icono de productos">
            En Esta seccion podras visualizar todos los productos ofrecidos por el proveedor, asi como la cantidad que dispone en stock y dejar algun comentario de utilidad.</p>
            <a href='<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php/Productos'>ir</a>        
        </li>
        <li>
            <h2>Otros</h2>
            <p><img src="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
/vista/imagenes/icon_pedidos.png" alt="icono de otro">
            En Esta seccion podras visualizar otras cosas (?)</p>
            <a href='<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php/Pedidos'>ir</a>        
        </li>
        </ul>
    </nav>    
    <!---
    <table class="tablaEstilo1">       
        <h3>Tabla de ejemplo css</h3>
   		<tr><th>columna 1</th><th>columna 2</th><th>columna 3</th><th>columna 4</th></tr>
   		<tr><td>data</td><td>data</td><td>data</td><td>data</td></tr>
   		<tr><td>data</td><td>data</td><td>data</td><td>data</td></tr>
   		<tr><td>data</td><td>data</td><td>data</td><td>data</td></tr>
   		<tr><td>data</td><td>data</td><td>data</td><td>data</td></tr> 
        <a href="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php?">otra pagina</a>
    </table>
    --->
</section>
<?php
}
}
/* {/block 'body'} */
}
