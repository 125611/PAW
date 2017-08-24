
{extends file='p_layout.tpl'}
{block name=body}    
<section class="cuerpo">
          
<article>
    <p class="mensaje">{$alerta}</p>
    <p class="mensaje">{$mensaje}</p>
</article>          
<article class="listado" {if empty($listaPedidos) }
        style="display:none"
     {/if}>
    <ul>
        
  {foreach item=item from=$listaPedidos}
        <li class='item_listado_detalle'>
            <a href="{$path_base}index.php/Pedidos/listar?idp={$item->getNro()}">
                <h1>Numero de pedido: {$item->getNro()}</h1>
            </a>
            <p>Solicitado el: {$item->getFecha_de_Inicio()}</p>
            <p>Entregado el: {$item->getFecha_de_Entrega()}</p>
            <p>El pedido se encuentra en estado: 
                {if ($item->getEstado_pedido()==1)}
                    NUEVO
                {/if}
                {if ($item->getEstado_pedido()==2)}
                    DESPACHADO
                {/if}
                {if ($item->getEstado_pedido()==3)}
                    ENTREGADO
                {/if}
            </p>  
            
            {if isset($productoSeleccionado)&&($item->getNro()==$productoSeleccionado)}
                <ul class='listaDeDetalles'>
                    {foreach item=item from=$listaDescripciones}
                        <li>{$item}</li>
                    {/foreach}
                </ul>
            {/if}            
            <h3>Monto total: ${$item->getPrecio_total()}</h3>
        </li>
  {/foreach}
        
        
    </ul>
</article>  
</section>
{/block}