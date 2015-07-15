$(document).on("ready", function(){

	$("footer").ready(cargartabladocumentos);
	$("#evaluaruser").click(cargartabladocumentos);
});


function cargartabladocumentos(){
		


	url  = now + "index.php/api/evaluacionrest/evaluaruserclientdocument/format/json/";
	
	idclienteactual = $("#clienteorg").val(); 

	$.get(url, $("#user_form_general").serialize() ).done(function(data){

	l ="";

		contestado =0;
		faltantes =0;
		documentossinresponder =0;
		for(var x in data.credito){
		


				iddocumentosolicitado  = data.credito[x].iddocumentosolicitado;
				nombredocumento = data.credito[x].nombredocumento;
				notadocumento  =  data.credito[x].notadocumento;  
				nextlocation = now + "index.php/expedientes/surveyanddocument?template=newsorvey&documentacion=" + iddocumentosolicitado+"&org="+data.clienteorg;


				banderazo = 0; 
				respuesta = 0; 
				for(var z in data.entregada){

					
					if (data.entregada[z].iddocumentosolicitado == data.credito[x].iddocumentosolicitado ){
						respuesta = data.entregada[z].respuesta;
						banderazo ++;	
					}	

				}





				if(banderazo>0) {

						if (respuesta == 0 ) {
					
				            l += "<a href='"+nextlocation+"'> <ul class='goal-progress'> ";
							l +=" <div class='title_documentacion'>" + nombredocumento + "</div>";
			            	//l += "<div class='progress progress-xs col-sm-9 col-xs-9'><div class='progress-bar progress-bar-danger' role=progressbar' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100' style='width: 100%'>"

			            	l += "<div class='progress progress-xs col-sm-9 col-xs-9'><div class='progress-bar progress-bar-danger' role=progressbar' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100' style=''>"

		    	        	l += "<span> No ha respondido la encuesta</span> </div></div> </ul></a><br>";
		    	        	


							faltantes ++;
						}else{
							

				            l += "<a href='"+nextlocation+"'> <ul class='goal-progress'> ";
							l +=" <div class='title_documentacion'>" + nombredocumento + "</div>";
			            	//l += "<div class='progress progress-xs col-sm-9 col-xs-9'><div class='progress-bar progress-bar-info' role=progressbar' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100' style='width: 100%'>"
		    	        	
l += "<div class='progress progress-xs col-sm-9 col-xs-9'><div class='progress-bar progress-bar-info' role=progressbar' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100' style=''>"
		    	        	l += "<span>Contestado</span> </div></div> </ul></a><br>";
		    	        	


				            contestado ++;
						}

				}else{

							l += "<a href='"+nextlocation+"'> <ul class='goal-progress'> ";
							l +=" <div class='title_documentacion'>" + nombredocumento + "</div>";
			            	//l += "<div class='progress progress-xs col-sm-9 col-xs-9'><div class='progress-bar progress-bar-warning' role=progressbar' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100' style='width: 100%'>"
			            	l += "<div class='progress progress-xs col-sm-9 col-xs-9'><div class='progress-bar progress-bar-warning' role=progressbar' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100' style=''>"
		    	        	l += "<span> No ha respondido la encuesta</span> </div></div> </ul></a><br>";
		    	        	documentossinresponder ++;

								
				}

				
				
					
		
			/*

               
              */  



               
		} 

		documentosentregadosok =  data.condoc;
		Faltantes = data.total_documentos - documentosentregadosok;
		porcentajeentregados = documentosentregadosok / data.total_documentos;
  		
  		mitad = 2/data.total_documentos; 
  		tercio = 3/data.total_documentos; 

		color ="";
  		if (porcentajeentregados <= tercio ) {
  			
  			color = "progress-bar progress-bar-danger";

  		}else if ( porcentajeentregados >tercio && porcentajeentregados<= mitad){
  				
  				color = "progress-bar progress-bar-warning";

  		}else{
  			color  = "progress-bar progress-bar-success";
  		}

  		if (porcentajeentregados == 1) {
  			porcentajeentregados =100; 
  		}	
		miporcentajeentregados ="";
  		miporcentajeentregados += "<div class='"+color+"'  ";
        //miporcentajeentregados += "style='width: 100%''><span class=''>"+porcentajeentregados+"%</span></div>";
          miporcentajeentregados += "><span class=''>"+porcentajeentregados+"%</span></div>";
                                                                
                                                            
		llenaelementoHTML("#documentosentregadosok" , documentosentregadosok  );
		llenaelementoHTML("#numerodocumentosrequeridos", data.total_documentos);	
		llenaelementoHTML("#porcentajeentregados" , miporcentajeentregados);

		llenaelementoHTML("#documentos_faltantes" , Faltantes);

		/*Porcentajes */
		porcentajemefaltadeentregar = Faltantes / data.total_documentos;
		


		colorfaltante ="";

  		if (porcentajemefaltadeentregar <= tercio ) {
  			colorfaltante  = "progress-bar progress-bar-success";
  		}else if ( porcentajemefaltadeentregar >tercio && porcentajemefaltadeentregar<= mitad){
  				
  				colorfaltante = "progress-bar progress-bar-warning";
  		}else{
  			colorfaltante = "progress-bar progress-bar-danger";
  		}	


  		if (porcentajemefaltadeentregar == 1 ) {
  			porcentajemefaltadeentregar =100;
  		}
		
		miporcentajefaltante ="";
  		miporcentajefaltante += "<div class='"+colorfaltante +"'  ";
        //miporcentajefaltante += "style='width: 100%''><span class=''>"+porcentajemefaltadeentregar +" % </span></div>";
                                                                
     	miporcentajefaltante += "><span class=''>"+porcentajemefaltadeentregar +" % </span></div>";
          


		llenaelementoHTML("#documentos_faltantesporcentaje" ,miporcentajefaltante);
		

		llenaelementoHTML("#listadocumentook", l);	
		llenaelementoHTML("#documentoscontestados" , contestado );
		llenaelementoHTML("#documentosfaltantes" , faltantes );
		llenaelementoHTML("#documentossinresponder" , documentossinresponder);


	}).fail(function(){
		alert("algo malo susedió");

	});


}


