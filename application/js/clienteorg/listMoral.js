function listarpersonasmoralesconcreditosasigados(){

	url = now + "index.php/api/creditorest/listarpersonasmoralesconcreditoempresa/format/json/";

	$.get(url ).done(function (data){

		
		
			b  = 1;
			
			listacompleta ="";

			
			flag = 0;
			idcreado =0;
			for(var x in data){

				idcreado ++;
				idpersonamoral = data[x].idpersonamoral;
				calificacion = data[x].calificacion;
				nombreempresa = data[x].nombreempresa;
				numerocredito = data[x].numerocredito;    		
      			RFC = data[x].RFC;		
      			Ejecutivo = data[x].ejecutivo;
      			monto = data[x].monto;
      			Tipo = data[x].nombre;
      			fecha_registro = data[x].fecha_registro;
      			fecha = data[x].fecha;
				Completoporcentaje = data[x].Completoporcentaje;
				Ejecutivoacargo =  data[x].Ejecutivoacargo;
				Comentarios = data[x].Comentarios;
				nombre = data[x].nombre;
				idhistorial_crediticio_moral = data[x].idhistorial_crediticio_moral;
				idarchivo = data[x].idarchivo;
				omisionesgraves = data[x].omisionesgraves;
				puntosTotalescuestionario  = data[x].puntosTotalescuestionario;

				urlimg =now + "application/img/general/credit31.png";
				urlimgevaluar =now + "application/img/general/clipboard44.png";


				urlnextmetricas = now + "index.php/expedientes/metricasmoral?oxjexyet="+ idpersonamoral +"&calificacion=" +calificacion + "&nombreempresa="+nombreempresa+"&numerocredito="+ numerocredito+"&RFC="+RFC+"&Ejecutivo="+ Ejecutivo + "&monto="+ monto +"&Tipo="+Tipo +"&fecha_registro="+fecha_registro+"&fecha="+fecha+"&Completoporcentaje="+Completoporcentaje+"&Ejecutivoacargo="+Ejecutivoacargo+"&nombre="+nombre+"&idhistorial_crediticio_moral="+idhistorial_crediticio_moral+"&idarchivo="+idarchivo;
	          
	            estadoactual = data[x].status;			
	            listacompleta +="<tr>";

	            	
	              
	                listacompleta +="<td >"+idcreado+"</td>";
	                listacompleta +="<td >"+numerocredito+"</td>";
	                listacompleta +="<td> "+nombreempresa+"</td>";
	                listacompleta +="<td >"+RFC+"</td>";
	                listacompleta +="<td >"+Ejecutivo+"</td>";
	                listacompleta +="<td align='right'>$"+ currency(monto, 2, [',', "'", '.']) +"</td>";
	                listacompleta +="<td >"+Tipo+"</td>";
	               
	                listacompleta +="<td >"+getmonthFormat(fecha)+ "</td>";
	                listacompleta +="<td >"+getmonthFormat(fecha_registro)+ "</td>";
	                listacompleta +="<td align='center' >"+calificacion + " %</td>";
	                listacompleta +="<td align='center' >"+ puntosTotalescuestionario + " de 930 </td>";
	                //listacompleta +="<td align='center' >"+ Completoporcentaje.slice(".",  4)  + "%</td>";
	              	


	              	porcentajeReal = (puntosTotalescuestionario*100)/930;
					
					//listacompleta +="<td align='center'>"+Completoporcentaje.slice(".",  4) + "</td>";
	                if(porcentajeReal==100.00){
	                 	listacompleta +="<td align='center' style='background: green; color:white;'>"+porcentajeReal.toFixed(2) + "</td>";
	                 }else{
	                 	listacompleta +="<td align='center'>"+porcentajeReal.toFixed(2) + "</td>";
	                 }

	              	 if (omisionesgraves > 0 ) {
	                	// listacompleta +="<td  style='background:#9F101B; color:white !important; text-align:center;'><h3>"+omisionesgraves+"</h3></td>";	
	                	 listacompleta +="<td align='center' style='background: rgb(255, 6, 6); color:white;' ><h3>"+omisionesgraves+"</h3></td>";	

	                }else{
	                	 //listacompleta +="<td class=''><div style='text-align:center;' ><h3>"+omisionesgraves+"</h3></div></td>";
	                	 listacompleta +="<td align='center'  ><div><h3>"+omisionesgraves+"</h3></div></td>";
	                }

	               //	listacompleta +="<td><a href='"+urlnextmetricas +"'><img class='evaluar_user' src='"+urlimgevaluar+"'></a></td>";
	             	listacompleta +="<td> <a  href='"+urlnextmetricas +"'><button  class='btn btn-primary btn-xs md-trigger' ><i style='color:white;'  class='fa fa-pencil fa-6x evaluar_user'></i></button></a></td>";

	                
	              
	                listacompleta +="</tr>";


	            
               	 b++;
			
			}              
			
			llenaelementoHTML("#list_person_moral" , listacompleta);

	}).fail(function(){

		alert("");
	});



}




