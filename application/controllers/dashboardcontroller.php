<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboardcontroller  extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('sessionclass');    
	}
	

	function index(){
		if ( $this->sessionclass->is_logged_in() == 1) {			


			$data['titulo']='Dashboards';
			$data['titulo_sistema']='Dashboards';
			$data['nombreadministrador'] = $this->sessionclass->getnombre();
			

			$menu = $this->sessionclass->generadinamymenu();			
			$data["menu"] = $menu;
			$nombre = $this->sessionclass->getnombre();
			$data["nombre"]= $nombre;



				$this->load->view('TemplateFEX/headersesion', $data);		
			
				$this->load->view('TemplateFEX/footersession', $data);


    	}else{
			/*Terminamos la session*/
			$this->sessionclass->logout();
		}			



	}/*Termina la función*/



		
}/*Termina el controlador */
