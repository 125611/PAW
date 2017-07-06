<?php
/* Smarty version 3.1.30, created on 2017-06-22 17:58:51
  from "C:\xampp\htdocs\miviajante_v14\vista\templates\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594c2f8b936289_70953584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34c2bbfc5b1860b216e49164e0d06bbe1a8f506b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\miviajante_v14\\vista\\templates\\home.tpl',
      1 => 1498164963,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:p_layout.tpl' => 1,
  ),
),false)) {
function content_594c2f8b936289_70953584 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15907594c2f8b9344c0_13081383', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:p_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_15907594c2f8b9344c0_13081383 extends Smarty_Internal_Block
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
