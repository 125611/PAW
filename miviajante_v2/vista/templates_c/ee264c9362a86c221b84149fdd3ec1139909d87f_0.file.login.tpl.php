<?php
/* Smarty version 3.1.30, created on 2017-06-17 05:52:33
  from "C:\xampp\htdocs\miviajante_versionSeba\vista\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5944a781011205_48178326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee264c9362a86c221b84149fdd3ec1139909d87f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\miviajante_versionSeba\\vista\\templates\\login.tpl',
      1 => 1497669575,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5944a781011205_48178326 (Smarty_Internal_Template $_smarty_tpl) {
?>

         

<article>
            <form class="formulario" action="controlador/despachador.php/Login/iniciarSesion" method="post">
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
                        <h5>Sos nuevo? -> <a href="controlador/despachador.php/Registro/mostrar">REGISTRARME</a></h5>
                    </li>
                </ul>
            </form>
</article>
<?php }
}
