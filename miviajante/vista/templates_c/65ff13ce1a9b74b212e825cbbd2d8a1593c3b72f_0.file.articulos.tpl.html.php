<?php
/* Smarty version 3.1.30, created on 2017-06-11 02:22:23
  from "C:\AppServ\www\PAW\TP5\pto3\templates\articulos.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_593c8d3fc3f5a6_57389763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65ff13ce1a9b74b212e825cbbd2d8a1593c3b72f' => 
    array (
      0 => 'C:\\AppServ\\www\\PAW\\TP5\\pto3\\templates\\articulos.tpl.html',
      1 => 1497139490,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_593c8d3fc3f5a6_57389763 (Smarty_Internal_Template $_smarty_tpl) {
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
