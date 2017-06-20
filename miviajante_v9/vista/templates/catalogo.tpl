
{extends file='p_layout.tpl'}
{block name=body}

<nav>
    <ul>
        <li><a href="{$path_base}index.php">Inicio</a></li>
        <li><a href="">Crear Pedido</a></li>
        <li><a href="{$path_base}index.php/Catalogo/mostrar">Ver Catalogo</a></li>
        <li><a href="#">Ver Pedidos</a></li>				
    </ul>
</nav>
    
          
<aside>
    <ul>
        <li>
            <a href="{$path_base}index.php/Productos/listar/conectividad">Conectividad</a>
        </li>
        <li>
            <a href="{$path_base}index.php/Productos/listar/perifericos">Perifericos</a>
        </li>
        <li>
            <a href="{$path_base}index.php/Productos/listar/monitores">Monitores</a>
        </li>
        <li>
            <a href="{$path_base}index.php/Productos/listar/impresoras">Impresoras</a>
        </li>
    </ul>
</aside>
    

{/block}