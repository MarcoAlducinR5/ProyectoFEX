<?php 

	$z =0;

	$dinamicTable="";
	$wget =0;	



foreach ($datatablegeneric as $key => $value) {


			$primernombre = $datatablegeneric[$key][0]["primernombre"];
			$segundonombre = $datatablegeneric[$key][0]["segundonombre"];
			$primerapellido  = $datatablegeneric[$key][0]["primerapellido"];
			$segundoapellido = $datatablegeneric[$key][0]["segundoapellido"];
			$fecha_registro =  $datatablegeneric[$key][0]["fecha_registro"];
			$idpersonafisica = $datatablegeneric[$key][0]["idpersonafisica"];
		
			$ID = $z;
			$numerocredido =$datatablegeneric[$key][0]["idcredito"];
			$nombrecompleto = $primernombre . " " . $segundonombre . " " . $primerapellido . " " . $segundoapellido; 
			$RFC =  $datatablegeneric[$key][0]["RFC"];	
			$Ejecutivo =$datatablegeneric[$key][0]["Ejecutivoacargo"];
			$Monto =$datatablegeneric[$key][0]["monto"];
			$Tipo ="";
			$Fecha =$datatablegeneric[$key][0]["fecha"];

			$Calificacion =$datatablegeneric[$key][0]["calificacion"]; 
			$porcentaje = $datatablegeneric[$key][0]["Completoporcentaje"];

	        setlocale(LC_MONETARY, 'it_IT');
	        $idhistorial =0 ;
			$idhistorial = $datatablegeneric[$key][0]["idhistorial"];				
			
			$idarchivo =0;
			$nota = $datatablegeneric[$key][0]["nota"];

			

			$urlnextmetricas = base_url(). "index.php/expedientes/metricas?historialcrediticio=". $idhistorial."&oxjexyet=". $idpersonafisica."&idpersonafisica=" . $idpersonafisica. "&calificacion=" 
			. $Calificacion . "&numerocredito=".$numerocredido."&nombrecompleto=".$nombrecompleto.
			"&Ejecutivo=".$Ejecutivo."&monto=".$Monto."&Tipo=".$Tipo."&fecha_registro=".$fecha_registro 
			."&fecha=".$Fecha."&Completoporcentaje=".$porcentaje."&RFC=".$RFC ."&idarchivo=". $idarchivo . "&nota=". $nota;
		           



	                               
	        $nextEvaluacion = "";

			$dinamicTable .="<tr class=''>
					            <td class=''>
					                $ID
					            </td>
					            <td align='center' class=''>$numerocredido</td>
					            <td align='center' class='center hidden-phone ''>$nombrecompleto</td>
					            <td align='center' class='center hidden-phone ''>$RFC</td>
					            <td align='center' class=' '>$Ejecutivo</td>   
					             <td align='right' class=' '>$".number_format(money_format('%.2n', $Monto), 2)."</td>
					            <td align='center' class=' '>$Tipo</td>
					            <td align='center' class='center hidden-phone '> " . getFotmatTimemonth($Fecha)." </td>
					             <td align='center' class='center hidden-phone '>$Calificacion</td>	
					            <td align='center' class='center hidden-phone  sorting_1'>". getformatporcentaje($porcentaje ) ."</td>
	       					</tr>";

		$z++;
	   $wget++;

}









?>

  


<div class="col-md-12">
       <!-- <table   id="dynamic-table">-->

       <table class="datatable">
        <thead>
            
            <tr role="row">
            	
            	<th >ID</th>
            	<th >No. Crédito</th>
            	<th >Nombre Cliente</th>
            	<th >RFC</th>
            	<th >Ejecutivo</th>
                <th >Monto</th>
            	<th >Tipo</th>
            	<th >Fecha</th>
            	<th >Calificación</th>
                <th >%Completo</th>
            </tr>
        </thead>
        
        <tfoot>
        </tfoot>
        <tbody>
        	<?=$dinamicTable;?>
    </tbody></table>
</div><!--Termina tabla-->




