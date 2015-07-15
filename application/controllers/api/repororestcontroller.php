<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class Repororestcontroller extends REST_Controller{

    
   
    function __construct(){
            parent::__construct();
            $this->load->model("repomodel");
            $this->load->library('sessionclass');
            
    }



     function index_get(){

         if ( $this->sessionclass->is_logged_in() == 1) {  

                    $this->response("ok");

             }else{
            $this->sessionclass->logout();
        
        }    

        

    }

    /*Número cde o*/
     function getOmisionesGravesPersonasFisica_get(){
            

            if ( $this->sessionclass->is_logged_in() == 1) {  

                $idempresa = $this->sessionclass->getidempresa();    
                $this->response($this->repomodel->getalertasempresapersonasfisicas($idempresa));
             }else{
            $this->sessionclass->logout();
        
        }   

    }


     /*Número de omisiones graves personas físicas en el sistema */
     function getOmisionesGravesPersonasMorales_get(){
            

            if ( $this->sessionclass->is_logged_in() == 1) {  

                $idempresa = $this->sessionclass->getidempresa();    
                $this->response($this->repomodel->getalertasempresapersonasmorales($idempresa));
                
             }else{
            $this->sessionclass->logout();
        
        }
    } 

    
     function getReportegeneral_get()
    {


            if ( $this->sessionclass->is_logged_in() == 1) {  

                $idempresa = $this->sessionclass->getidempresa();    
                


                $data["numeropersonasfisicas"] = $this->repomodel->getNumeroPersonasFisicasByIdEmpresa($idempresa);
                $data["numeropersonamoral"] = $this->repomodel->getNumeroPersonamoralByIdEmpresa($idempresa);
                $data["totalclientes"] = $this->repomodel->getNumeroPersonasFisicasByIdEmpresa($idempresa) + 
                $this->repomodel->getNumeroPersonamoralByIdEmpresa($idempresa); 

                $data["ExpedientesPersonasMorales"] =  $this->repomodel->getNumExpedientesMorales($idempresa);
                $data["ExpedientesPersonasFisicas"] =   $this->repomodel->getNumExpedientesFisicas($idempresa);
                $data["TotalExpedientes"]=   $this->repomodel->getNumExpedientesFisicas($idempresa) + 
                $this->repomodel->getNumExpedientesMorales($idempresa);
                
                //$data["numeroalertasmorales"]=$this->repomodel->getalertasempresapersonasmorales($idempresa);
                //$data["numeroalertasfisicas"]=$this->repomodel->getalertasempresapersonasfisicas($idempresa);
                //$data["TotalAlertas"] = $this->repomodel->getalertasempresapersonasmorales($idempresa)+ $this->repomodel->getalertasempresapersonasfisicas($idempresa);
                
                $data["numeroOGRAVESmorales"]=$this->repomodel->getomisionesMUYgravesmorales($idempresa);
                $data["numeroOGRAVESfisicas"]=$this->repomodel->getomisionesMUYgravesfi($idempresa);
                $data["TotalOGRAVES"] = $this->repomodel->getomisionesMUYgravesmorales($idempresa) + 
                $this->repomodel->getomisionesMUYgravesfi($idempresa);
            
                $data["omisionesmorales"] = $this->repomodel->getomisionesnogravesmorales($idempresa); 
                $data["omisionesfi"] = $this->repomodel->getomisionesnogravesfi($idempresa); 
                $data["TotalSinOmisiones"] = $this->repomodel->getomisionesnogravesmorales($idempresa) + 
                $this->repomodel->getomisionesnogravesfi($idempresa);
                
                $data["Otro_omisionesmorales"] = $this->repomodel->getSINomisionesmorales($idempresa); 
                $data["Otro_omisionesfi"] = $this->repomodel->getSINomisionesfi($idempresa); 
                $data["Otro_TotalSinOmisiones"] = $this->repomodel->getSINomisionesmorales($idempresa) + 
                $this->repomodel->getSINomisionesfi($idempresa);
                

            


                $this->response($data);
                
             }else{
            $this->sessionclass->logout();
        
        }

       
    }






}
