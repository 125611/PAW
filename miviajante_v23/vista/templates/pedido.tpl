
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
        <li class='item_listado'>
            <h1>Numero de pedido: {$item->getNro()}</h1>
            <p>Solicitado el: {$item->getFecha_de_Inicio()}</p>
            <p>Entregado el: {$item->getFecha_de_Entrega()}</p>
            <p>El pedido se encuentra: {$item->getEstado_pedido()}</p>
            <h3>Monto total: ${$item->getPrecio_total()}</h3>
        </li>
  {/foreach}
        
        
    </ul>
</article>  
</section>
{/block}