<header>
    <img src="{$path_base}vista/imagenes/logo.png" alt="Logo de la empresa">
    <h2>Bienvenidos al Sitio Oficial de <br><span>"Mi Viajante"</span></h2>
    {if isset($isLogueado) && ($isLogueado=="true") }
        <a href='{$path_base}index.php/Login/cerrarSesion'>cerrar sesion</a>
    {/if}
</header>