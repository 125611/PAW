{extends file='p_layout.tpl'}
{block name=body}
<section id="login" class="bodySection">
    <section>
        <h2>Login</h2>
        <form action="{$path_base}index.php/Login/iniciarSesion" method="POST">
            {if $mensaje!=''}
                <h3 class='mensajeError'>{$mensaje}</h3>
            {/if}
            <input name="usu" type="text" placeholder="Usuario">
            <input name="pas" type="text" placeholder="Clave">   
            <button type="submit">Ingresar</button>
        </form> 
    </section>
</section>
{/block}