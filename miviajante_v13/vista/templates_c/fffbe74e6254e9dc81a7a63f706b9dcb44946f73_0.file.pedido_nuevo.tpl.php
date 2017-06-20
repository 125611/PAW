<?php
/* Smarty version 3.1.30, created on 2017-06-20 16:20:59
  from "C:\xampp\htdocs\miviajante_v11\vista\templates\pedido_nuevo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5949759bd96740_25361637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fffbe74e6254e9dc81a7a63f706b9dcb44946f73' => 
    array (
      0 => 'C:\\xampp\\htdocs\\miviajante_v11\\vista\\templates\\pedido_nuevo.tpl',
      1 => 1497986456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:p_layout.tpl' => 1,
  ),
),false)) {
function content_5949759bd96740_25361637 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_280195949759bd7db50_60174924', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:p_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_280195949759bd7db50_60174924 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
    
          

    <article>
            <form class="formulario" action="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php/PedidoNuevo/crear" method="post">
                <ul>                                    
                    <li>
                        <label for="cantidad">Ingrese la Cantidad: (*)</label>
                        <input class="in" type="number" name="cantidad" placeholder="0" required>
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
                        <h5>Sos nuevo? -> <a href="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php/Registro/mostrar" class="enlaceChico">REGISTRATE</a></h5>
                    </li>
                </ul>
            </form>
</article>

    

<?php
}
}
/* {/block 'body'} */
}
