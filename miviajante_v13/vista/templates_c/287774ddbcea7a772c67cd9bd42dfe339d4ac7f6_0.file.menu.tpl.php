<?php
/* Smarty version 3.1.30, created on 2017-06-20 10:40:55
  from "C:\xampp\htdocs\miviajante_v9\vista\templates\menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594925e7973450_26489389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '287774ddbcea7a772c67cd9bd42dfe339d4ac7f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\miviajante_v9\\vista\\templates\\menu.tpl',
      1 => 1497965993,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594925e7973450_26489389 (Smarty_Internal_Template $_smarty_tpl) {
?>
  
<nav>
    <ul>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php">Inicio</a></li>
        <li><a href="#">Nuevo Pedido</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php/Catalogo/mostrar">Ver Catalogo</a></li>
        <li><a href="#">Mis Pedidos</a></li>				
    </ul>
</nav>
    
<?php }
}
