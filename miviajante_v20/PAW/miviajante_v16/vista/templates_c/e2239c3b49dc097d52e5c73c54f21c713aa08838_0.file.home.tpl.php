<?php
/* Smarty version 3.1.30, created on 2017-07-08 15:02:55
  from "C:\xampp\htdocs\paw\miviajante_v16\vista\templates\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59611e4f7266c9_59692871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2239c3b49dc097d52e5c73c54f21c713aa08838' => 
    array (
      0 => 'C:\\xampp\\htdocs\\paw\\miviajante_v16\\vista\\templates\\home.tpl',
      1 => 1499534547,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:p_layout.tpl' => 1,
  ),
),false)) {
function content_59611e4f7266c9_59692871 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_595559611e4f722fd8_22184160', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:p_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_595559611e4f722fd8_22184160 extends Smarty_Internal_Block
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
