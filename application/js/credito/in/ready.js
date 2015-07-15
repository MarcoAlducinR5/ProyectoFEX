

/*Dont */
function  generatenow (abc_ahora , abc_requeridos) {
	
	var puntosTotales = 0;
	for(x in abc_ahora){
		onreadyunderstand(abc_ahora[x] );		
	}
	
		
	puntosTotalesRequeridos = 0; 		
	for (var x in abc_requeridos) {
			
		puntosTotalesRequeridos +=  parseInt(abc_requeridos[x]);
	}	
	llenaelementoHTML("#puntosRequeridosencuestas", puntosTotalesRequeridos);
}

/*Dont now */
function onreadyunderstand(e){
		
	var generalimp = e;
	$("#documento_s").val(e);			

	url  = now + "index.php/api/creditorest/surveydocumentclientmoral/format/json/";
	$.get(url, $("#generic_form").serialize()).done(function(data){

	
		b=1;
		idpregunta = 0;
		pregunta ="";
		flaresponde = 0;
		flagnumpregunta = 0;
		preguntaok =0;
		respuestano =0;
		contestadas =0;
		bbbbb =0;
		SUMATORIAPUNTOS = 0;
		SUMATORIAPUNTOSSOLICITADOS = 0;

		metricas  = 0;
			for(var x in data.preguntas ){
	

				
				flagnumpregunta ++;

				idpregunta= data.preguntas[x].idpregunta;
				pregunta= data.preguntas[x].pregunta;
				flaresponde = 0;
				ismyomision =  data.preguntas[x].statuspregunta;
				SUMATORIAPUNTOSSOLICITADOS = SUMATORIAPUNTOSSOLICITADOS + parseInt(data.preguntas[x].valor);
					for (var z in data.respuestas){
							
							idpreguntacliente =  data.respuestas[z].idpregunta;
							respuestacliente  =  data.respuestas[z].respuesta;
							e = 0;
								if(idpregunta == idpreguntacliente ){
										
										if (respuestacliente  == "yes") {

										
											SUMATORIAPUNTOS = SUMATORIAPUNTOS + parseInt(data.preguntas[x].valor); 
				            				preguntaok ++;
										}else{


											if (ismyomision  > 0 ) {

												bbbbb ++;
											}


											respuestano++;
										}
											
									contestadas++;
									flaresponde = 1;			
								}
							
							
					}
					/**/
						if (flaresponde == 0 ){		
						}
				b++;
			}

		Observaciones =  ".Observacionestext_"+generalimp;
		gi =".puntuajeaportadouser_"+generalimp; 
		llenaelementoHTML(gi, SUMATORIAPUNTOS);
		

		if (bbbbb >0 ) {

			llenaelementoHTML(Observaciones , "Omisión grave");
		}

		valNow = $("#totaleshechosocultos").val();
		totaleshechosocultos  = parseInt(valNow) + SUMATORIAPUNTOS;
		$("#totaleshechosocultos").val(totaleshechosocultos); 

		llenaelementoHTML("#puntoRecabados" , totaleshechosocultos);
		
			


		if (totaleshechosocultos != 0 ) {
	

			$(".input_puntoRecabados").val(totaleshechosocultos);	
			updatepuntos();

		}




	}).fail(function(){
		alert("Falló algo reportar -");

	});




}


