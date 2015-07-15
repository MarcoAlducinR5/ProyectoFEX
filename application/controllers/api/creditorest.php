<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class Creditorest extends REST_Controller{

    function __construct(){
            parent::__construct();
            

            $this->load->model("clientesmodel");
            $this->load->model("empresamodel");
            $this->load->library('sessionclass');
            
        }         
	function index(){}        





function setPuntosTotalesHistotial_post()
{
  
      $puntos= $this->post("input_puntoRecabados");
      $historial = $this->post("historialcrediticioo");
      $tipo =  $this->post("tipo");
     
      $this->response($this->clientesmodel->setpuntosHistorial($puntos , $historial, $tipo));
     
}

/********************************************************************************************************/

function listinfocreditobyempresa_get(){

    
    if ( $this->sessionclass->is_logged_in() == 1) {            

            /*Captamos el recurso que estamo solicitando*/
           $idempresa =  $this->sessionclass->getidempresa();
           $this->response($this->getcreditosbyempresa($idempresa));  


       }else{
            $this->sessionclass->logout();
        }


}/*Termina la función*/



function getcreditosbyempresa($idempresa){

    return $this->empresamodel->getcreditosdisponiblesbyidempresa($idempresa);
}/*Termina la función*/



function listarpersonasmoralesconcreditoempresa_get(){
    if ( $this->sessionclass->is_logged_in() == 1) {            
          $idempresa =  $this->sessionclass->getidempresa();
         $this->response($this->clientesmodel->clientesmoralesbyempresa($idempresa));
        
       }else{
            $this->sessionclass->logout();
    }
}/*termina */


/**********************************************************************************/
function listarpersonasconcreditoempresa_get(){


    if ( $this->sessionclass->is_logged_in() == 1) {            

          $idempresa =  $this->sessionclass->getidempresa();
         $this->response($this->clientesmodel->clientesbyempresa($idempresa));

        

       }else{
            $this->sessionclass->logout();
    }
}/*termina */

/**********************************************************************************/



function listarinformacioncreditobyuser_get(){


    if ( $this->sessionclass->is_logged_in() == 1) {            

          $clienteorg = $this->input->get("clienteorg");
          $this->response( $this->clientesmodel->listarinfocreditosbyuser($clienteorg) );

       }else{
            $this->sessionclass->logout();
    }
}/*termina */

/**********************************************************************************/



function listarelnumerodecreditosdelapersona_get(){
  
    if ( $this->sessionclass->is_logged_in() == 1) {            

          $clienteorg = $this->input->get("clienteorg");
          $this->response( $this->clientesmodel->listarelnumerodecreditosdelapersona($clienteorg ) );

       }else{
            $this->sessionclass->logout();
    }

}












function getSurveyClient_get(){



    if ( $this->sessionclass->is_logged_in() == 1) {            

        $documento = $this->get("documento");
        $clienteorg =  $this->get("clienteorg");
        $numerocreditook = $this->get("numerocreditook");
        $historialp =  $this->get("histotialp");

        
         $this->response($this->clientesmodel->surveydocumentclienteorg2( $documento ,  $clienteorg , $historialp ));

          


       }else{
            $this->sessionclass->logout();
    }


}




function surveydocumentclient_get(){

    if ( $this->sessionclass->is_logged_in() == 1) {            

        $documento = $this->get("documento");
        $clienteorg =  $this->get("clienteorg");

        $this->response($this->clientesmodel->surveydocumentclienteorg( $documento ,  $clienteorg ));

       }else{
            $this->sessionclass->logout();
    }

}



/*
function surveydocumentclient_get(){

  

    if ( $this->sessionclass->is_logged_in() == 1) {            

        $documento = $this->get("documento");
        $clienteorg =  $this->get("clienteorg");

        $this->response($this->clientesmodel->surveydocumentclienteorg( $documento ,  $clienteorg ));

       }else{
            $this->sessionclass->logout();
    }

}


función*/




 function surveydocumentclientmoral_get()
{
 

    if ( $this->sessionclass->is_logged_in() == 1) {            

        $documento = $this->get("documento");
        $clienteorg =  $this->get("clienteorg");

       $this->response($this->clientesmodel->surveydocumentclienteorgmoral( $documento ,  $clienteorg ));
        //$this->response( $clienteorg);
       }else{
            $this->sessionclass->logout();
    }
}



function updaterespuestacliente_post(){


    if ( $this->sessionclass->is_logged_in() == 1) {            

      $pregunta = $this->post("pregunta"); 
      $idcostomer = $this->post("idcostomer");
      $respuesta =  $this->post("respuesta");
      $historial = $this->post("historial");
      $documento_s = $this->post("documento_s"); 
      $typeclient = $this->post("typeclient");

      $this->response($this->clientesmodel->updaterespuesta( $typeclient  , $pregunta , $idcostomer, $respuesta , $historial , $documento_s));


       }else{

        $this->sessionclass->logout();
    }


}/*termina la funcion*/


function updaterespuestaclientemoral_post(){


    if ( $this->sessionclass->is_logged_in() == 1) {            

      $pregunta = $this->post("pregunta"); 
      $idcostomer = $this->post("idcostomer");
      $respuesta =  $this->post("respuesta");
      $historial = $this->post("historial");
      $documento_s = $this->post("documento_s"); 

        $this->response($this->clientesmodel->updaterespuestamoral($pregunta , $idcostomer, $respuesta , $historial , $documento_s));

        }else{

        $this->sessionclass->logout();
    }


}/*termina la funcion*/

/**********************************************************************************/





function getinfodocument_get(){
   
   if ( $this->sessionclass->is_logged_in() == 1) {            

        
        $documento = $this->get("documento");
        $this->response($this->empresamodel->getinfodocumentbyid($documento));

       }else{

        $this->sessionclass->logout();
    }

}/*Termina la función*/






function getstatusdocumentocliente_get(){
   
   if ( $this->sessionclass->is_logged_in() == 1) {            

        
        $documento = $this->get("documento");
        $clienteorg = $this->get("clienteorg");

        $this->response($this->empresamodel->getinfodocumentbyidstatuscliente($documento,  $clienteorg)   );

       }else{

        $this->sessionclass->logout();
    }

}/*Termina la función*/





function updatestatusdocumentocliente_get(){
   
   if ( $this->sessionclass->is_logged_in() == 1) {            

        
        $documento = $this->get("documento");
        $clienteorg = $this->get("clienteorg");

        $this->response($this->empresamodel->updateinfodocumentbyidstatuscliente($documento,  $clienteorg)   );

       }else{

        $this->sessionclass->logout();
    }

}/*Termina la función*/






	/*Termina rest*/
}
