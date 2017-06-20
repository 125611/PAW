var imagenes, cont;
var miIntervalo = setInterval(function(){siguiente()}, 4000);

$(document).ready(function(){iniciar()});

function iniciar(){
    // MODIFICACION:: la variable $baseUrl es transferida a javaScript a travez del template "p_head" y contiene el path_base de la aplicacion..
    $(".anterior").click(function(){anterior()});
    $(".siguiente").click(function(){siguiente()});
    imagenes = new Array($baseUrl + "vista/imagenes/insumos_0.png", 
                         $baseUrl + "vista/imagenes/insumos_1.png",
                        $baseUrl + "vista/imagenes/insumos_2.png",
                        $baseUrl + "vista/imagenes/insumos_3.png",
                        $baseUrl + "vista/imagenes/insumos_4.png");
    cont = 0; 
    clearInterval(miIntervalo);
	miIntervalo = setInterval(function(){siguiente()}, 4000);
    
    agregarBotonesPedidos();
}

function anterior(){
    clearInterval(miIntervalo);
    cont --;
    if (cont < 0){
        cont = 4;
    }
    $("#imagen").attr("src", imagenes[cont]); 
    miIntervalo = setInterval(function(){siguiente()}, 4000);
}

function siguiente(){
    clearInterval(miIntervalo);
    cont ++;
    if (cont > 4){
        cont = 0;
    }
    $("#imagen").attr("src", imagenes[cont]);
    miIntervalo = setInterval(function(){siguiente()}, 4000);
}

function agregarBotonesPedidos(){
    var boton=document.createElement('button');
    boton.innerHTML='BOTON01';
    $('.item_listaProductos').append(boton);
    console.log('boton ok!');
}


