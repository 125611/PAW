<?php
/* Smarty version 3.1.30, created on 2017-08-22 12:58:08
  from "C:\Develop\AppServ\www\PAW\miviajante_v23\vista\templates\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_599c54904d51c9_86178765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03665027f76a05b207c0d24d9b39f129d34c7235' => 
    array (
      0 => 'C:\\Develop\\AppServ\\www\\PAW\\miviajante_v23\\vista\\templates\\home.tpl',
      1 => 1503012386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:p_layout.tpl' => 1,
  ),
),false)) {
function content_599c54904d51c9_86178765 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5697599c54904d51c9_95155547', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:p_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_5697599c54904d51c9_95155547 extends Smarty_Internal_Block
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
