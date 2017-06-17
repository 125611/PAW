<?php
/* Smarty version 3.1.30, created on 2017-06-16 11:41:18
  from "C:\AppServ\www\PAW\miviajante\vista\templates\p_header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5943ee0ec3e898_97031653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e80b0ab7e8c5355968c3b618b2ff78febe8c7fc1' => 
    array (
      0 => 'C:\\AppServ\\www\\PAW\\miviajante\\vista\\templates\\p_header.tpl',
      1 => 1497622400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5943ee0ec3e898_97031653 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
    <article class='infoEmpresa'>
        <img id='logo_empresa' src='<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
/vista/SRC/logo_proveedor.png' alt="logo de la empresa">
        <h1>El Martillo</h1>
        <address>Tel: (02346) 15-536248  -  <a href="mailto:nombreProveedor@miviajante.esy.es">elmartillo@miviajante.esy.es</a>
        </address>
        
    </article>   
    <article class='infoMiviajante'>
        <img id='logo_miviajante' src='<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
/vista/SRC/camion.png' alt="logo camion miviajante.esy.es">
        <h2>Mi Viajante</h2>
        <address><a href="mailto:info@miviajante.esy.es">info@miviajante.esy.es</a>
        </address>
    </article> 
    <article class='infoCliente'>
        <img id='logo_miviajante' src='<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
/vista/SRC/icon_cliente.png' alt="logo camion miviajante.esy.es">
        <h2><?php echo $_smarty_tpl->tpl_vars['nombreCliente']->value;?>
</h2>
        <ul>
            <li><a href="#">Editar perfil</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php/Login/cerrarSesion">cerrar sesion</a></li>
        </ol>
    </article> 
</header><?php }
}
