<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class Clienteorgrest extends REST_Controller{

    function __construct(){
            parent::__construct();
                
            $this->load->model("documentossolicitadosmodel");
            $this->load->model("clientesmodel");
            $this->load->library('sessionclass');
            
        }         
    function index(){}        





function displayinfoclientebyid_get(){
  
    if ( $this->sessionclass->is_logged_in() == 1) {            

          $clienteorg = $this->input->get("clienteorg");
          $this->response( $this->clientesmodel->displayinfoclientebyid($clienteorg) );



       }else{
            $this->sessionclass->logout();
    }

}

function actualizaApellidoPaterno_post(){

    //$this->response("test correcto");

    if ( $this->sessionclass->is_logged_in() == 1) {  


            $nuevoApellidoPaterno = $this->post('apellido');
            $clienteorg = $this->post("idCliente");
            $respuestaDB = $this->clientesmodel->actualizaApellidoPaterno($nuevoApellidoPaterno,$clienteorg);
            $this->response($respuestaDB);

    }else{
            $this->sessionclass->logout();
    }     
}

function actualizaApellidoMaterno_post(){

    //$this->response("test correcto");

    if ( $this->sessionclass->is_logged_in() == 1) {  


            $nuevoApellidoMaterno = $this->post('apellido');
            $clienteorg = $this->post("idCliente");
            $respuestaDB = $this->clientesmodel->actualizaApellidoMaterno($nuevoApellidoMaterno,$clienteorg);
            $this->response($respuestaDB);

    }else{
            $this->sessionclass->logout();
    }     
}

function actualizaN1_post(){

    //$this->response("test correcto");

    if ( $this->sessionclass->is_logged_in() == 1) {  


            $nuevoNombre1 = $this->post('nombre');
            $clienteorg = $this->post("idCliente");
            $respuestaDB = $this->clientesmodel->actualizaN1($nuevoNombre1,$clienteorg);
            $this->response($respuestaDB);

    }else{
            $this->sessionclass->logout();
    }     
}

function actualizaN2_post(){

    //$this->response("test correcto"lienteorgrest);

    if ( $this->sessionclass->is_logged_in() == 1) {  


            $nuevoNombre2 = $this->post('nombre');
            $clienteorg = $this->post("idCliente");
            $respuestaDB = $this->clientesmodel->actualizaN2($nuevoNombre2,$clienteorg);
            $this->response($respuestaDB);

    }else{
            $this->sessionclass->logout();
    }     
}






function displaydocumentossolicitados_get(){

    
    if ( $this->sessionclass->is_logged_in() == 1) {  


            $creditosolicitado = $this->get("creditosolicitado");     
            $this->response($this->documentossolicitadosmodel->getDocumentossolicitadosbyid($creditosolicitado) );
           

    }else{
            $this->sessionclass->logout();
    }        
}




function insertclienteorgfisico_post(){


    if ( $this->sessionclass->is_logged_in() == 1) {  


        
            $RFC = $this->post("RFC");
            $textodescripcion =  $this->post("textodescripcion");
            $montocredito =  $this->post("montocredito");
            $creditook = $this->post("creditook");
            $apellidopaterno = $this->post("apellido");
            $apellidomaterno =  $this->post("apellidom");
            $nombre1 =  $this->post("nombres");
            $nombres2= $this->post("nombres2");
        
            $fecha = $this->post("fecha");
                                  
            $numerocredito = $this->post("numerocredito");
            $ejecutivo  = $this->post("ejecutivo");
            $nota = $this->post("nota");

            $idempresa = $this->sessionclass->getidempresa();
            $idusuario = $this->sessionclass->getidusuario();


            $dbresponse =  $this->clientesmodel->insertclienteorgfisico($apellidopaterno,  $apellidomaterno , 
                $nombre1,  $nombres2 ,  $idempresa, $idusuario , $creditook,  $montocredito, $RFC ,
                 $textodescripcion ,  $fecha ,  $numerocredito ,  $ejecutivo ,  $nota );

            $this->response( $dbresponse );           

    }else{
            $this->sessionclass->logout();
    }     
}
/**********************************************************************************/



    function clientedocumento_post(){


        if ( $this->sessionclass->is_logged_in() == 1) {  

                $iddocumento  =  $this->post("iddocumento");
                $idclienteorg = $this->post("idclienteorg");
                $respuesta = $this->post("respuesta");
                $this->response( $this->clientesmodel->documenta($iddocumento  , $idclienteorg , $respuesta ) );           

        }else{
                $this->sessionclass->logout();
        }     
    }
    /*Termina rest*/


function insertclienteorgmoral_post(){
    if ( $this->sessionclass->is_logged_in() == 1) {  
        
            $RFC = $this->post("RFC");
            $textodescripcion =  $this->post("textodescripcion");
            $montocredito =  $this->post("montocredito");
            $creditook = $this->post("creditook");
            $empresa = $this->post("empresa");
        
            $fecha = $this->post("fecha");
                                  
            $numerocredito = $this->post("numerocredito");
            $ejecutivo  = $this->post("ejecutivo");
            $nota = $this->post("nota");
            $idempresa = $this->sessionclass->getidempresa();
            $idusuario = $this->sessionclass->getidusuario();
            $dbresponse =  $this->clientesmodel->insertclienteorgmoral($empresa,  $idempresa, 
                $idusuario , $creditook,  $montocredito, $RFC ,
                 $textodescripcion ,  $fecha ,  $numerocredito ,  $ejecutivo ,  $nota );
            $this->response( $dbresponse );           
    }else{
            $this->sessionclass->logout();
    }     
}

}
