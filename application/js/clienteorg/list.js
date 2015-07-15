/*Listar las personas que ya tiene algín crédito*/
function listarpersonasconcreditosasigados(){

	url = now + "index.php/api/creditorest/listarpersonasconcreditoempresa/format/json/";

	$.get(url ).done(function (data){

		

			b  = 1;
			listacompleta ="";
			
			flag = 0;
			idcreado =0;
			for(var x in data){

				idcreado ++;
				idpersonafisica = data[x].idpersonafisica;
				calificacion = data[x].calificacion;
				primernombre = data[x].primernombre;
				segundonombre = data[x].segundonombre;
				primerapellido = data[x].primerapellido;
				segundoapellido = data[x].segundoapellido;
				numerocredito = data[x].numerocredito;    		
				nombrecompleto = primernombre  + " " + segundonombre + " "+primerapellido + " "+  segundoapellido;	
      			RFC = data[x].RFC;		
      			Ejecutivo = data[x].ejecutivo;
      			monto = data[x].monto;
      			Tipo = data[x].nombre;
      			fecha_registro = data[x].fecha_registro;
      			fecha = data[x].fecha;
				idarchivo = data[x].idarchivo;
				Completoporcentaje = data[x].Completoporcentaje;
				idhistorial = data[x].idhistorial;
				nota = data[x].nota;
				omisionesgraves = data[x].omisionesgraves;
				puntosTotalescuestionario  = data[x].puntosTotalescuestionario;


				urlimg =now + "application/img/general/credit31.png";
				urlimgevaluar =now + "application/img/general/clipboard44.png";
				urlnextmetricas = now + "index.php/expedientes/metricas?historialcrediticio="+idhistorial+"&oxjexyet="+ idpersonafisica+"&idpersonafisica=" + idpersonafisica+ "&calificacion=" + calificacion + "&numerocredito="+numerocredito+"&nombrecompleto="+nombrecompleto+"&Ejecutivo="+Ejecutivo+"&monto="+monto+"&Tipo="+ Tipo+"&fecha_registro="+fecha_registro +"&fecha="+fecha+"&Completoporcentaje="+Completoporcentaje+"&RFC="+RFC +"&idarchivo="+idarchivo+ "&nota="+ nota;
	            estadoactual = data[x].status;			
	            estadocliente ="";
	            listacompleta +="<tr>";
	            	

	                listacompleta +="<td >"+idcreado+"</td>";
	                listacompleta +="<td >"+numerocredito+"</td>";
	                listacompleta +="<td >"+nombrecompleto+"</td>";
	                listacompleta +="<td >"+RFC+"</td>";
	                listacompleta +="<td >"+Ejecutivo+"</td>";
	                listacompleta +="<td align='right'> $"+ currency(monto, 2, [',', "'", '.']) +"</td>";
	                listacompleta +="<td >"+Tipo+"</td>";
	                listacompleta +="<td >"+getmonthFormat(fecha) + "</td>";
	                listacompleta +="<td >"+getmonthFormat( fecha_registro )+ "</td>";
	                listacompleta +="<td align='center'>"+calificacion + " %</td>";
	                listacompleta +="<td>"+ puntosTotalescuestionario + " de 930 </td>";
	                

	                	
	                 porcentajeReal = (puntosTotalescuestionario*100)/930;
	                	


	                //listacompleta +="<td align='center'>"+Completoporcentaje.slice(".",  4) + "</td>";
	               if(porcentajeReal==100.00){
	                 	listacompleta +="<td align='center' style='background: green; color:white;'>"+porcentajeReal.toFixed(2) + " </td>";
	                 }else{
	                 	listacompleta +="<td align='center'>"+porcentajeReal.toFixed(2) + " </td>";
	                 }


	               // listacompleta +="<td>"+Completoporcentaje.slice(".",  4) + "%</td>";

	                if (omisionesgraves > 0 ) {
	                	

	                	 listacompleta +="<td align='center' style='background: rgb(255, 6, 6); color:white;'><h3>"+omisionesgraves+"</h3></td>";
	                	 //listacompleta +="<td style='background: #9F101B; color:white !important; text-align:center;'><h3>"+omisionesgraves+"</h3></td>";	
	                }else{
	                	 //listacompleta +="<td style='text-align:center;'  ><h3>"+omisionesgraves+"</h3></td>";
	                	 listacompleta +="<td align='center' ><h3>"+omisionesgraves+"</h3></td>";
	                }
	               
	               	
	               	//listacompleta +="<td><button class='btn btn-primary btn-xs md-trigger' data-modal='modal-tab' > <a href='"+urlnextmetricas +"'><i class='fa fa-pencil'></i></button></td>";
	    			listacompleta +="<td  class='center'> <a  href='"+urlnextmetricas +"'><button  class='btn btn-primary btn-xs md-trigger' ><i style='color:white;' class='fa fa-pencil fa-6x '></i></button></a></td>";

	               	
	             
	                
	                /*
	               	 
*/


	              
	                listacompleta +="</tr>";
               	 b++;
			
			}              
			
			llenaelementoHTML("#list_person" , listacompleta);

	}).fail(function(){

		alert("");
	});




}








