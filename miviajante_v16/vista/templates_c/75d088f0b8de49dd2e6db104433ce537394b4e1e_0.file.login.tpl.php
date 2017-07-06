<?php
/* Smarty version 3.1.30, created on 2017-07-05 23:01:23
  from "C:\AppServ\www\PAW\miviajante_v16\vista\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595d99f3408c64_57506772',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75d088f0b8de49dd2e6db104433ce537394b4e1e' => 
    array (
      0 => 'C:\\AppServ\\www\\PAW\\miviajante_v16\\vista\\templates\\login.tpl',
      1 => 1499306481,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:p_layout.tpl' => 1,
  ),
),false)) {
function content_595d99f3408c64_57506772 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18023595d99f33fd0e1_92000067', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:p_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_18023595d99f33fd0e1_92000067 extends Smarty_Internal_Block
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
index.php/LoginGoogle/iniciarSesion">iniciar con cuenta de Google</a></h5>h5>
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
