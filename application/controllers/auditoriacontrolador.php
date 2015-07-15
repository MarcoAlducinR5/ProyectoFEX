<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auditoriacontrolador extends CI_Controller {
     
    function __construct(){
        parent::__construct();
        
        $this->load->library('tcpdf');
        
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

    function auditarCreditoEmpresa()
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
 
    function auditarAlertas()
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

    function porUsuario(){

        if ( $this->sessionclass->is_logged_in() == 1) {    
            /*Load data*/          

            $menu = $this->sessionclass->generadinamymenu();            
            $data["menu"] = $menu;
            $nombre = $this->sessionclass->getnombre();
            //$data["datosperfil"] = $this->sessionclass->getuserdataperfil();          
            $data["nombre"]= $nombre;
                
            $data["perfilactual"] =  $this->sessionclass->getnameperfilactual(); 
                                        
            /*$valor = $this->input->get('miembro');
            $nombre = $this->input->get('campo');
            $email = $this->input->get('correo');
            $dato = $this->input->get('fecha');
            $perfil = $this->input->get('perfil');*/
            //echo $valor."<br>".$nombre."<br>".$email."<br>".$dato."<br>".$perfil;

            $data['titulo']='Informacion del Usuario';

            $data['valor'] = $this->input->get('miembro');
            $data['nombre'] = $this->input->get('campo');
            $data['email'] = $this->input->get('correo');
            $data['dato'] = $this->input->get('fecha');
            $data['perfil'] = $this->input->get('perfil');
 
            $this->load->view('TemplateFEX/headersesion', $data);   
            $this->load->view('auditoria/usuario', $data);
            $this->load->view('TemplateFEX/footersession', $data);  
        }else{
            /*Terminamos la session*/

            $this->sessionclass->logout();
        } 

    }
}