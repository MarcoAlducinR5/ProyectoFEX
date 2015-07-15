<?php 
	class Cliente {

		protected $typeclient,  $pregunta , $idcostomer, $respuesta , $historial, $documento_s;
		
		function __construct( $typeclient , $pregunta , $idcostomer , $respuesta, $historial, $documento_s){
			
			$this->typeclient = $typeclient;			
			$this->pregunta = $pregunta;
			$this->idcostomer = $idcostomer;
			$this->respuesta =  $respuesta;
			$this->historial = $historial;
			$this->documento_s = $documento_s;	
		}	

			function getTypeclient(){
				return $this->typeclient;
			}
			function getPregunta(){
				return  $this->pregunta;
			}
			function getIdcostomer(){
				return $this->idcostomer;	
			}
			function getRespuesta(){
				return $this->respuesta;
			}
			function getHistorial(){
				return $this->historial;

			}function getDocumentoSolicitados(){
			
				return $this->documento_s;
			}


			function setTypeclient($newtypeclient ){
			
				$this->typeclient = $newtypeclient;
			}
			function setPregunta($newPregunta){
				$this->pregunta = $newPregunta;
			}
			function setIdcostomer($newIdcostomer){
			
				$this->idcostomer = $newIdcostomer;
			}
			function setRespuesta($newRespuesta){
			
				$this->respuesta = $newRespuesta;

			}function setHistorial($newHistorial){
				
				$this->historial = $newHistorial;

			}function setDocumentosSolicitados($newdocumentos){

				$this->documento_s = $newdocumentos;
			}






	}

?>