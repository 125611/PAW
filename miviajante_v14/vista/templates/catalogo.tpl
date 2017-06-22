
{extends file='p_layout.tpl'}
{block name=body}    
<section class="cuerpo">         
<aside>
    <ul>
        <li>
            <a href="{$path_base}index.php/Productos/verCatalogo?rubro=conectividad">Conectividad</a>
        </li>
        <li>
            <a href="{$path_base}index.php/Productos/verCatalogo?rubro=perifericos">Perifericos</a>
        </li>
        <li>
            <a href="{$path_base}index.php/Productos/verCatalogo?rubro=monitores">Monitores</a>
        </li>
        <li>
            <a href="{$path_base}index.php/Productos/verCatalogo?rubro=impresoras">Impresoras</a>
        </li>
        <li>
            <a href="{$path_base}index.php/Productos/verCatalogo">Todos</a>
        </li>
    </ul>
</aside>
   
<article class="listado" {if empty($listaProductos) }
        style="display:none"
     {/if}>
    <ul>
        
  {foreach item=item from=$listaProductos}
        <li class='item_listaProductos' data-idProducto='{$item->getCodigo_producto()}'>
            <h1>{$item->getTitulo()}</h1>
            <img src='{$item->getRutaImagen()}'>
            <p>{$item->getDescripcion()}</p>
            <h3>${$item->getPrecio_unitario()}</h3>
        </li>
  {/foreach}
        
        
    </ul>
</article>
    
</section>
{/block}