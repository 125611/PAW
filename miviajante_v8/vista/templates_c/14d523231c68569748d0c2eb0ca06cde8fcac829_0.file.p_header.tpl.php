<?php
/* Smarty version 3.1.30, created on 2017-06-19 18:20:55
  from "/var/www/html/miviajante/vista/templates/p_header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594840373fa632_76095531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14d523231c68569748d0c2eb0ca06cde8fcac829' => 
    array (
      0 => '/var/www/html/miviajante/vista/templates/p_header.tpl',
      1 => 1497898523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594840373fa632_76095531 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
    <article class='infoMiviajante'>
        <img id='logo_miviajante' src='<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
vista/imagenes/logo_miviajante.png' alt="logo camion miviajante.esy.es">
        <h2>Bienvenidos al Sitio Oficial de <br><span>"Mi Viajante"</span></h2>
    </article> 
    
    <article class='infoEmpresa'>
        <img id='logo_empresa' src='<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
vista/imagenes/logo_empresa.png' alt="logo de la empresa">
         <h2>Tu eslogan<br><span>Tu Empresa</span></h2>        
    </article>  
    
    
    <article class='infoCliente'
             <?php if (!isset($_smarty_tpl->tpl_vars['isLogueado']->value) || ($_smarty_tpl->tpl_vars['isLogueado']->value != "true")) {?>
             style="display:none"
             <?php }?>
             >
	<img id='logo_cliente' src='<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
vista/imagenes/icon_cliente.png' alt="icono cliente">
        <h2><?php echo $_smarty_tpl->tpl_vars['nombreCliente']->value;?>
</h2>
        <ul>
            <li><a href="#">Editar perfil</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php/Login/cerrarSesion">cerrar sesion</a></li>
        </ul>
    </article> 
    
</header><?php }
}
