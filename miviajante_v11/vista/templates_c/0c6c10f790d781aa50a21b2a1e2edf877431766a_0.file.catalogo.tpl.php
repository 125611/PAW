<?php
/* Smarty version 3.1.30, created on 2017-06-20 13:01:10
  from "C:\AppServ\www\PAW\miviajante_v10\vista\templates\catalogo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594946c6b8d414_53159331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c6c10f790d781aa50a21b2a1e2edf877431766a' => 
    array (
      0 => 'C:\\AppServ\\www\\PAW\\miviajante_v10\\vista\\templates\\catalogo.tpl',
      1 => 1497974165,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:p_layout_home.tpl' => 1,
  ),
),false)) {
function content_594946c6b8d414_53159331 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7802594946c6b81894_62970607', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:p_layout_home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_7802594946c6b81894_62970607 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
    
          
<aside>
    <ul>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php/Productos/listar/conectividad">Conectividad</a>
        </li>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php/Productos/listar/perifericos">Perifericos</a>
        </li>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php/Productos/listar/monitores">Monitores</a>
        </li>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php/Productos/listar/impresoras">Impresoras</a>
        </li>
    </ul>
</aside>
    

<?php
}
}
/* {/block 'body'} */
}
