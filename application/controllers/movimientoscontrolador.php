<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Movimientoscontrolador extends CI_Controller {
     
    function __construct(){
        parent::__construct();
        
        $this->load->library('tcpdf');
        
        $this->load->model('clientesmodel');
        $this->load->library('sessionclass');  
    }
 
    
    function exportaMovimientosPDF(){


        if ( $this->sessionclass->is_logged_in() == 1) {    
            /*Load data*/               
            $menu = $this->sessionclass->generadinamymenu();            
            $data["menu"] = $menu;
            $nombre = $this->sessionclass->getnombre();
            //$data["datosperfil"] = $this->sessionclass->getuserdataperfil();          
            $data["nombre"]= $nombre;
                
            $data["perfilactual"] =  $this->sessionclass->getnameperfilactual();                

            $data['titulo']='PDF de Movimientos';

            $idusuario =  $this->sessionclass->getidusuario();
        
            $integrantes  = $this->clientesmodel->getClienteByidUserrepo($idusuario);
        
            $data["listado"] = $integrantes;
 
            $this->load->view('TemplateFEX/header', $data);
            $this->load->view('reporte/exportaMovimientosPDF/movimientosPDF',$data);
            $this->load->view('TemplateFEX/footer', $data);


        }else{
            /*Terminamos la session*/

            $this->sessionclass->logout();
        }
    }

}