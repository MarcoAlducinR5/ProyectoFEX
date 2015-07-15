<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class evaluapersonamoralrest extends REST_Controller{
      
    function __construct(){
            parent::__construct();
            

            $this->load->model("documentossolicitadosmodel");
            $this->load->library('sessionclass');
            
        }     




     function evaluaruserclientdocument_GET(){
           
        if ( $this->sessionclass->is_logged_in() == 1) {  

            $idarchivo =  $this->input->get("idarchivo");
            $historialcrediticio =  $this->input->get("historialcrediticio");
            //$historialcrediticio_moral =  $this->input->get("historialcrediticio_moral");


            $data["tablageneraldocumentos"] = $this->documentossolicitadosmodel->listbyidarchivomoral($idarchivo);
            $data["calificacionhistorial"] = $this->documentossolicitadosmodel->calificacionhistorialmoral( $historialcrediticio); 
            $data["conOmisionesMorales"]= $this->documentossolicitadosmodel->conOmisionesMorales( $historialcrediticio);
            $data["sinOmisionesMorales"]= $this->documentossolicitadosmodel->sinOmisionesMorales( $historialcrediticio);

            
            $this->response($data );
                   
        
        }else{
            $this->sessionclass->logout();
        
        }    

    }/*Termina función */

	/*Termina rest*/
}

