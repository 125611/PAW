
{extends file='p_layout.tpl'}
{block name=body}    
<section class="cuerpo">
          
<article>
    {if empty($listaCarrito)}
    <p class="mensaje">Elige los productos que quieras comprar desde el catalogo..</p>
    {else}
    <p class="mensaje">Detalle de tu compra:</p>
    {/if} 
</article>  
    
<article class="listadoCarrito" {if empty($listaCarrito) }style="display:none"
     {/if}>
    
    <ul>        
    {foreach item=item from=$listaCarrito}
        <li class='item_listadoCarrito'>
            <p>{$item->getTitulo()}</p>
            <p>(${$item->getPrecio_unitario()} c/u)</p>
            <p>x{$listaCarritoCantidad[$item->getCodigo_producto()]}</p>
            <p>${$item->getPrecio_unitario()*$listaCarritoCantidad[$item->getCodigo_producto()]}</p>
        </li>
    {/foreach}   
        <li class='item_listadoCarrito listadoCarrito_TOTAL'>
            <p>TOTAL</p>
            <p>${$totalCompra}</p>
        </li>
    </ul>
</article>  
</section>
{/block}