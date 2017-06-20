<?php
/* Smarty version 3.1.30, created on 2017-06-20 13:43:21
  from "C:\AppServ\www\PAW\miviajante_v10\vista\templates\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594950a95d9b73_86682789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af3d0f026d6e903b962976beae1c129915f43ad6' => 
    array (
      0 => 'C:\\AppServ\\www\\PAW\\miviajante_v10\\vista\\templates\\home.tpl',
      1 => 1497976998,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:p_layout.tpl' => 1,
  ),
),false)) {
function content_594950a95d9b73_86682789 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6702594950a95cdff6_70497580', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:p_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_6702594950a95cdff6_70497580 extends Smarty_Internal_Block
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
