window.onload=function(){
    //document.getElementsByTagName('body').innerHTML='aaa';
    colocarBotonesProductos();
}

function colocarBotonesProductos(){
    
    var items=document.getElementsByClassName('botones');
    var B, i, IDP, cantInicial;
    for(i=0;i<items.length;i++){
        //BOTON MENOS
        B=document.createElement('button');
        IDP=items[i].getAttribute('data-idProducto');
        //console.log(IDP);
        B.setAttribute('data-idProducto',IDP);
        B.setAttribute('class','menos');
        B.innerHTML='-';
        B.onclick=menosOnclick;
        items[i].appendChild(B);
        
        //CONTADOR
        B=document.createElement('input');
        //IDP=items[i].getAttribute('data-idProducto');
        B.setAttribute('type', 'number');
        B.setAttribute('data-idProducto',IDP);
        B.setAttribute('id','contaProducto'+IDP);
        //B.innerHTML='-';
        B.onblur=actContador;
        items[i].appendChild(B);
        
        //ASYNC
        getConAjax_POST_HTML($baseUrl+'index.php/Carrito/getDetalleNuevoPedido?idProducto='+IDP,B,0);       
        
        //BOTON MAS
        B=document.createElement('button');
        //IDP=items[i].getAttribute('data-idProducto');
        B.setAttribute('data-idProducto',IDP);
        B.innerHTML='+';
        B.onclick=masOnclick;
        B.setAttribute('class','mas');
        items[i].appendChild(B);      
    }
}

function masOnclick(){
    modifContador(this.getAttribute('data-idProducto'),+1);
}

function menosOnclick(){
    modifContador(this.getAttribute('data-idProducto'),-1);
}

function actContador(){
    modifContador(this.getAttribute('data-idProducto'),0);
}

function modifContador(IDP,cantidad){
   var conta=document.getElementById('contaProducto'+IDP);
    console.log("IDProducto"+IDP);
    //var numConta=(parseInt(conta.innerHTML)+cantidad);
    console.log("valor actual"+(conta.value));
    var numConta=(parseInt(conta.value)+cantidad);
    //conta.innerHTML=numConta;
    console.log("nuevoValor"+numConta);
    if(numConta >= 0){
        conta.value=numConta;
    }else{
        alert("No se puede establecer un valor negativo para la cantidad!");
    }
    
   var rtaAjax=getConAjax_POST_HTML($baseUrl+'index.php/Carrito/setDetalleNuevoPedido?idProducto='+IDP+'&cantidad='+numConta);
    console.log("rta"+rtaAjax);
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
         }
        if(destino!=undefined){
            //if (data=='')destino.innerHTML=defaultValue;
            if (data=='')destino.setAttribute('value',defaultValue);
            //else destino.innerHTML = data;
            else destino.setAttribute('value',data);
        }
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