<?php
/* Smarty version 3.1.30, created on 2017-06-15 10:56:15
  from "C:\AppServ\www\PAW\miviajante\vista\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594291ff7d87f8_12577123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0ee99c583ce52f2330a929442924d00a33703f2' => 
    array (
      0 => 'C:\\AppServ\\www\\PAW\\miviajante\\vista\\templates\\login.tpl',
      1 => 1497534971,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:p_layout.tpl' => 1,
  ),
),false)) {
function content_594291ff7d87f8_12577123 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30061594291ff7ccc76_48674291', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:p_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_30061594291ff7ccc76_48674291 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="login" class="bodySection">
    <section>
        <h2>Login</h2>
        <form action="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php/Login/iniciarSesion" method="POST">
            <?php if ($_smarty_tpl->tpl_vars['mensaje']->value != '') {?>
                <h3 class='mensajeError'><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</h3>
            <?php }?>
            <input name="usu" type="text" placeholder="Usuario">
            <input name="pas" type="text" placeholder="Clave">   
            <button type="submit">Ingresar</button>
        </form> 
    </section>
</section>
<?php
}
}
/* {/block 'body'} */
}
