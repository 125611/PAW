/*var TGbody;
var TGtabla;
var TGtr;
var TGtd;

window.onload = function () {
    cargarDatos("interfaces/insert.html");
  //alert("javaScrip onload!! ");   
   /* TGbody=document.getElementsByTagName("body")[0];
    TGtabla=document.createElement("table");
    TGtabla.classList.add("tablaEstilo1");
    TGbody.appendChild(TGtabla);
    
    for(var i=0; i<10; i++){
        TGtr=document.createElement("tr");
        TGtabla.appendChild(TGtr);
        for(var j=0; j<10; j++){
            if(i==0) TGtd=document.createElement("th");
            else TGtd=document.createElement("td");
            TGtd.textContent="data "+(i*10+j);
            TGtr.appendChild(TGtd);
        }        
    }  
	//$(".tablaEstilo2").append($(".tablaEstilo1"));
	
	
	//CARGAR TABLA DESDE PHP!!!!
	//cargarDatos("PHP/insert.html"); 
};*/

/*var reloadTabla = function{
	$.ajax({
            type: "POST",
            url: "php/insert.html",
            data: obtener,
            success: function() {
                alertify.success('Tus datos han sido insertados correctamente!'); //Mensaje de Datos Correctamente Insertados
                $('#tabla_ajax').load("insert.html"); //Recargamos la Tabla(Para que se muestren los Nuevos Resultados)
                $(".nombre, .apellidos").val(""); //Limpiamos los Input
            };	
}

var conexion1;
function cargarDatos(url){
  conexion1=new XMLHttpRequest();  
  conexion1.onreadystatechange = procesarEventos;
  conexion1.open("GET", url, true);
  conexion1.send();
}

function procesarEventos(){
  var detalles = document.getElementById("tabla_ajax");
  if(conexion1.readyState == 4){
    detalles.innerHTML = conexion1.responseText;
  }else{
    detalles.innerHTML = 'Cargando...';
  }
}
*/