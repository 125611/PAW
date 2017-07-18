<?php
/* Smarty version 3.1.30, created on 2017-07-17 09:17:10
  from "C:\xampp\htdocs\PAW\miviajante_v21\vista\templates\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596caac6ea2db9_09684841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8205e409eb6ff0c49df2e6166fd4956e64109ce9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PAW\\miviajante_v21\\vista\\templates\\home.tpl',
      1 => 1500228363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:p_layout.tpl' => 1,
  ),
),false)) {
function content_596caac6ea2db9_09684841 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6401596caac6ea0b53_76551167', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:p_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_6401596caac6ea0b53_76551167 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section class="cuerpo">   
    <article id="galeria">
        <button class="anterior">&#60;</button>
        <img src="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
vista/imagenes/insumos_0.png" id="imagen" alt="">
        <button class="siguiente">&#62;</button>
    </article>
</section> 
<?php
}
}
/* {/block 'body'} */
}
