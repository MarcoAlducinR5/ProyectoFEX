<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auditoria extends CI_Controller {
     
    function __construct(){
        parent::__construct();
        
        $this->load->library('tcpdf');
        
        $this->load->model('repomodel');
        $this->load->model('cuentageneralmodel');
        $this->load->library('sessionclass');  
    }
 
    function index()
    {
        if ( $this->sessionclass->is_logged_in() == 1) {    
            /*Load data*/               
            $menu = $this->sessionclass->generadinamymenu();            
            $data["menu"] = $menu;
            $nombre = $this->sessionclass->getnombre();
            //$data["datosperfil"] = $this->sessionclass->getuserdataperfil();          
            $data["nombre"]= $nombre;
                
            $data["perfilactual"] =  $this->sessionclass->getnameperfilactual(); 
                                        

            $data['titulo']='Usuarios';
 
            $this->load->view('TemplateFEX/headersesion', $data);   
            $this->load->view('auditoria/auditoria');
            $this->load->view('TemplateFEX/footersession', $data);  


            }else{
                /*Terminamos la session*/

                $this->sessionclass->logout();
            }
    }

    function exportaTablaPDF(){


        
        if ( $this->sessionclass->is_logged_in() == 1) {    
            /*Load data*/               
            $menu = $this->sessionclass->generadinamymenu();            
            $data["menu"] = $menu;
            $nombre = $this->sessionclass->getnombre();
            //$data["datosperfil"] = $this->sessionclass->getuserdataperfil();          
            $data["nombre"]= $nombre;
                
            $data["perfilactual"] =  $this->sessionclass->getnameperfilactual();                
            $data['titulo']='PDF de Superusuario';
            $iduser  = $this->sessionclass->getidusuario();
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

            $nClienteFisico = $this->repomodel->getNumeroPersonasFisicasByIdEmpresa($idempresa);
            $nClienteMoral = $this->repomodel->getNumeroPersonamoralByIdEmpresa($idempresa);
            $nTotalCliente = $this->repomodel->getNumeroPersonasFisicasByIdEmpresa($idempresa) + $this->repomodel->getNumeroPersonamoralByIdEmpresa($idempresa);
            
            $nAlertasFisicas = $this->repomodel->getomisionesMUYgravesfi($idempresa);
            $nAlertasMorales = $this->repomodel->getomisionesMUYgravesmorales($idempresa);
            $nTotalAlertas = $this->repomodel->getomisionesMUYgravesmorales($idempresa) + $this->repomodel->getomisionesMUYgravesfi($idempresa);
            
            $nExpFisicos = $this->repomodel->getNumExpedientesFisicas($idempresa);
            $nExpMorales = $this->repomodel->getNumExpedientesMorales($idempresa);
            $nTotalExp = $this->repomodel->getNumExpedientesFisicas($idempresa) + $this->repomodel->getNumExpedientesMorales($idempresa);
            
            $nSinOmisionesFisicas = $this->repomodel->getomisionesnogravesfi($idempresa); 
            $nSinOmisionesMorales = $this->repomodel->getomisionesnogravesmorales($idempresa); 
            $nTotalSinOmisiones = $this->repomodel->getomisionesnogravesmorales($idempresa) + $this->repomodel->getomisionesnogravesfi($idempresa);

            $nOtro_omisionesfi = $this->repomodel->getSINomisionesfi($idempresa); 
            $nOtro_omisionesmorales = $this->repomodel->getSINomisionesmorales($idempresa); 
            $nOtro_TotalSinOmisiones = $this->repomodel->getSINomisionesmorales($idempresa) + $this->repomodel->getSINomisionesfi($idempresa);


            $pClientesFisico =  ($nClienteFisico*100)/$nTotalCliente;
            $pClienteMoral =  ($nClienteMoral*100)/$nTotalCliente;
            $pAlertasFisico =  ($nAlertasFisicas*100)/$nTotalAlertas;
            $pAlertasMoral =  ($nAlertasMorales*100)/$nTotalAlertas;
            $pExpFisico =  ($nExpFisicos*100)/$nTotalExp;
            $pExpMoral =  ($nExpMorales*100)/$nTotalExp;
            $pSinOmisionFisico = ($nSinOmisionesFisicas*100)/$nTotalSinOmisiones;
            $pSinOmisionMoral = ($nSinOmisionesMorales*100)/$nTotalSinOmisiones;

            $pOtro_omisionesfi = ($nOtro_omisionesfi*100)/$nOtro_TotalSinOmisiones;
            $pOtro_omisionesmorales = ($nOtro_omisionesmorales*100)/$nOtro_TotalSinOmisiones;


            $data['porcentajeClientesFisicos']= round( $pClientesFisico, 2, PHP_ROUND_HALF_ODD);
            $data['porcentajeClientesMorales']= round( $pClienteMoral, 2, PHP_ROUND_HALF_ODD);
            $data['porcentajeAlertasFisicos']= round(  $pAlertasFisico, 2, PHP_ROUND_HALF_ODD);
            $data['porcentajeAlertasMorales']= round( $pAlertasMoral, 2, PHP_ROUND_HALF_ODD);
            $data['porcentajeExpedientesFisicos']= round( $pExpFisico, 2, PHP_ROUND_HALF_ODD);
            $data['porcentajeExpedientesMorales']= round( $pExpMoral, 2, PHP_ROUND_HALF_ODD);
            $data['porcentajeSinOmisionesFisicos']= round( $pSinOmisionFisico, 2, PHP_ROUND_HALF_ODD);
            $data['porcentajeSinOmisionesMorales']= round( $pSinOmisionMoral, 2, PHP_ROUND_HALF_ODD);

            $data['porcentajeOtro_omisionesfi']= round( $pOtro_omisionesfi, 2, PHP_ROUND_HALF_ODD);
            $data['porcentajeOtro_omisionesmorales']= round( $pOtro_omisionesmorales, 2, PHP_ROUND_HALF_ODD);


            $this->load->view('TemplateFEX/header', $data);
            $this->load->view('reporte/exportaOperativoPDF/tabla',$data);
            $this->load->view('TemplateFEX/footer', $data);
        }else{
            /*Terminamos la session*/
            $this->sessionclass->logout();
        }



    }


    function exportaUsuariosPDF(){


        if ( $this->sessionclass->is_logged_in() == 1) {    
            /*Load data*/               
            $menu = $this->sessionclass->generadinamymenu();            
            $data["menu"] = $menu;
            $nombre = $this->sessionclass->getnombre();
            //$data["datosperfil"] = $this->sessionclass->getuserdataperfil();          
            $data["nombre"]= $nombre;
                
            $data["perfilactual"] =  $this->sessionclass->getnameperfilactual();                

            $data['titulo']='PDF de Usuarios';

            $iduser  = $this->sessionclass->getidusuario();
        
            $integrantes  = $this->cuentageneralmodel->getintegrantesinforme($iduser);
        
            $data["listado"] = $integrantes;
 
            $this->load->view('TemplateFEX/header', $data);
            $this->load->view('reporte/exportaUsuariosPDF/documento',$data);
            $this->load->view('TemplateFEX/footer', $data);


        }else{
            /*Terminamos la session*/

            $this->sessionclass->logout();
        }
    }

    function creditosempresa()
    {
        if ( $this->sessionclass->is_logged_in() == 1) {    
            /*Load data*/          

            $menu = $this->sessionclass->generadinamymenu();            
            $data["menu"] = $menu;
            $nombre = $this->sessionclass->getnombre();
            //$data["datosperfil"] = $this->sessionclass->getuserdataperfil();          
            $data["nombre"]= $nombre;
                
            $data["perfilactual"] =  $this->sessionclass->getnameperfilactual(); 
                                        

            $data['titulo']='Creditos de la empresa';
 
            $this->load->view('TemplateFEX/headersesion', $data);   
            $this->load->view('auditoria/creditoEmpresa');
            $this->load->view('TemplateFEX/footersession', $data);  
        }else{
            /*Terminamos la session*/

            $this->sessionclass->logout();
        }  
    }
 

    function exportaEvaluacioncliente()
    {

        if ( $this->sessionclass->is_logged_in() == 1) {    
            /*Load data*/               
            $menu = $this->sessionclass->generadinamymenu();            
            $data["menu"] = $menu;
            $nombre = $this->sessionclass->getnombre();
            //$data["datosperfil"] = $this->sessionclass->getuserdataperfil();          
            $data["nombre"]= $nombre;
                
            $data["perfilactual"] =  $this->sessionclass->getnameperfilactual();                

            $data['titulo']='PDF de Superusuario';

            $iduser  = $this->sessionclass->getidusuario();
            $idempresa = $this->sessionclass->getidempresa();

            $idcustomer = $this->input->get("customer");   
            $idempresa = $this->sessionclass->getidempresa();   
            $data["informe"] = $this->repomodel->getdata($idcustomer, $idempresa);
     
            $this->load->view('reporte/exportaevaluacionfisico/evalua' , $data);
       

        }else{
            /*Terminamos la session*/

            $this->sessionclass->logout();
        }


    }


  function exportaEvaluacionclientemoral(){

           if ( $this->sessionclass->is_logged_in() == 1) {    
            $menu = $this->sessionclass->generadinamymenu();            
            $data["menu"] = $menu;
            $nombre = $this->sessionclass->getnombre();
            //$data["datosperfil"] = $this->sessionclass->getuserdataperfil();          
            $data["nombre"]= $nombre;
                
            $data["perfilactual"] =  $this->sessionclass->getnameperfilactual();                

            $data['titulo']='PDF de Superusuario';

            $iduser  = $this->sessionclass->getidusuario();
            $idempresa = $this->sessionclass->getidempresa();

            $idcustomer = $this->input->get("customermoral");   
            $idempresa = $this->sessionclass->getidempresa();   
            $data["informe"] = $this->repomodel->getdatamoral($idcustomer, $idempresa);
     
            $this->load->view('reporte/exportaevaluacionclientemoral/evalua' , $data);
                                      
        }else{
            /*Terminamos la session*/

            $this->sessionclass->logout();
        }

    }





    function alertas()
    {
        if ( $this->sessionclass->is_logged_in() == 1) {    
            /*Load data*/          

            $menu = $this->sessionclass->generadinamymenu();            
            $data["menu"] = $menu;
            $nombre = $this->sessionclass->getnombre();
            //$data["datosperfil"] = $this->sessionclass->getuserdataperfil();          
            $data["nombre"]= $nombre;
                
            $data["perfilactual"] =  $this->sessionclass->getnameperfilactual(); 
                                        

            $data['titulo']='Alertas';
 
            $this->load->view('TemplateFEX/headersesion', $data);   
            $this->load->view('auditoria/alertas');
            $this->load->view('TemplateFEX/footersession', $data);  
        }else{
            /*Terminamos la session*/

            $this->sessionclass->logout();
        }  
    }
}
