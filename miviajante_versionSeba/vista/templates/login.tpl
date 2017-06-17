
         

<article>
            <form class="formulario" action="controlador/despachador.php/Login/iniciarSesion" method="post">
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
                        <h5>Sos nuevo? -> <a href="controlador/despachador.php/Registro/mostrar">REGISTRARME</a></h5>
                    </li>
                </ul>
            </form>
</article>
