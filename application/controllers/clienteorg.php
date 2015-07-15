<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Clienteorg extends CI_Controller {

	function __construct(){
		parent::__construct();
		
		$this->load->model("empresamodel");
		$this->load->model("clientesmodel");
		$this->load->library('sessionclass');    
	}
	

	function principal(){
		if ( $this->sessionclass->is_logged_in() == 1) {			

			
			$data['titulo']='Clientes de la empresa';
			$data['titulo_sistema']='';
			$data['nombreadministrador'] = $this->sessionclass->getnombre();
			

			$menu = $this->sessionclass->generadinamymenu();			
			$data["menu"] = $menu;
			$nombre = $this->sessionclass->getnombre();
			$data["nombre"]= $nombre;







			$idempresa =  $this->sessionclass->getidempresa();
	        $datalistuserempresa = $this->clientesmodel->clientesbyempresa($idempresa);  


	        $data["datalistuserempresa"] = $datalistuserempresa;
			
				$this->load->view('TemplateFEX/headersesion', $data);		
				$this->load->view('cliente/principal', $data);
				$this->load->view('TemplateFEX/footersession', $data);

				

    	}else{
			/*Terminamos la session*/
			$this->sessionclass->logout();
		}			



	}/*Termina la función*/





	function registropersonamoral(){
		if ( $this->sessionclass->is_logged_in() == 1) {			
	
			$data['titulo']='Alta persona moral';
			$data['titulo_sistema']='';
			$data['nombreadministrador'] = $this->sessionclass->getnombre();
			
			$menu = $this->sessionclass->generadinamymenu();			
			$data["menu"] = $menu;
			$nombre = $this->sessionclass->getnombre();
			$data["nombre"]= $nombre;
		
				$this->load->view('TemplateFEX/headersesion', $data);		
				$this->load->view('expedientes/registrosMorales' , $data);
				$this->load->view('TemplateFEX/footersession', $data);
    	}else{
			/*Terminamos la session*/
			$this->sessionclass->logout();
		}			
	}
	/*Termina la  función*/



	function registropersonafisica(){
		if ( $this->sessionclass->is_logged_in() == 1) {			
	
			$data['titulo']='Alta persona física';
			$data['titulo_sistema']='';
			$data['nombreadministrador'] = $this->sessionclass->getnombre();
			

			$menu = $this->sessionclass->generadinamymenu();			
			$data["menu"] = $menu;
			$nombre = $this->sessionclass->getnombre();
			$data["nombre"]= $nombre;

			/*Captamos el recurso que estamo solicitando*/
           $idempresa =  $this->sessionclass->getidempresa();
           $tipoCredito = $this->getcreditosbyempresa($idempresa);
           
           $data['tipoCredito'] = $tipoCredito;

				$this->load->view('TemplateFEX/headersesion', $data);		
				$this->load->view('expedientes/registros' , $data);
				//$this->load->view('expedientes/formRegFisico' , $data);
				$this->load->view('TemplateFEX/footersession', $data);

    	}else{
			/*Terminamos la session*/
			$this->sessionclass->logout();
		}			



	}/*Termina la  función*/

	function getcreditosbyempresa($idempresa){

    	return $this->empresamodel->getcreditosdisponiblesbyidempresa($idempresa);
	
	}/*Termina la función*/





		
}/*Termina el controlador */
