<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class evaluacionpersonafisicarest extends REST_Controller{
      
    function __construct(){
            parent::__construct();
            

            $this->load->model("documentossolicitadosmodel");
            $this->load->library('sessionclass');
            
        }         





     function evaluaruserclientdocument_GET(){
           
        if ( $this->sessionclass->is_logged_in() == 1) {  

            $idarchivo =  $this->get("idarchivo");
            $historialcrediticio =  $this->get("historialcrediticio");


            $data["tablageneraldocumentos"] = $this->documentossolicitadosmodel->listbyidarchivo($idarchivo);
            $data["calificacionhistorial"] = $this->documentossolicitadosmodel->calificacionhistorial( $historialcrediticio); 
            $data["consultaOmisiones1"]= $this->documentossolicitadosmodel->consultaOmisiones1( $historialcrediticio);
            $data["consultaOmisiones2"]= $this->documentossolicitadosmodel->consultaOmisiones2( $historialcrediticio);


            $this->response($data );
            //$this->response( $data );
               
        
        }else{
            $this->sessionclass->logout();
        
        }    

    }/*Termina función */




	/*Termina rest*/
}

