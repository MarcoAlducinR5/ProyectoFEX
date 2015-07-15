<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once('generalcontroller.php');
class Sessioncontroller extends CI_Controller {

	function __construct(){        
        parent::__construct();            

        $this->load->library('sessionclass');        
    }         

    function iniciosessionuser(){

    	if ( $this->sessionclass->is_logged_in() == 1) {			

    		redirect(base_url('index.php/sessioncontroller/presentacion/'));

    	}else{

    		$data['titulo']='Sign In';
    		$this->load->view('TemplateFEX/header', $data);								
			$this->load->view('user/signin', $data);
			$this->load->view('TemplateFEX/footer', $data);	
					

    		/*
			$this->load->view('Template/header_white', $data);
			$this->load->view('user/signin', $data);
			$this->load->view('Template/footer', $data);	
			*/
			
    	}

    }


	function presentacion(){		
						
		
		/*Validamo session*/
		if( $this->sessionclass->is_logged_in() == 1){				
			
			
			$first =$this->input->get("first");

				if ($first == 1) {
						
					/*Redirect plan */		
					$next =  site_url("plan");
					redirect($next , $method = 'location', 302);


				}else{
					$this->usuarioregistrado();	
				}	
			


		}else{
			/*Terminamos la session*/
			$this->sessionclass->logout();
		}	
	}


	function usuarioregistrado(){

			if ( $this->sessionclass->is_logged_in() == 1) {			

				$data['titulo']='Reporte general';
				$data['nombre']= $this->sessionclass->getnombre();
				$perfil = $this->sessionclass->getperfiles();
			

				$menu = $this->sessionclass->generadinamymenu();			
				$data["menu"] = $menu;
				$nombre = $this->sessionclass->getnombre();			
				$data["nombre"]= $nombre;
				

				/*
				$data['titulo']='Bienvenido a Dawning Dual';
				$this->load->view('Template/header_template', $data);		
				$this->load->view('principal/bienvenidauser', $data);
				$this->load->view('Template/footer_template', $data);	
				*/

				$perfil = $this->sessionclass->getperfiles();
				



				$this->load->view('TemplateFEX/headersesion', $data);		
				$this->load->view(displayviewpresentacion( $perfil ) , $data);
					
				$this->load->view('TemplateFEX/footersession', $data);	
				


			}else{
			/*Terminamos la session*/
			$this->sessionclass->logout();
		}	

	}/*Termina la función */









	function logout(){
			
				
		$this->sessionclass->logout();
		
	}	

}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */