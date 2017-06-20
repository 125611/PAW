<header>
<section class='cabecera'>
    <article class='infoMiviajante'>
        <a href="{$path_base}index.php"><img id='logo_miviajante' src='{$path_base}vista/imagenes/logo_miviajante.png' alt="logo camion miviajante.esy.es"></a>
        <h2>Bienvenidos al Sitio Oficial de <br><span>"Mi Viajante"</span></h2>
    </article> 
    
    <article class='infoEmpresa'>
        <img id='logo_empresa' src='{$path_base}vista/imagenes/logo_empresa.png' alt="logo de la empresa">
         <h2>Tu eslogan<br><span>Tu Empresa</span></h2>        
    </article>  
    
    
    <article class='infoCliente'
             {if !isset($isLogueado) || ($isLogueado!="true") }
             style="display:none"
             {/if}
             >
	    <img id="logoCliente" src='{$path_base}vista/imagenes/icon_cliente.png' alt="icono cliente">
        <ul>
            <li><h3>{$nombreCliente}</h3></li>
            <li><a href="#" class="enlaceChico">Editar Perfil</a></li>
            <li><a href="{$path_base}index.php/Login/cerrarSesion" class="enlaceChico">Cerrar Sesion</a></li>
        </ul>
    </article> 
</section>
<nav {if !isset($isLogueado) || ($isLogueado!="true") }
        style="display:none"
     {/if}>
    <ul>
        <li><a href="{$path_base}index.php">Inicio</a></li>
        <li><a href="{$path_base}index.php/PedidoNuevo/mostrar">Nuevo Pedido</a></li>
        <li><a href="{$path_base}index.php/Catalogo/mostrar">Ver Catalogo</a></li>
        <li><a href="#">Mis Pedidos</a></li>				
    </ul>
</nav>
    
</header>