<header>
    <article class='infoMiviajante'>
        <img id='logo_miviajante' src='{$path_base}vista/imagenes/logo_miviajante.png' alt="logo camion miviajante.esy.es">
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
	<img id='logo_cliente' src='{$path_base}vista/imagenes/icon_cliente.png' alt="icono cliente">
        <h2>{$nombreCliente}</h2>
        <ul>
            <li><a href="#">Editar perfil</a></li>
            <li><a href="{$path_base}index.php/Login/cerrarSesion">cerrar sesion</a></li>
        </ul>
    </article> 
    
</header>