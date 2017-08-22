window.onload=function(){    //document.getElementsByTagName('body').innerHTML='aaa';
    var B; 
    B=document.getElementById('btnCarrito_cancelar').onclick=cancelarPedido;
    B=document.getElementById('btnCarrito_comprar').onclick=generarPedido;
}

function cancelarPedido(){
   var rtaAjax=getConAjax_POST_HTML($baseUrl+'index.php/Carrito/clearDetallePedido');
}

function generarPedido(){
   var rtaAjax=getConAjax_POST_HTML($baseUrl+'index.php/Carrito/generarPedido');
}

function getConAjax_POST_HTML(myUrl,destino,defaultValue){
    if(defaultValue==undefined)defaultValue=0;
    $.ajax({
        data:{param1:'valor1',param2:'valor2'},
        type: "POST",
        dataType: "HTML",
        url: myUrl,
    })
     .done(function( data, textStatus, jqXHR ) {
         if ( console && console.log ) {
             //console.log( "La solicitud se ha completado correctamente."+data );
             location.reload();
         }
        /*if(destino!=undefined){
            //if (data=='')destino.innerHTML=defaultValue;
            if (data=='')destino.setAttribute('value',defaultValue);
            //else destino.innerHTML = data;
            else destino.setAttribute('value',data);
        }*/
     })
     .fail(function( jqXHR, textStatus, errorThrown ) {
         if ( console && console.log ) {
            //console.log( "La solicitud a fallado: " +  textStatus);
         }
        //if(destino!=undefined) destino.innerHTML = '';
        if(destino!=undefined) destino.setAttribute('value', -1);
    });   
    return '';
}
