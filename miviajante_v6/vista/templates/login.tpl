{extends file='p_layout.tpl'}
{block name=body}
<article>
            <form class="formulario" action="{$path_base}index.php/Login/iniciarSesion" method="post">
                <ul>
                    <li>
                        <label for="usuario">Ingrese su Email: (*)</label>
                        <input class="in" type="email" name="usuario" placeholder="Email" required>
                    </li>
                    <li>
                        <label for="password">Ingrese su Contraseña: (*)</label>
                        <input 
                            class="in" 
                            type="password" 
                            name="password" 
                            placeholder="Contraseña" 
                            required>
                    </li>
                    <li>
                        <input class="boton" type="submit" value="INICIAR SESION">
                        <p id="aclaracion">(*) Campo requerido.<p>
                        <h5>Sos nuevo? -> <a href="{$path_base}index.php/Registro/mostrar">REGISTRATE</a></h5>
                    </li>
                </ul>
            </form>
</article>
{/block}