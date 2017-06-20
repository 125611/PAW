
{extends file='p_layout.tpl'}
{block name=body}    
          
<aside>
    <ul>
        <li>
            <a href="{$path_base}index.php/Productos/listar?rubro=conectividad">Conectividad</a>
        </li>
        <li>
            <a href="{$path_base}index.php/Productos/listar?rubro=perifericos">Perifericos</a>
        </li>
        <li>
            <a href="{$path_base}index.php/Productos/listar?rubro=monitores">Monitores</a>
        </li>
        <li>
            <a href="{$path_base}index.php/Productos/listar?rubro=impresoras">Impresoras</a>
        </li>
    </ul>
</aside>
   
<article>
    <ul>
        
  {foreach item=item from=$listaProductos}
        <li class='item_listaProductos'>
            <p class='id_producto'>{$item->getCodigo_producto()}</p>
            <h1>{$item->getTitulo()}</h1>
            <img src='{$item->getRutaImagen()}'>
            <p>{$item->getDescripcion()}</p>
            <h3>Precio: ${$item->getPrecio_unitario()}</h3>
        </li>
  {/foreach}
        
        
    </ul>
</article>
    

{/block}