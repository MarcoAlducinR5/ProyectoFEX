$(document).on("ready", function(){	

	$("footer").ready(loadtabla);	
	$("#calculoahora").click(cargapage);
	$("#cerrarmodal").click(cargapage);


	arreglorespuestascliente = ["Se requiere de un flujo de efectivo" , "" , ""];

	
});

function loadtabla(){
	var elementosnuevos =[];
	var requeridosp = [];
	url =now + "index.php/api/evaluacionpersonafisicarest/evaluaruserclientdocument/format/json";
	 l ="<br><table>";

	 
	 l +="<tr class='no-border blue'>";
     l+="<td>Datos del cuestionario:</td >";
     l+="<td> Puntaje </td>";
     l+="<td> Establecido </td>";
     l+="<td> Observaciones </td>";  	      
     l+="<td>Documentación</td></tr>";
      
              
         
      


	$.get(url , $("#form_archivo").serialize() ).done(function(data){

		colornow = 0;	
		for (var x in data.tablageneraldocumentos ){


				iddocumentosolicitado = data.tablageneraldocumentos[x].iddocumentosolicitado;
				nombredocumento =  data.tablageneraldocumentos[x].nombredocumento;
				notadocumento = data.tablageneraldocumentos[x].notadocumento;
				totalrequeridos = data.tablageneraldocumentos[x].totalrequeridos;

				elementosnuevos.push(iddocumentosolicitado);
				requeridosp.push(totalrequeridos);
				if (colornow == 0 ) {
					l+="<tr><td class='nombre_doc'>"+ nombredocumento +"</td>";
					
						colornow = 1;
				}else{	
					l+="<tr  ><td   class='nombre_doc'>"+ nombredocumento +"</td>";
					
					colornow = 0;		
				}


				tagpuntuaje = "puntuajeaportadouser_"+ iddocumentosolicitado;
				
				l+="<td align='center' class='"+tagpuntuaje+"'></td>";
				l+="<td align='center'>"+totalrequeridos+"</td>";
				Observacionestext = "Observacionestext_"+ iddocumentosolicitado;;
				l+="<td align='center' class='"+Observacionestext+"'> - </td>";
				/*Para documentos*/
				urlimagendocumento = now + "application/img/general/download61.png";
				//imggendocumento = "<a data-toggle='modal'  class='modalencuesta' id='"+iddocumentosolicitado +"' href='#myModal'><img style='display:block;margin:0 auto 0 auto' class='documento_asociado' id='"+iddocumentosolicitado+"' src='"+urlimagendocumento+"'></a>";

				imggendocumento = "<a data-toggle='modal'  class='modalencuesta' id='"+iddocumentosolicitado +"' href='#myModal'> <i class='fa fa-cloud-upload fa-3x documento_asociado' id='"+iddocumentosolicitado+"'></i> </a>";
				l+="<td>"+imggendocumento+"</td>";
				l+="</tr>";	
				

		}
		/*DE LA CALIFICACIÓN*/
		calificacionhistorial = 0;
		puntosTotalescuestionario = 0;	
		for (var y in data.calificacionhistorial) {
			
			calificacionhistorial = data.calificacionhistorial[y].calificacion;
			Completoporcentaje = data.calificacionhistorial[y].Completoporcentaje;
			omisionesgraves = data.calificacionhistorial[y].omisionesgraves;
		}

		/*PTS Totales del cuestionario:*/
		l+="<tr class='greytr'> <td>Calificación:</td> <td align='center'  > "+calificacionhistorial+"</td> <td></td> <td></td> <td></td> <tr>";
		/**/
		l+="<tr><td>% Del cuestionario capturado:</td> <td align='center' >"+ Completoporcentaje.slice(".",  4)+" %</td>   <td></td>   <td></td> <td></td>  </tr>";
		l+="<tr class='greytr'><td>PTS Totales del cuestionario:</td> <td align='center'  > <span id='puntoRecabados'> </span> pts </td>   <td  align='center' > <span  align='center'  id='puntosRequeridosencuestas'> </span> pts</td> <td></td>   <td></td>  </tr>";
		
		

		if (omisionesgraves > 0) {

			///l+="<tr style='background: red;  color: white;'  ><td>Omisiones Graves:</td>     <td align='center' >"+omisionesgraves+"</td> <td></td> <td></td> <td></td> </tr>";
			l+="<tr><td>Omisiones Graves:</td>     <td align='center' style='background: red;  color: white;'>"+omisionesgraves+"</td> <td></td> <td></td> <td></td> </tr>";
			
		}else{
				//l+="<tr style='background: #366CC9; color: white; '><td>Omisiones Graves:</td>     <td align='center' >"+omisionesgraves+"</td> <td></td> <td></td> <td></td> </tr>";
			l+="<tr><td>Omisiones Graves:</td>     <td align='center' style='background: green;  color: white;'>"+omisionesgraves+"</td> <td></td> <td></td> <td></td> </tr>";
		
		}

		uno = data.consultaOmisiones1;
		dos = data.consultaOmisiones2;

			if(uno > 0){
				l+="<tr><td>Omisiones:</td>     <td align='center' style='background: #FF7C00;  color: white;'>"+uno+"</td> <td></td> <td></td> <td></td> </tr>";
			}else{
				l+="<tr><td>Omisiones:</td>     <td align='center' style='background: green;  color: white;'>"+uno+"</td> <td></td> <td></td> <td></td> </tr>";
			}
		/*
		l+="<tr style='background: #366CC9;  color: white;'  ><td>Omisiones:</td>     <td align='center' >"+uno+"</td> <td></td> <td></td> <td></td> </tr>";
		l+="<tr style='background: green;  color: white;'  ><td>Sin Omisiones:</td>     <td align='center' >"+dos+"</td> <td></td> <td></td> <td></td> </tr>";
		*/
		l+="<tr><td>Sin Omisiones:</td>     <td align='center' style='background: green;  color: white;'>"+dos+"</td> <td></td> <td></td> <td></td> </tr>";
		
		l+="</table>";

		llenaelementoHTML("#documentossolicitados", l);
		$(".documento_asociado").click(getencuestaactual);				
		generatenow(elementosnuevos , requeridosp);
		
	}).fail(function(){
		alert("no");
	});
}






/****************************************************************************************************/
function getencuestaactual(e){
	documento = e.target.id;
	$("#documento_s").val(documento);			
	//getAction();
	getList();

}


function getList(){
	

		url  = now + "index.php/api/creditorest/getSurveyClient/format/json/";

		$.get( url ,  $(".generic_form").serialize()).done(function(data){
					
			dinamicList = getTableResponse(data.respuestas , data.preguntas);

			llenaelementoHTML(".dinamic-list" , dinamicList );


		


		}).fail(function(){

			alert("Ups Fallo:!");
		});

}





/**/
function getTableResponse( respuestas , preguntas){

	/*Ver la función que permite saber si se encuentra en el arreglo */



	return "llllllllll";
}
/**/
















/*********************************************************
function  getAction(){
	url  = now + "index.php/api/creditorest/surveydocumentclient/format/json/";
	$.get(url, $("#generic_form").serialize()).done(function(data){

		l ="<table >";
		l+="<thead><tr> <th>#</th> <th>cuestionario</th> <th>SI</th>  <th>NO</th></tr></thead><tbody>";
		b=1;
		idpregunta = 0;
		pregunta ="";
		flaresponde = 0;
		flagnumpregunta = 0;
		preguntaok =0;
		respuestano =0;
		contestadas =0;
		noaplica =  0; 

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
				noaplica  = data.preguntas[x].noaplica; 		



				for (var z in data.respuestas){
							
							idpreguntacliente =  data.respuestas[z].idpregunta;
							respuestacliente  =  data.respuestas[z].respuesta;
							e = 0;
								if(idpregunta == idpreguntacliente ){





										
										if (respuestacliente  == "yes") {

											
											if (noaplica == 2) {

													l+="<tr><td>"+b+"</td><td>"+pregunta+"</td>";
				            						l+="<td><input type='checkbox' class='trueresponse' id='"+idpregunta+"' checked></td><td><input type='checkbox' class='falseresponse'  id='"+idpregunta+"' > </td>";
				            						l +="<td><input type='checkbox'> </td>";

											}else{
													l+="<tr><td>"+b+"</td><td>"+pregunta+"</td>";
				            						l+="<td><input type='checkbox' class='trueresponse' id='"+idpregunta+"' checked></td><td><input type='checkbox' class='falseresponse'  id='"+idpregunta+"' > </td></tr>";
												
											}

											SUMATORIAPUNTOS = SUMATORIAPUNTOS + parseInt(data.preguntas[x].valor); 
				            				preguntaok ++;

										}else{



											l +=  getEvaluacion( noaplica, ismyomision ,  b, pregunta , idpregunta );

											respuestano++;

										}
											
									contestadas++;
									flaresponde = 1;			
								}
							
							
					}
				
						if (flaresponde == 0 ){		

							l += formatstandar( noaplica , b ,  pregunta ,  idpregunta );
						}
				b++;
			}

		

	
			setTableBasic( l , flagnumpregunta , contestadas , preguntaok , respuestano , trueresponseaction , falseresponseaction, SUMATORIAPUNTOS , SUMATORIAPUNTOSSOLICITADOS  );



	}).fail(function(){
		alert("Falló algo reportar .....");

	});


}

	
*/










function getEvaluacion( noaplica , ismyomision ,  b, pregunta , idpregunta ){
    
    l = "" ;  

    if (noaplica == 2) {

        if (ismyomision  == 1 ){


	          l+="<tr style='background:red' ><td>"+b+"</td><td>"+pregunta+"</td>";
	          l+="<td><input type='checkbox' class='trueresponse' id='"+idpregunta+"' ></td><td><input type='checkbox' class='falseresponse'  id='"+idpregunta+"' checked></td>";
	          l+="<td>No aplica <input type='checkbox'  name='noaplica' value='1'</td></tr>";                                        
	        

	        }else{
	            l+="<tr><td>"+b+"</td><td>"+pregunta+"</td>";
	            l+="<td><input type='checkbox' class='trueresponse' id='"+idpregunta+"' ></td><td><input type='checkbox' class='falseresponse'  id='"+idpregunta+"' checked> </td></tr>";
                                  
      		}


    }else{


        if (ismyomision  == 1 ){



        	  	l+="<tr style='background:red' ><td>"+b+"</td><td>"+pregunta+"</td>";
          		l+="<td><input type='checkbox' class='trueresponse' id='"+idpregunta+"' ></td><td><input type='checkbox' class='falseresponse'  id='"+idpregunta+"' checked> </td></tr>";
                                    
        }else{
            l+="<tr><td>"+b+"</td><td>"+pregunta+"</td>";
            l+="<td><input type='checkbox' class='trueresponse' id='"+idpregunta+"' ></td><td><input type='checkbox' class='falseresponse'  id='"+idpregunta+"' checked> </td></tr>";
                                  
          }


    }  
    return l;
  

}
































/********************************************************************************************/
function trueresponseaction(e){

	pregunta = e.target.id;
	historial = $("#historial").val();
	documento_s = $("#documento_s").val();
	idcostomer  =  $("#clienteorg").val();
	typeclient = $("#typeclient").val();

	url = now + "index.php/api/creditorest/updaterespuestacliente/format/json";
	$.post(url , { "typeclient" : typeclient , "pregunta" : pregunta , "idcostomer" : idcostomer  , "respuesta" : "yes" , "historial" : historial , "documento_s" : documento_s})
	.done(function(data){

			
	}).fail(function(){
		alert("Fallo actualización yes");
	});
	 getAction();
}
/********************************************************************************************/
function falseresponseaction(e){

	pregunta = e.target.id;
	historial = $("#historial").val();
	idcostomer  =  $("#clienteorg").val();
	documento_s = $("#documento_s").val();
	typeclient = $("#typeclient").val();

	url = now + "index.php/api/creditorest/updaterespuestacliente/format/json";
	$.post(url , {"typeclient" : typeclient , "pregunta" : pregunta , "idcostomer" : idcostomer  , "respuesta" : "not",  "historial" : historial , "documento_s" : documento_s})
	.done(function(data){

	
	
	}).fail(function(){
		alert("Fallo actualización");
	});
		 getAction();
		
}	
/********************************************************************************************/

function updatepuntos(){
 	url = now + "index.php/api/creditorest/setPuntosTotalesHistotial/format/json";
 	$.post(url , $("#hiddenformulario").serialize()).done(function (data) {});
 	return false;
}


