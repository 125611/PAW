<?php
/* Smarty version 3.1.30, created on 2017-08-19 10:05:17
  from "C:\Develop\AppServ\www\PAW\miviajante_v22\vista\templates\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5998378daa94c1_41061823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4667dff2d0102a9d2729acdc0fe8fdcd66305fb6' => 
    array (
      0 => 'C:\\Develop\\AppServ\\www\\PAW\\miviajante_v22\\vista\\templates\\home.tpl',
      1 => 1503012386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:p_layout.tpl' => 1,
  ),
),false)) {
function content_5998378daa94c1_41061823 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_270235998378daa5641_96279311', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:p_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_270235998378daa5641_96279311 extends Smarty_Internal_Block
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
