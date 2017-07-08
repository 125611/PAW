
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
        <li class='item_listado' data-idProducto='{$item->getCodigo_producto()}'>
           <section class="imagen">
               <img src='{$path_base}vista/imagenes/{$item->getRutaImagen()}'>
           </section>
           <section class="descripcion">
                <h1>{$item->getTitulo()}</h1>
                <p>{$item->getDescripcion()}</p>
           </section>
            <section class="precio">
                <h3>${$item->getPrecio_unitario()}</h3>
            </section>
        </li>
  {/foreach}
        
        
    </ul>
</article>
    
</section>
{/block}