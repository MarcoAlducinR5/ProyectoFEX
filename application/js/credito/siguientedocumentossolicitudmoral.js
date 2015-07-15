$(document).on("ready", function(){




	$("#siguientedocumentossolicitudmoral").click(registraempresa);
	$("#nextencuesta").click( empresaregistradoorgnext );
});


function registraempresa(){
		
	url = now + "index.php/api/clienteorgrest/insertclienteorgmoral/format/json/";
	$.post(url, $("#empresaindb").serialize() ).done(function(data){

	
		if (data!=0) {

					$("#empresaregistradoorg").val(data);
					empresaregistradoorgnext();					
		}else{
			alert("Falla al registrar");	
		}
	
		

	}).fail(function(){
		alert("Algo pasó");
	});


}


function displaydocumentossolicitados(){

	credito = $("#creditook").val();

	url = now + "index.php/api/clienteorgrest/displaydocumentossolicitados/format/json/";
	$.get(url , {"creditosolicitado" : credito } ).done(function(data){

	
		l = "<table>"; 
		l+= "<tr> <td>Cuenta con el documento solicitado?</td><td>Si</td><td><td>No</td> </tr>";

			for(var x in data){

				iddocumentosolicitado = data[x].iddocumentosolicitado;
				nombredocumento  =  data[x].nombredocumento;
				notadocumento =  data[x].notadocumento;

			
				l += "<tr><td><span>"+nombredocumento+"</span></td>";
				l += "<td><input type='radio' name='"+iddocumentosolicitado+"' class='inputresponseencuenta' id='"+iddocumentosolicitado+"' value='"+iddocumentosolicitado+"'></td>";
				l += "<td><input type='radio' name='"+iddocumentosolicitado+"' class='inputresponseencuentano' id='"+iddocumentosolicitado+"' value='"+iddocumentosolicitado+"'></td></tr>";

			}
		l += "</table>";
		llenaelementoHTML("#documentostest" , l );
		$(".inputresponseencuenta").click(updatestatusdocumento);
		$(".inputresponseencuentano").click(updatestatusdocumentono);

	}).fail(function(){
			alert("Reportar error");
	});

}	
 



 /****************************************************************************************************/
 function updatestatusdocumento(e){

 		iddocumento =  e.target.id;
 		idclienteorg = $("#clienteregistradoorg").val();
 		respuesta = "1";

 		url = now + "index.php/api/clienteorgrest/clientedocumento/format/json/";

 		$.post(url , { "iddocumento" : iddocumento , "idclienteorg" : idclienteorg , "respuesta" : respuesta} ).done(function(data){

 		

 		}).faiil(function(){

 			alert("Error reportar....	");
 		});

 		
	 		
 }
function updatestatusdocumentono(e){

 		iddocumento =  e.target.id;
 		idclienteorg = $("#clienteregistradoorg").val();
 		respuesta = "0";

 		url = now + "index.php/api/clienteorgrest/clientedocumento/format/json/";

 		$.post(url , { "iddocumento" : iddocumento , "idclienteorg" : idclienteorg , "respuesta" : respuesta} ).done(function(data){

 		
 		}).faiil(function(){

 			alert("Error reportar....	");
 		});

 		
	 		
 }





function empresaregistradoorgnext(){

	empresa = $("#empresaregistradoorg").val();
	urlnext = now + "index.php/clienteorg/principal"; 
	redirect(urlnext);
}
