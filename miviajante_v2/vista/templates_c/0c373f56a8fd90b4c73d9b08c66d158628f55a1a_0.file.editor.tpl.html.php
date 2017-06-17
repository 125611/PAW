<?php
/* Smarty version 3.1.30, created on 2017-06-11 17:57:15
  from "C:\AppServ\www\PAW\TP5\pto3\templates\editor.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_593d685b1870b7_00246305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c373f56a8fd90b4c73d9b08c66d158628f55a1a' => 
    array (
      0 => 'C:\\AppServ\\www\\PAW\\TP5\\pto3\\templates\\editor.tpl.html',
      1 => 1497196632,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_593d685b1870b7_00246305 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="editor">
    <h2>Editor de post</h2>
    <form method="post" action="pto4_action.php" enctype="multipart/form-data" id="myForm">
        <?php echo $_smarty_tpl->tpl_vars['myArticulo']->value;?>

        <p>ID: <input name="idPost" type="text" value="<?php echo $_smarty_tpl->tpl_vars['myArticulo']->value['id'];?>
" readonly="readonly"></p>
        <p>Titulo: <input name="titulo" type="text" value="<?php echo $_smarty_tpl->tpl_vars['myArticulo']->value['titulo'];?>
"></p>
        <p>Descripcion: <textarea name="descripcion" form="myForm"><?php echo $_smarty_tpl->tpl_vars['myArticulo']->value['descripcion'];?>
</textarea></p>
        <p><img src="pto4_mostrarImagen.php?id=<?php echo $_smarty_tpl->tpl_vars['myArticulo']->value['id'];?>
">Imagen: <input name="imagen" type="file" /></p>
        <button type="submit">Enviar</button>
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['myArticulo']->value['id'];
$_prefixVariable1=ob_get_clean();
if ($_prefixVariable1 > 0) {?><a href='pto4.php'>CREAR NUEVO ARTICULO</a><?php }?>
    </form>
</section><?php }
}
