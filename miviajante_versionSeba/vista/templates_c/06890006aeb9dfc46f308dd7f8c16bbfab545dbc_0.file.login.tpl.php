<?php
/* Smarty version 3.1.30, created on 2017-06-16 21:32:34
  from "C:\xampp\htdocs\miviajante_originCancro\vista\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594478a2083851_82283637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06890006aeb9dfc46f308dd7f8c16bbfab545dbc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\miviajante_originCancro\\vista\\templates\\login.tpl',
      1 => 1497645357,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:p_layout.tpl' => 1,
  ),
),false)) {
function content_594478a2083851_82283637 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18903594478a207d3f1_48985601', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:p_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_18903594478a207d3f1_48985601 extends Smarty_Internal_Block
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
