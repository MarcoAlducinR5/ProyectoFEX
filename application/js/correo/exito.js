$(document).on("ready", function(){
	
	$("#enviar").click(get_exito);

});


function get_exito(){

	URL = now + "index.php/api/alertasrest/sendalerttomember/format/json/"; 

	$.get(URL).done(function(data){
		
		llenaelementoHTML( "#mensaje", "Mensaje enviado" );
				

	}).fail(function(){

		llenaelementoHTML( "#mensaje", "error enviar el correo");
			//llenaelementoHTML("#numerointegrantes" ,  clienteresponse[0]);

	});

}/*Termina la función */