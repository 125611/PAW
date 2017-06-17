<?php
/* Smarty version 3.1.30, created on 2017-06-17 16:50:30
  from "C:\xampp\htdocs\miviajante_originCancro\vista\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594541b6a34747_06017857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06890006aeb9dfc46f308dd7f8c16bbfab545dbc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\miviajante_originCancro\\vista\\templates\\login.tpl',
      1 => 1497711026,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:p_layout.tpl' => 1,
  ),
),false)) {
function content_594541b6a34747_06017857 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4949594541b6a32303_79071675', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:p_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_4949594541b6a32303_79071675 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<article>
            <form class="formulario" action="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
controlador/despachador.php/Login/iniciarSesion" method="post">
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
                        <input class="boton" type="submit" value="INICIAR SESION">
                        <p id="aclaracion">(*) Campo requerido.<p>
                        <h5>Sos nuevo? -> <a href="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
/controlador/despachador.php/Registro/mostrar">REGISTRATE</a></h5>
                    </li>
                </ul>
            </form>
</article>
<?php
}
}
/* {/block 'body'} */
}
