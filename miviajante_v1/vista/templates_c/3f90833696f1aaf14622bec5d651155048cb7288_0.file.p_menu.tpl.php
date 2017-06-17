<?php
/* Smarty version 3.1.30, created on 2017-06-12 14:48:18
  from "C:\AppServ\www\PAW\miviajante\vista\templates\p_menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_593ed3e26f0be2_85114471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f90833696f1aaf14622bec5d651155048cb7288' => 
    array (
      0 => 'C:\\AppServ\\www\\PAW\\miviajante\\vista\\templates\\p_menu.tpl',
      1 => 1497288486,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_593ed3e26f0be2_85114471 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_24372593ed3e26e11e2_55276079', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_24372593ed3e26e11e2_55276079 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="menu" class="bodySection">     
    <table class="tablaEstilo1">       
   		<tr><th>columna 1</th><th>columna 2</th><th>columna 3</th><th>columna 4</th></tr>
   		<tr><td>data</td><td>data</td><td>data</td><td>data</td></tr>
   		<tr><td>data</td><td>data</td><td>data</td><td>data</td></tr>
   		<tr><td>data</td><td>data</td><td>data</td><td>data</td></tr>
   		<tr><td>data</td><td>data</td><td>data</td><td>data</td></tr> 
        <a href="index.php?p=header">otra pagina</a>
    </table>
</section>
<?php
}
}
/* {/block 'body'} */
}
