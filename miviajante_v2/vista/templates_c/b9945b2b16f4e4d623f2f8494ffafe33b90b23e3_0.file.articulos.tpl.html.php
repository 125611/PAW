<?php
/* Smarty version 3.1.30, created on 2017-06-11 18:33:35
  from "C:\AppServ\www\PAW\TP5\pto4\templates\articulos.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_593d70df92b4b0_55420920',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9945b2b16f4e4d623f2f8494ffafe33b90b23e3' => 
    array (
      0 => 'C:\\AppServ\\www\\PAW\\TP5\\pto4\\templates\\articulos.tpl.html',
      1 => 1497139490,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_593d70df92b4b0_55420920 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="visor">
<h2>Visor del BLOG!</h2>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listaBlog']->value, 'articulo', false, NULL, 'outer', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['articulo']->value) {
?>
   <article>
        <h3><a href="pto4.php?id=<?php echo $_smarty_tpl->tpl_vars['articulo']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['articulo']->value['titulo'];?>
</a></h3>
        <img src="pto4_mostrarImagen.php?id=<?php echo $_smarty_tpl->tpl_vars['articulo']->value['id'];?>
." width=auto height=100px>
        <p><?php echo $_smarty_tpl->tpl_vars['articulo']->value['descripcion'];?>
</p>
    </article>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
    
</section><?php }
}
