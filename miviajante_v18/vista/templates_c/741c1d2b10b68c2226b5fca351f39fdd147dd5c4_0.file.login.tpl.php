<?php
/* Smarty version 3.1.30, created on 2017-07-08 15:02:01
  from "C:\xampp\htdocs\Paw\miviajante_v16\vista\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59611e19c130a3_13598192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '741c1d2b10b68c2226b5fca351f39fdd147dd5c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Paw\\miviajante_v16\\vista\\templates\\login.tpl',
      1 => 1499534547,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:p_layout.tpl' => 1,
  ),
),false)) {
function content_59611e19c130a3_13598192 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3219459611e19c0eb06_39147265', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:p_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_3219459611e19c0eb06_39147265 extends Smarty_Internal_Block
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
index.php/LoginGoogle/iniciarSesion" class="enlaceChico">Iniciar con cuenta de Google</a></h5>
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
