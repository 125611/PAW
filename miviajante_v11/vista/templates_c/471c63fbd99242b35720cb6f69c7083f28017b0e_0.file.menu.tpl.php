<?php
/* Smarty version 3.1.30, created on 2017-06-20 13:00:26
  from "C:\AppServ\www\PAW\miviajante_v10\vista\templates\menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5949469a457b42_19665820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '471c63fbd99242b35720cb6f69c7083f28017b0e' => 
    array (
      0 => 'C:\\AppServ\\www\\PAW\\miviajante_v10\\vista\\templates\\menu.tpl',
      1 => 1497974165,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5949469a457b42_19665820 (Smarty_Internal_Template $_smarty_tpl) {
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
