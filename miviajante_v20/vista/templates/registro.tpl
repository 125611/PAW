{extends file='p_layout.tpl'}
{block name=body}
          <section class="cuerpo">
           <article>
            {if isset($mensaje)}
            <h2>{$mensaje}</h2>
            {/if}
            <form class="formulario" action="{$path_base}index.php/Registro/registrar" method="post">
                <ul>
                    <li>
                        <label for="nombre">Ingrese su Nombre: (*)</label>
                        <input class="in" type="text" name="nombre" placeholder="Nombre" required>
                    </li>
                    <li>
                        <label for="apellido">Ingrese su Apellido: (*)</label>
                        <input class="in" type="text" name="apellido" placeholder="Apellido" required>
                    </li>
                    <li>
                        <label for="usuario">Ingrese su Email: (*)</label>
                        <input class="in" type="email" name="email" placeholder="Email" required>
                    </li>
                    <li>
                        <label for="password">Ingrese su Contraseña: (*)</label>
                        <input class="in" type="password" name="pass" placeholder="Contraseña" required>
                    </li>
                    <li>
                        <label for="direccion">Ingrese su Direccion: (*)</label>
                        <input class="in" type="text" name="direccion" placeholder="Direccion" required>
                    </li>
                    <li>
                        <label for="telefono">Ingrese su Telefono: (*)</label>
                        <input class="in" type="text" name="telefono" placeholder="Telefono" required>
                    </li>
                    <li>
                        <input class="boton" type="submit" value="Registrarme">
                        <p id="aclaracion">(*) Campo requerido.<p>
                        <h5><a href="{$path_base}index.php" class="enlaceChico">CANCELAR</a></h5>
                    </li>
                </ul>
            </form>
        </article>
        </section>
        {/block}