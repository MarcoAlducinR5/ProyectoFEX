<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class documentossolicitadosmodel extends CI_Model {

function __construct(){

        parent::__construct();        
        $this->load->database();
}




function redord($documento_solicitado , $especificacionesdocumento , $idarchivo){
  	
  	


	$existe  = $this->existredocumentoinarchivo( $documento_solicitado , $idarchivo);
	if ($existe!=1) {
		
		$queryinsert ="INSERT INTO  documentosolicitado(nombredocumento , status , idarchivo , notadocumento , puntuacion) 
					VALUES ( '".$documento_solicitado ."' , 1 , '".$idarchivo."' ,  '".$especificacionesdocumento."' , 10 )"; 
  	
		$dbresponse = $this->db->query( $queryinsert); 	

	}else{
		$dbresponse = 2;
	}

	return $dbresponse;
	 	
}


 function existredocumentoinarchivo( $documento_solicitado , $idarchivo){

        $query_existrecurso ="SELECT * FROM documentosolicitado WHERE  nombredocumento = '". $documento_solicitado . "'  AND  idarchivo = '". $idarchivo."' ";
        $result = $this->db->query($query_existrecurso);  
        /*Bandera */

        $b=0;
        foreach ($result ->result_array() as $row){

            $b++;


        }   
        return $b;      
    }
    /*Termina función */


function listbyidarchivo($idarchivo){
	


	$queryselect  = "select  d.iddocumentosolicitado , d.nombredocumento , d.status ,  d.idarchivo, 
d.fecha_registro, d.notadocumento, d.puntuacion , d.omisiongrave , SUM(p.valor) as totalrequeridos
from documentosolicitado  as d  , pregunta as p , documentosolicitado_pregunta as ds 
WHERE idarchivo ='".$idarchivo."' and 
ds.idpregunta = p.idpregunta and ds.iddocumentosolicitado= d.iddocumentosolicitado 
GROUP BY d.nombredocumento; ";	
	$result = $this->db->query($queryselect);  
	$data = $result->result_array();
	return $data;

}



function listbyidarchivomoral($idarchivo){
	


	$queryselect  = "select  d.iddocumentosolicitado , d.nombredocumento , d.status ,  d.idarchivo, 
d.fecha_registro, d.notadocumento, d.puntuacion , d.omisiongrave , SUM(p.valor) as totalrequeridos
from documentosolicitado  as d  , pregunta as p , documentosolicitado_pregunta as ds 
WHERE idarchivo ='".$idarchivo."' and ds.idpregunta = p.idpregunta and ds.iddocumentosolicitado= d.iddocumentosolicitado 
GROUP BY d.nombredocumento; ";	
	$result = $this->db->query($queryselect);  
	$data = $result->result_array();
	return $data;

}



/**/

function updatenombredocsolicitadobyid($nuevonombre, $iddocumentosolicitado){
	

	$queryupdatenombre  = "UPDATE  documentosolicitado SET nombredocumento  = '".$nuevonombre."' WHERE iddocumentosolicitado  = '". $iddocumentosolicitado."' ";
	$result = $this->db->query($queryupdatenombre);  
	return $result;


}


function updatenotadocumentosolicitadomyid($nuevanota, $iddocumentosolicitado){
	
	$queryupdatenota  = "UPDATE  documentosolicitado SET notadocumento = '".$nuevanota."' WHERE iddocumentosolicitado  = '". $iddocumentosolicitado."' ";
	$result = $this->db->query($queryupdatenota);  
	return $result;


}



function deletesolicituddbbyid( $iddocumentosolicitado){

	$querydelete = "DELETE FROM documentosolicitado  WHERE iddocumentosolicitado  = '". $iddocumentosolicitado."' ";
	$result = $this->db->query($querydelete);  
	return $result;
}


function uppuntuaciondbbyiddocumentosolicitado($iddocumentosolicitado, $nuevapuntuacion){

	$queryupdate = "UPDATE documentosolicitado SET puntuacion = '".$nuevapuntuacion."' WHERE  iddocumentosolicitado = '".$iddocumentosolicitado."' ";
	$result = $this->db->query($queryupdate);  
	return $result;

}



function getDocumentossolicitadosbyid($creditosolicitado){

	$queryselectdocument  = "SELECT * FROM documentosolicitado WHERE idarchivo = '".$creditosolicitado."' "; 		
	$result =  $this->db->query($queryselectdocument);
	return $result->result_array();	

}







function consultaOmisiones1($historialcrediticio){

	$rNo_oNo = "SELECT count(cof.respuesta) FROM  clienteorg_respuesta AS cof, 
	historial_crediticio AS hcf WHERE hcf.idhistorial = cof.idhistorial AND cof.respuesta =  'not' 
	AND  cof.omision = 0 AND hcf.idhistorial = '".$historialcrediticio."' ";
	$respuestaNo =  $this->db->query($rNo_oNo);
	//$vista = $respuestaNo->num_rows();
	foreach ($respuestaNo ->result_array()  as  $row) {			
		$v = $row["count(cof.respuesta)"];
	}
	return $v;
}

function consultaOmisiones2($historialcrediticio){

$rNo_oNo = "SELECT count(cof.respuesta) FROM  clienteorg_respuesta AS cof, 
	historial_crediticio AS hcf WHERE hcf.idhistorial = cof.idhistorial AND cof.respuesta =  'yes' 
	 AND hcf.idhistorial = '".$historialcrediticio."' ";
	$respuestaNo =  $this->db->query($rNo_oNo);
	//$vista = $respuestaNo->num_rows();
	foreach ($respuestaNo ->result_array()  as  $row) {			
		$v = $row["count(cof.respuesta)"];
	}
	return $v;
}

function conOmisionesMorales($historialcrediticio){

	$conOm = "SELECT COUNT( com.respuesta ) FROM clienteorgmoral_respuesta AS com, 
	historial_crediticio_moral AS hcm WHERE hcm.idhistorial_crediticio_moral = com.idhistorialcrediticiomoral
	AND com.respuesta =  'not' AND com.omision =0 AND hcm.idhistorial_crediticio_moral = '".$historialcrediticio."' ";
	$respuestaNo =  $this->db->query($conOm);
	//$vista = $respuestaNo->num_rows();
	foreach ($respuestaNo ->result_array()  as  $row) {			
		$v = $row["COUNT( com.respuesta )"];
	}
	return $v;
}


function sinOmisionesMorales($historialcrediticio){

$sinOm = "SELECT COUNT( com.respuesta ) FROM clienteorgmoral_respuesta AS com, 
historial_crediticio_moral AS hcm WHERE hcm.idhistorial_crediticio_moral = com.idhistorialcrediticiomoral
AND com.respuesta =  'yes' AND hcm.idhistorial_crediticio_moral = '".$historialcrediticio."' ";
	$respuestaSi =  $this->db->query($sinOm);
	//$vista = $respuestaSi->num_rows();
	foreach ($respuestaSi ->result_array()  as  $row) {			
		$v = $row["COUNT( com.respuesta )"];
	}
	return $v;
}





function actualizaOmision($iddocumentosolicitado){

	$queryselect = "SELECT omisiongrave FROM documentosolicitado WHERE iddocumentosolicitado = '".$iddocumentosolicitado."' ";
	$result = $this->db->query($queryselect);
	
	$v =0;

	foreach ($result ->result_array()  as  $row) {			
		$v = $row["omisiongrave"];
	}

	if($v == 0){
		$queryupdate = "UPDATE documentosolicitado SET omisiongrave = '1' WHERE iddocumentosolicitado = '".$iddocumentosolicitado."' ";
		return $this->db->query($queryupdate);
		
	}
	else {
		$queryupdate1 = "UPDATE documentosolicitado SET omisiongrave = '0' WHERE iddocumentosolicitado = '".$iddocumentosolicitado."' ";
		return $this->db->query($queryupdate1);

	}
	
	//return $v;
	
}




function calificacionhistorial( $historialcrediticio){

	$queryselecthistorial = "SELECT * FROM historial_crediticio WHERE idhistorial = '".$historialcrediticio."' ";
	$result =  $this->db->query($queryselecthistorial);
	return $result->result_array();	

}

function calificacionhistorialmoral( $historialcrediticio){

	$queryselecthistorial = "SELECT * FROM historial_crediticio_moral WHERE idhistorial_crediticio_moral = '".$historialcrediticio."' ";
	$result =  $this->db->query($queryselecthistorial);
	return $result->result_array();	

}





/*******************************************************/

function getNumomisionesgraves($historialcrediticio){

	
}/*Termina la función*/


/*Termina modelo */
}



