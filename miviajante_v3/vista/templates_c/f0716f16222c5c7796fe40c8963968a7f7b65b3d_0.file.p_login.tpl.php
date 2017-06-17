<?php
/* Smarty version 3.1.30, created on 2017-06-12 14:45:14
  from "C:\AppServ\www\PAW\miviajante\vista\templates\p_login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_593ed32abffe45_11466586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0716f16222c5c7796fe40c8963968a7f7b65b3d' => 
    array (
      0 => 'C:\\AppServ\\www\\PAW\\miviajante\\vista\\templates\\p_login.tpl',
      1 => 1497289451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_593ed32abffe45_11466586 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13718593ed32abf8143_07843274', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_13718593ed32abf8143_07843274 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="login" class="bodySection">
    <header>
        <h1>Bienvenido a MiViajante!</h1>
        <h2>Ingrese su contraseña para ingresar</h2>
    </header>
    <section>
        <form action="index.php/login/iniciarSesion" method="POST">
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
