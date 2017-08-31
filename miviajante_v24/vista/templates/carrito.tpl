
{extends file='p_layout.tpl'}
{block name=body}    
<section class="cuerpo">
          
<article>
    <p class="mensaje" id="alerta">{$mensaje}</p> 
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
    <button id='btnCarrito_cancelar' >Cancelar Pedido</button>
    <button id='btnCarrito_comprar' >Comprar</button>
</article>  
</section>
{/block}