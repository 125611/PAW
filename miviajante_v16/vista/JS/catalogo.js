window.onload=function(){
    document.getElementsByTagName('body').innerHTML='aaa';
    colocarBotonesProductos();
}

function colocarBotonesProductos(){
    
    var items=document.getElementsByClassName('precio');
    var B, i, IDP, cantInicial;
    for(i=0;i<items.length;i++){
        //BOTON MENOS
        B=document.createElement('button');
        IDP=items[i].getAttribute('data-idProducto');
        B.setAttribute('data-idProducto',IDP);
        B.innerHTML='-';
        B.onclick=menosOnclick;
        items[i].appendChild(B);
        /*
        //CONTADOR
        B=document.createElement('button');
        IDP=items[i].getAttribute('data-idProducto');
        B.setAttribute('data-idProducto',IDP);
        B.setAttribute('id','contaProducto'+IDP);
        B.innerHTML='-';
        items[i].appendChild(B);
        
        //ASYNC
        getConAjax_POST_HTML($baseUrl+'index.php/Pedidos/getDetalleNuevoPedido?idProducto='+IDP,B,0);       
        */
        //BOTON MAS
        B=document.createElement('button');
        IDP=items[i].getAttribute('data-idProducto');
        B.setAttribute('data-idProducto',IDP);
        B.innerHTML='+';
        B.onclick=masOnclick;
        items[i].appendChild(B);      
        
    }
}

function masOnclick(){
    modifContador(this.getAttribute('data-idProducto'),+1);
}

function menosOnclick(){
    modifContador(this.getAttribute('data-idProducto'),-1);
}

function modifContador(IDP,cantidad){
   var conta=document.getElementById('contaProducto'+IDP);
    var numConta=(parseInt(conta.innerHTML)+cantidad);
    conta.innerHTML=numConta;
   var rtaAjax=getConAjax_POST_HTML($baseUrl+'index.php/Pedidos/setDetalleNuevoPedido?idProducto='+IDP+'&cantidad='+numConta);
    console.log(rtaAjax);
}

function getConAjax_POST_HTML(myUrl,destino,defaultValue){
    if(defaultValue==undefined)defaultValue='';
    $.ajax({
        data:{param1:'valor1',param2:'valor2'},
        type: "POST",
        dataType: "HTML",
        url: myUrl,
    })
     .done(function( data, textStatus, jqXHR ) {
         if ( console && console.log ) {
             console.log( "La solicitud se ha completado correctamente."+data );
         }
        if(destino!=undefined){
            if (data=='')destino.innerHTML=defaultValue;
            else destino.innerHTML = data;
        }
     })
     .fail(function( jqXHR, textStatus, errorThrown ) {
         if ( console && console.log ) {
            console.log( "La solicitud a fallado: " +  textStatus);
         }
        if(destino!=undefined) destino.innerHTML = '';
    });   
    return '';
}