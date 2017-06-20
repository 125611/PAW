<?php
/* Smarty version 3.1.30, created on 2017-06-20 11:28:25
  from "C:\xampp\htdocs\miviajante_v9\vista\templates\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594931093fc7a8_53163414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd150c0cbe9a754c7b43dfbfea00343930607679f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\miviajante_v9\\vista\\templates\\home.tpl',
      1 => 1497968898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:p_layout_home.tpl' => 1,
  ),
),false)) {
function content_594931093fc7a8_53163414 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27728594931093fb3e5_83154704', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:p_layout_home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_27728594931093fb3e5_83154704 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
    

            <article id="galeria">
                <button class="anterior">&#60;</button>
                <img src="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
vista/imagenes/insumos_0.png" id="imagen" alt="">
                <button class="siguiente">&#62;</button>
            </article>


<?php
}
}
/* {/block 'body'} */
}
