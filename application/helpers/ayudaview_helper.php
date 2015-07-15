<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
//si no existe la función invierte_date_time la creamos
if(!function_exists('invierte_date_time')){

/*******************************************************************************************************/
/*Retornamos la vista que desplegará  en principal*/


function getperfil( $perfil ){

		$idperfilactual  = 0; 
		/*Inicia el ciclo */
			foreach ($perfil as $row) {				
				$idperfilactual = $row["idperfil"];
			}
		/*Termina ciclo*/
		return $idperfilactual;
}

/****************************************************************************************************/	
function displayviewpresentacion( $perfil ){

		$idperfilactual =  getperfil( $perfil );
		
		$view = "";
		switch ($idperfilactual) {
			case 3:

				$view ="principal/bienvenidauserprincipal";		
				break;
			case 4:
				$view ="principal/bienvenidaAdmincuentaempresarial";	
				break;	

			case 5:
				$view ="principal/bienvenidaauditor";	
					break;	
			case 6:
				$view ="principal/bienvenidaoperativo";	
				break;	
					
			default:
				$view ="principal/pagenoencontrada";
				break;
		}

		return $view;

	}

/****************************************************************************************************/	
/*Termina retornamos la vista que desplegará */
 



function displayviewusuario( $perfil ){


	$idperfilactual =  getperfil( $perfil );
		
		$view = "";
		switch ($idperfilactual) {
			case 3:

				$view ="usuarioscuenta/parasuperadministrador";		
				break;
			case 4:
				$view ="usuarioscuenta/paraadministradorcuenta";	
				break;	
					
			default:
				$view ="principal/pagenoencontrada";
				break;
		}

		return $view;

} 

/****************************************************************************************************/	
/*Termina retornamos la vista que desplegará */


function geticon($name){

	switch ($name) {
		case 'Clientes de la cuenta':
			return "fa fa-users";
			break;
		
		case 'Reporte por tema':
			return "fa fa-list-alt";
			break;
		default:
			return  "";
			
			break;
	}
	

}

function getListDataTable($list)
{	


	


	$newList="<table id='datatable'  class='no-border blue'>
                                            <thead>
                                                <tr>
                                                <th>ID</th>
                                                <th>No. Crédito</th>
                                                <th>Nombre Cliente</th>
                                                <th>RFC</th>
                                                <th>Ejecutivo</th>
                                                <th>Monto</th>
                                                <th>Tipo</th>
                                                <th>Fecha de registro</th>
                                                <th>Fecha de captura</th>
                                                <th>Calificación</th>
                                                <th>Puntos acumulados</th>
                                                <th>Porcentaje de captura </th>
                                                <th>Omisiones gráves</th><th>Evaluar</th>    
                                                </tr>
                                            </thead>
                                            <tbody >
                                            ";




	for ($i=0; $i < count($list) ; $i++) { 
		
				$idpersonafisica = $list[$i]["idpersonafisica"];
				$calificacion = $list[$i]["calificacion"];
				$primernombre = $list[$i]["primernombre"];
				$segundonombre = $list[$i]["segundonombre"];
				$primerapellido = $list[$i]["primerapellido"];
				$segundoapellido = $list[$i]["segundoapellido"];
				$numerocredito = $list[$i]["numerocredito"];    		
				$nombrecompleto = $primernombre  . " " . $segundonombre . " ". $primerapellido + " "+  $segundoapellido;	
      			$RFC = $list[$i]["RFC"];		
      			$Ejecutivo = $list[$i]["ejecutivo"];
      			$monto = $list[$i]["monto"];
      			$Tipo = $list[$i]["nombre"];
      			$fecha_registro = $list[$i]["fecha_registro"];
      			$fecha = $list[$i]["fecha"];
				$idarchivo = $list[$i]["idarchivo"];
				$Completoporcentaje = $list[$i]["Completoporcentaje"];
				$idhistorial = $list[$i]["idhistorial"];
				$nota = $list[$i]["nota"];
				$omisionesgraves = $list[$i]["omisionesgraves"];
				$puntosTotalescuestionario  = $list[$i]["puntosTotalescuestionario"];


				$urlimg = base_url('application/img/general/credit31.png');
				$urlimgevaluar = base_url("application/img/general/clipboard44.png");
				$urlnextmetricas = base_url() . "index.php/expedientes/metricas?historialcrediticio=" . $idhistorial . "&oxjexyet=". $idpersonafisica ."&idpersonafisica=" . $idpersonafisica . "&calificacion=" . $calificacion . "&numerocredito=" . $numerocredito ."&nombrecompleto=" . $nombrecompleto ."&Ejecutivo=" . $Ejecutivo ."&monto=" . $monto . "&Tipo=" . $Tipo ."&fecha_registro=" . $fecha_registro ."&fecha=" . $fecha . "&Completoporcentaje=" . $Completoporcentaje ."&RFC=" . $RFC ."&idarchivo=" . $idarchivo . "&nota="+ $nota;
	            $estadoactual = "";			
	            $estadocliente ="";
	           


					$newList.= "<tr>";
					$newList.="<td >".$i."</td>";
	                $newList.="<td >".$numerocredito."</td>";
	                $newList.="<td >".$nombrecompleto."</td>";
	                $newList.="<td >".$RFC."</td>";
	                $newList.="<td >".$Ejecutivo."</td>";
	                $newList.="<td align='right'>".$monto . " </td>";
	                $newList.="<td >". $Tipo."</td>";
	                $newList.="<td > </td>";
	                $newList.="<td ></td>";
	                $newList.="<td align='center'>". $calificacion . "</td>";
	                $newList.="<td>". $puntosTotalescuestionario . " de 930 </td>";
	                
					
					 $porcentajeReal = ($puntosTotalescuestionario*100)/930;
	                	


	                //listacompleta +="<td align='center'>"+Completoporcentaje.slice(".",  4) + "</td>";
	                $newList.="<td align='center'>" . $porcentajeReal . "%</td>";


	               // listacompleta +="<td>"+Completoporcentaje.slice(".",  4) + "%</td>";

	                if ($omisionesgraves > 0 ) {
	                	

	                	 $newList .= "<td align='center' style='background: rgb(255, 6, 6); color:white;'><h3>". $omisionesgraves ."</h3></td>";
	                	 //listacompleta +="<td style='background: #9F101B; color:white !important; text-align:center;'><h3>"+omisionesgraves+"</h3></td>";	
	                }else{
	                	 //listacompleta +="<td style='text-align:center;'  ><h3>"+omisionesgraves+"</h3></td>";
	                	 $newList .="<td align='center' ><h3>" . $omisionesgraves ."</h3></td>";
	                }
	               
	               	
	               	$newList .="<td  class='center'> <a  href='". $urlnextmetricas ."'><button  class='btn btn-primary btn-xs md-trigger' ><i style='color:white;' class='fa fa-pencil fa-6x '></i></button></a></td>";

	               	
	             
	                
	                /*
	               	 
*/


	              
	                $newList .="</tr>";







	}

		$newList .="</tbody>
                                        </table>";
	
		return $newList;
}



}/*Termina el helper*/
 