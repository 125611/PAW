<?php
/* Smarty version 3.1.30, created on 2017-06-19 20:32:04
  from "C:\xampp\htdocs\miviajante_v8\vista\templates\p_header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59485ef49d12a3_75495469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cee41bb58ca38bd28ed0e3fa286973a89dfd508' => 
    array (
      0 => 'C:\\xampp\\htdocs\\miviajante_v8\\vista\\templates\\p_header.tpl',
      1 => 1497915111,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59485ef49d12a3_75495469 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
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
	<img id='logo_cliente' src='<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
vista/imagenes/icon_cliente.png' alt="icono cliente">
        <h2><?php echo $_smarty_tpl->tpl_vars['nombreCliente']->value;?>
</h2>
        <ul>
            <li><a href="#">Editar Perfil</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['path_base']->value;?>
index.php/Login/cerrarSesion">Cerrar Sesion</a></li>
        </ul>
    </article> 
    
</header><?php }
}
