<?php
/* Smarty version 3.1.30, created on 2017-06-20 00:13:08
  from "C:\xampp\htdocs\miviajante_v9\vista\templates\registro.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594892c44ee866_77476958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94945ce3d37c69c86c2b26b8489c4ce32b07637b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\miviajante_v9\\vista\\templates\\registro.tpl',
      1 => 1497928384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:p_layout.tpl' => 1,
  ),
),false)) {
function content_594892c44ee866_77476958 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3099594892c44eaa43_03914487', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:p_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_3099594892c44eaa43_03914487 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

           <article>
            <?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>
            <h2><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</h2>
            <?php }?>
            <form class="formulario" action="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php/Registro/registrar" method="post">
                <ul>
                    <li>
                        <label for="nombre">Ingrese su Nombre: (*)</label>
                        <input class="in" type="text" name="nombre" placeholder="Nombre" required>
                    </li>
                    <li>
                        <label for="apellido">Ingrese su Apellido: (*)</label>
                        <input class="in" type="text" name="apellido" placeholder="Apellido" required>
                    </li>
                    <li>
                        <label for="usuario">Ingrese su Email: (*)</label>
                        <input class="in" type="email" name="email" placeholder="Email" required>
                    </li>
                    <li>
                        <label for="password">Ingrese su Contraseña: (*)</label>
                        <input class="in" type="password" name="pass" placeholder="Contraseña" required>
                    </li>
                    <li>
                        <label for="direccion">Ingrese su Direccion: (*)</label>
                        <input class="in" type="text" name="direccion" placeholder="Direccion" required>
                    </li>
                    <li>
                        <label for="telefono">Ingrese su Telefono: (*)</label>
                        <input class="in" type="text" name="telefono" placeholder="Telefono" required>
                    </li>
                    <li>
                        <input class="boton" type="submit" value="Registrarme">
                        <p id="aclaracion">(*) Campo requerido.<p>
                        <h5><a href="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php" class="enlaceChico">CANCELAR</a></h5>
                    </li>
                    <li>
                        
                    </li>
                </ul>
            </form>
        </article>
        <?php
}
}
/* {/block 'body'} */
}
