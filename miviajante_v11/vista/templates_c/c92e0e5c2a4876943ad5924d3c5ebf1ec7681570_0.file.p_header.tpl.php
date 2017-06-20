<?php
/* Smarty version 3.1.30, created on 2017-06-20 14:23:09
  from "C:\xampp\htdocs\miviajante_v11\vista\templates\p_header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594959fd877ba8_62254478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c92e0e5c2a4876943ad5924d3c5ebf1ec7681570' => 
    array (
      0 => 'C:\\xampp\\htdocs\\miviajante_v11\\vista\\templates\\p_header.tpl',
      1 => 1497979334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594959fd877ba8_62254478 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
<section class='cabecera'>
    <article class='infoMiviajante'>
        <a href="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php"><img id='logo_miviajante' src='<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
vista/imagenes/logo_miviajante.png' alt="logo camion miviajante.esy.es"></a>
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
	    <img id="logoCliente" src='<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
vista/imagenes/icon_cliente.png' alt="icono cliente">
        <ul>
            <li><h3><?php echo $_smarty_tpl->tpl_vars['nombreCliente']->value;?>
</h3></li>
            <li><a href="#" class="enlaceChico">Editar Perfil</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php/Login/cerrarSesion" class="enlaceChico">Cerrar Sesion</a></li>
        </ul>
    </article> 
</section>
<nav <?php if (!isset($_smarty_tpl->tpl_vars['isLogueado']->value) || ($_smarty_tpl->tpl_vars['isLogueado']->value != "true")) {?>
        style="display:none"
     <?php }?>>
    <ul>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php">Inicio</a></li>
        <li><a href="#">Nuevo Pedido</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php/Catalogo/mostrar">Ver Catalogo</a></li>
        <li><a href="#">Mis Pedidos</a></li>				
    </ul>
</nav>
    
</header><?php }
}
