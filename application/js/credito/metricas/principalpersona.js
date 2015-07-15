$(document).on("ready", function(){

	$("footer").ready(loadcreditosinfosuser);
	$("footer").ready(listarelnumerodecreditosdelapersona);
	$("footer").ready(displayinfocliente);
	$("footer").ready(cargainfocliente);
	
	
});



/*Cargar los creditos del usuario*/	
function loadcreditosinfosuser(){

	url  = now + "index.php/api/creditorest/listarinformacioncreditobyuser/format/json/";
	clienteorg  = $("#clienteorg").val();
	$.get(url, $("#user_form_general").serialize() ).done(function(data){

		urldocumentos  = now + "application/img/general/clipboard44.png";
		l="";
		for(var x in data){

			historial = data[x].idhistorial;
			llenaelementoHTML( "#credito_nombre", data[x].nombre);


			l +="<a href='"+ now+"index.php/files/info"+"?clienteorg="+clienteorg+"&historial="+historial+  "'> ";
			l +="<img class='documentoscredito' src='"+urldocumentos+"'></a>";

			//llenaelementoHTML("#imagendocumento" , l );
			llenaelementoHTML("#monto_solicitado",  data[x].monto);
			llenaelementoHTML("#Folio_solicitante" ,  data[x].idhistorial );	
		
				}

		llenaelementoHTML("#infocredito" , l);

	}).fail(function(){
		alert("algo malo susedió");

	});

}	





function listarelnumerodecreditosdelapersona(){


	url  = now + "index.php/api/creditorest/listarelnumerodecreditosdelapersona/format/json/";
	$.get(url, $("#user_form_general").serialize() ).done(function(data){

		llenaelementoHTML("#numerocreditos" , data);
	}).fail(function(){
		alert("algo malo susedió");

	});


}




function cargainfocliente(){



	url  = now + "index.php/api/clienteorgrest/displayinfoclientebyid/format/json/";
	$.get(url, $("#user_form_general").serialize() ).done(function(data){

	
		RFC = "";
		nota = "";
		for(var x in data){
				RFC = data[x].RFC;
				nota = data[x].nota;		
				
		}
		llenaelementoHTML("#RFCcliente" , RFC);
		llenaelementoHTML("#notacliente" , nota);
		}).fail(function(){
		alert("algo malo susedió");

	});


	}


function displayinfocliente(){



	url  = now + "index.php/api/clienteorgrest/displayinfoclientebyid/format/json/";
	$.get(url, $("#user_form_general").serialize() ).done(function(data){

		
		l="<div id=''>";
		for(var x in data){


				idclienteorg  =  data[x].idclienteorg;
				primernombre =  data[x].primernombre;
				segundonombre = data[x].segundonombre;
				primerapellido =  data[x].primerapellido;
				segundoapellido =  data[x].segundoapellido;
				idusuario = data[x].idusuario;
				fecha_registro =  data[x].fecha_registro;
				
				nombrecompleto = data[x].nombrecompleto;
				personaqueregistropemera = data[x].personaqueregistropemera;
				idusuario  =  data[x].idusuario;
				estadocliente =  data[x].status;
				good="";

				if (estadocliente  ==  1) {
					  //good="<td class='text_whithe'><img style='width:70%;' src='"+now + "application/img/general/ok2.png"+"'></td></tr>";

					  good="<td class='text_whithe'><img  src='"+now + "application/img/general/ok2.png"+"'></td></tr>";


				}else{
					  //good="<td class='text_whithe'><img style='width:70%;' src='"+now + "application/img/general/teacher34.png"+"'></td></tr>";
					  good="<td class='text_whithe'><img src='"+now + "application/img/general/teacher34.png"+"'></td></tr>";


				}	
	                              
				l+="<tr class='trclass'><td class='text_whithe'>"+ idclienteorg +"</td>";

				if(primerapellido==null || primerapellido.length==0){
	            	l+="<td id='TDaPaterno' class='text_whithe'><input id='ocultoTA1' type='text' /><span id='aPaterno'> + </span></td>";
				}else{
					l+="<td id='TDaPaterno' class='text_whithe'><input id='ocultoTA1' type='text' /><span id='aPaterno'>"+ primerapellido +"</span></td>";
				}
				if(segundoapellido==null || segundoapellido.length==0){
					l+="<td id='TDaMaterno' class='text_whithe'><input id='ocultoTA2' type='text' /><span id='aMaterno'> + </span></td>";
				}else{
					l+="<td id='TDaMaterno' class='text_whithe'><input id='ocultoTA2' type='text' /><span id='aMaterno'>"+ segundoapellido+"</span></td>";
				}
				if(primernombre==null || primernombre.length==0){
					l+="<td id='TDnombre1' class='text_whithe'><input id='ocultoTA3' type='text' /><span id='nombre1'> + </span></td>";
				}else{
					l+="<td id='TDnombre1' class='text_whithe'><input id='ocultoTA3' type='text' /><span id='nombre1'>"+ primernombre +"</span></td>";
				}
				if(segundonombre==null || segundonombre.length==0){
					l+="<td id='TDnombre2' class='text_whithe'><input id='ocultoTA4' type='text' /><span id='nombre2'> + </span></td>";
				}else{
					l+="<td id='TDnombre2' class='text_whithe'><input id='ocultoTA4' type='text' /><span id='nombre2'>"+ segundonombre +"</span></td>";
				}
	            l+="<td class='text_whithe'>"+ nombrecompleto +"</td>";
	            l+="<td class='text_whithe'>"+ fecha_registro +"</td>";
	            l+="<td class='text_whithe'>"+ personaqueregistropemera +"</td>";
	            l+="<td class='text_whithe'>"+ estadocliente+"</td>";
	           
	            l+= good;
		}
		l+="</div>";

		llenaelementoHTML("#infoclientemoved", l);
        
	$("#TDaPaterno").click(function(){
		$("#aPaterno" ).hide();
		Paterno = $("#aPaterno" ).text();
		$( "#ocultoTA1" ).val(Paterno);
		$("#ocultoTA1" ).show();
		$( "#ocultoTA1" ).blur(actualizaPaterno);
		$("#ocultoTA1").keyup(function (e) {
    			if (e.keyCode == 13) {
       				actualizaPaterno();
			    }
			});
	});
	$("#TDaMaterno").click(function(){
		$("#aMaterno" ).hide();
		Materno = $("#aMaterno" ).text();
		$( "#ocultoTA2" ).val(Materno);
		$("#ocultoTA2" ).show();
		$( "#ocultoTA2" ).blur(actualizaMaterno);
		$("#ocultoTA2").keyup(function (e) {
    			if (e.keyCode == 13) {
       				actualizaMaterno();
			    }
			});
	});
	$("#TDnombre1").click(function(){
		$("#nombre1" ).hide();
		n1 = $("#nombre1" ).text();
		$( "#ocultoTA3" ).val(n1);
		$("#ocultoTA3" ).show();
		$( "#ocultoTA3" ).blur(actualizaN1);
		$("#ocultoTA3").keyup(function (e) {
    			if (e.keyCode == 13) {
       				actualizaN1();
			    }
			});
	});
	$("#TDnombre2").click(function(){
		$("#nombre2" ).hide();
		n2 = $("#nombre2" ).text();
		$( "#ocultoTA4" ).val(n2);
		$("#ocultoTA4" ).show();
		$( "#ocultoTA4" ).blur(actualizaN2);
		$("#ocultoTA4").keyup(function (e) {
    			if (e.keyCode == 13) {
       				actualizaN2();
			    }
			});
	});




	}).fail(function(){
		alert("algo falló");

	});



}


function actualizaPaterno(){

	paterno = $("#ocultoTA1" ).val() ;

	idCliente = $("#clienteorg").val();
	
	//Darle una url que nos de el resultado de la accion en formato JSON
	url = now + "index.php/api/clienteorgrest/actualizaApellidoPaterno/format/json";
	//Metodo para enviar el cambio de nombre
	$.post( url, { "apellido": paterno , "idCliente": idCliente})
 		.done(function( data ) {
			$("#ocultoTA1" ).hide();
			//Asignando a una variabl
			$("#aPaterno" ).show();
			displayinfocliente();
  		})
 	.fail(function() {
    	alert( "error" );
	});

}

function actualizaMaterno(){

	materno = $("#ocultoTA2" ).val() ;

	idCliente = $("#clienteorg").val();
	
	//Darle una url que nos de el resultado de la accion en formato JSON
	url = now + "index.php/api/clienteorgrest/actualizaApellidoMaterno/format/json";
	//Metodo para enviar el cambio de nombre
	$.post( url, { "apellido": materno , "idCliente": idCliente})
 		.done(function( data ) {
			$("#ocultoTA2" ).hide();
			//Asignando a una variabl
			$("#aMaterno" ).show();
			displayinfocliente();
  		})
 	.fail(function() {
    	alert( "error" );
	});
}

function actualizaN1(){

	nombre1 = $("#ocultoTA3" ).val() ;

	idCliente = $("#clienteorg").val();
	
	//Darle una url que nos de el resultado de la accion en formato JSON
	url = now + "index.php/api/clienteorgrest/actualizaN1/format/json";
	//Metodo para enviar el cambio de nombre
	$.post( url, { "nombre": nombre1 , "idCliente": idCliente})
 		.done(function( data ) {
			$("#ocultoTA3" ).hide();
			//Asignando a una variabl
			$("#nombre1" ).show();
			displayinfocliente();
  		})
 	.fail(function() {
    	alert( "error" );
	});
}

function actualizaN2(){

	nombre2 = $("#ocultoTA4" ).val() ;

	idCliente = $("#clienteorg").val();
	
	//Darle una url que nos de el resultado de la accion en formato JSON
	url = now + "index.php/api/clienteorgrest/actualizaN2/format/json";
	//Metodo para enviar el cambio de nombre
	$.post( url, { "nombre": nombre2 , "idCliente": idCliente})
 		.done(function( data ) {
			$("#ocultoTA4" ).hide();
			//Asignando a una variabl
			$("#nombre2" ).show();
			displayinfocliente();
  		})
 	.fail(function() {
    	alert( "error" );
	});
}
