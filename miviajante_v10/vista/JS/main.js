var imagenes, cont, baseUrl;
var miIntervalo = setInterval(function(){siguiente()}, 4000);

$(document).ready(function(){iniciar()});

function iniciar(){
    $baseUrl = document.location.origin;
    $(".anterior").click(function(){anterior()});
    $(".siguiente").click(function(){siguiente()});
    imagenes = new Array($baseUrl + "/miviajante_v10/vista/imagenes/insumos_0.png", 
                         $baseUrl + "/miviajante_v10/vista/imagenes/insumos_1.png",
                        $baseUrl + "/miviajante_v10/vista/imagenes/insumos_2.png",
                        $baseUrl + "/miviajante_v10/vista/imagenes/insumos_3.png",
                        $baseUrl + "/miviajante_v10/vista/imagenes/insumos_4.png");
    cont = 0; 
    clearInterval(miIntervalo);
	miIntervalo = setInterval(function(){siguiente()}, 4000);
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


