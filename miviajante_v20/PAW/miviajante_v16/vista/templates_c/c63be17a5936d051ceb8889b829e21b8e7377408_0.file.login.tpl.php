<?php
/* Smarty version 3.1.30, created on 2017-07-09 16:40:11
  from "/var/www/html/PAW/miviajante_v18/vista/templates/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5962869b1ce9b7_10612002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c63be17a5936d051ceb8889b829e21b8e7377408' => 
    array (
      0 => '/var/www/html/PAW/miviajante_v18/vista/templates/login.tpl',
      1 => 1499629083,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:p_layout.tpl' => 1,
  ),
),false)) {
function content_5962869b1ce9b7_10612002 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11343937125962869b1cbe59_65589085', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:p_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_11343937125962869b1cbe59_65589085 extends Smarty_Internal_Block
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
