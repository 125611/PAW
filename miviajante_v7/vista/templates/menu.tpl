{extends file='p_layout.tpl'}
{block name=body}
<section id="menu" class="bodySection"> 
    <nav>
        <ul class='sectorMenu'>
        <li >
            <h2 onclick="{$path_base}index.php/Pedidos">Pedidos</h2>
            <p><img src="{$path_base}/vista/imagenes/icon_pedidos.png" alt="icono de pedidos">
            En Esta seccion podremos administrar nuestros pedidos, crear nuevos pedidos, modificar o visualizar los ya existentes.</p> 
            <a href='{$path_base}index.php/Productos'>ir</a> 
        </li>
        <li>
            <h2>Productos</h2>
            <p><img src="{$path_base}/vista/imagenes/icon_productos.png" alt="icono de productos">
            En Esta seccion podras visualizar todos los productos ofrecidos por el proveedor, asi como la cantidad que dispone en stock y dejar algun comentario de utilidad.</p>
            <a href='{$path_base}index.php/Productos'>ir</a>        
        </li>
        <li>
            <h2>Otros</h2>
            <p><img src="{$path_base}/vista/imagenes/icon_pedidos.png" alt="icono de otro">
            En Esta seccion podras visualizar otras cosas (?)</p>
            <a href='{$path_base}index.php/Pedidos'>ir</a>        
        </li>
        </ul>
    </nav>    
    <!---
    <table class="tablaEstilo1">       
        <h3>Tabla de ejemplo css</h3>
   		<tr><th>columna 1</th><th>columna 2</th><th>columna 3</th><th>columna 4</th></tr>
   		<tr><td>data</td><td>data</td><td>data</td><td>data</td></tr>
   		<tr><td>data</td><td>data</td><td>data</td><td>data</td></tr>
   		<tr><td>data</td><td>data</td><td>data</td><td>data</td></tr>
   		<tr><td>data</td><td>data</td><td>data</td><td>data</td></tr> 
        <a href="{$path_base}index.php?">otra pagina</a>
    </table>
    --->
</section>
{/block}