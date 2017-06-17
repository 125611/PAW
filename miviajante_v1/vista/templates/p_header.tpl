<header>
    <article class='infoEmpresa'>
        <img id='logo_empresa' src='{$path_base}/vista/SRC/logo_proveedor.png' alt="logo de la empresa">
        <h1>El Martillo</h1>
        <address>Tel: (02346) 15-536248  -  <a href="mailto:nombreProveedor@miviajante.esy.es">elmartillo@miviajante.esy.es</a>
        </address>
        
    </article>   
    <article class='infoMiviajante'>
        <img id='logo_miviajante' src='{$path_base}/vista/SRC/camion.png' alt="logo camion miviajante.esy.es">
        <h2>Mi Viajante</h2>
        <address><a href="mailto:info@miviajante.esy.es">info@miviajante.esy.es</a>
        </address>
    </article> 
    <article class='infoCliente'>
	<img id='logo_cliente' src='{$path_base}/vista/SRC/icon_cliente.png' alt="logo camion miviajante.esy.es">
        <h2>{$nombreCliente}</h2>
        <ul>
            <li><a href="#">Editar perfil</a></li>
            <li><a href="{$path_base}index.php/Login/cerrarSesion">cerrar sesion</a></li>
        </ol>
    </article> 
</header>