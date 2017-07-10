<?php
/* Smarty version 3.1.30, created on 2017-07-10 19:41:55
  from "C:\xampp\htdocs\PAW\miviajante_v16\vista\templates\p_header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596402b3b8bcc0_45895025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '224435d3be9d40a6185c9091167685da3d6e3649' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PAW\\miviajante_v16\\vista\\templates\\p_header.tpl',
      1 => 1499726244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596402b3b8bcc0_45895025 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
<section class='cabecera'>
    <article class='infoMiviajante'>
        <a href="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php"><img id='logo_miviajante' src='<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
vista/imagenes/logo_miviajante.png' alt="logo camion miviajante.esy.es"></a>
        <h2>Bienvenidos a <br><span>"Mi Viajante"</span></h2>
    </article> 
    
    <article class='infoEmpresa'>
        <a href="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php"><img id='logo_empresa' src='<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
vista/imagenes/logo_empresa.png' alt="logo de la empresa"></a>
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
            <!--<li><a href="#" class="enlaceChico">Editar Perfil</a></li>-->
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
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php/PedidoNuevo/nuevo">Nuevo Pedido</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php/Productos/verCatalogo">Ver Catalogo</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php/Pedidos/listar">Mis Pedidos</a></li>				
    </ul>
</nav>
    
</header><?php }
}
