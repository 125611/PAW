<?php
/* Smarty version 3.1.30, created on 2017-08-30 19:30:54
  from "C:\xampp\htdocs\PAW\miviajante_v24\vista\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a73c9e5571d6_32062730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa686011b10aed2e7bc6b5e106275b8f1500b5c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PAW\\miviajante_v24\\vista\\templates\\login.tpl',
      1 => 1503886834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:p_layout.tpl' => 1,
  ),
),false)) {
function content_59a73c9e5571d6_32062730 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1567859a73c9e5521c2_39620556', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:p_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_1567859a73c9e5521c2_39620556 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section class="cuerpo">
<article>
           <p class="mensaje"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</p>
            <form class="formulario" action="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php/Login/iniciarSesion" method="post">
                <ul>                                    
                    
                    <li>
                        <label for="usuario">Ingrese su Email: (*)</label>
                        <input class="in" type="email" name="usuario" placeholder="Email" required>
                    </li>
                    <li>
                        <label for="password">Ingrese su Contraseña: (*)</label>
                        <input 
                            class="in" 
                            type="password" 
                            name="password" 
                            placeholder="Contraseña" 
                            required>
                    </li>
                    <li>
                        <input class="boton" type="submit" value="Iniciar Sesion">
                        <p id="aclaracion">(*) Campo requerido.<p>
                        <h5><a href="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php/LoginGoogle/iniciarSesion" class="enlaceGoogle">ENTRAR CON GOOGLE</a></h5>
                        <h5>Sos nuevo? -> <a href="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php/Registro/mostrar" class="enlaceChico">REGISTRATE</a></h5>
                    </li>
                </ul>
            </form>
            
</article>
</section>
<?php
}
}
/* {/block 'body'} */
}
