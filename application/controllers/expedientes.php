<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Expedientes extends CI_Controller {

	function __construct(){
		parent::__construct();
		
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



				$this->load->view('TemplateFEX/headersesion', $data);		
				$this->load->view('expedientes/principal' , $data);
				$this->load->view('TemplateFEX/footersession', $data);


    	}else{
			/*Terminamos la session*/
			$this->sessionclass->logout();
		}			



	}/*Termina la función*/



/*****************************************************************************************/

	function surveyanddocument(){

		if ( $this->sessionclass->is_logged_in() == 1) {			

			  $this->load->helper(array('download', 'file', 'url', 'html', 'form'));
                $this->folder = 'uploads/';


			 $files = get_filenames($this->folder, FALSE);
                  
                    if($files){
                        $data['files']=$files;
                           
                        }else{
                            $data['files']=NULL;
                        }
			
			$data['titulo']='Cuestionario';
			$data['titulo_sistema']='';
			$data['nombreadministrador'] = $this->sessionclass->getnombre();
			
			$menu = $this->sessionclass->generadinamymenu();			
			$data["menu"] = $menu;
			$nombre = $this->sessionclass->getnombre();
			$data["nombre"]= $nombre;
			


			$documentacion = $this->input->get("documentacion");
			$org =  $this->input->get("org");


			$data["documentacion"] = $documentacion;
			$data["org"] =  $org;
			$this->load->view('TemplateFEX/headersesion', $data);	
			$this->load->view('expedientes/surveyanddocumentview', $data);	
			$this->load->view('TemplateFEX/footersession', $data);


    	}else{
			/*Terminamos la session*/
			$this->sessionclass->logout();
		}			





	}




/*****************************************************************************************/

	function registro(){
		if ( $this->sessionclass->is_logged_in() == 1) {			
	
			$data['titulo']='Expedientes/cliente información';
			$data['titulo_sistema']='';
			$data['nombreadministrador'] = $this->sessionclass->getnombre();
			

			$menu = $this->sessionclass->generadinamymenu();			
			$data["menu"] = $menu;
			$nombre = $this->sessionclass->getnombre();
			$data["nombre"]= $nombre;
		
				$this->load->view('TemplateFEX/headersesion', $data);		
				$this->load->view('expedientes/registros' , $data);
				$this->load->view('TemplateFEX/footersession', $data);

    	}else{
			/*Terminamos la session*/
			$this->sessionclass->logout();
		}			



	}/*Termina la  función*/



/*****************************************************************************************/


	function lista(){


		if ( $this->sessionclass->is_logged_in() == 1) {			
	
			$data['titulo']='';
			$data['titulo_sistema']='';
			$data['nombreadministrador'] = $this->sessionclass->getnombre();
			

			$menu = $this->sessionclass->generadinamymenu();			
			$data["menu"] = $menu;
			$nombre = $this->sessionclass->getnombre();
			$data["nombre"]= $nombre;
		
				$this->load->view('TemplateFEX/headersesion', $data);		
				$this->load->view('cliente/listgeneral', $data);
				$this->load->view('TemplateFEX/footersession', $data);

    	}else{
			/*Terminamos la session*/
			$this->sessionclass->logout();
		}		

	}

	/*Inicia la función */
	function metricas(){
		if ( $this->sessionclass->is_logged_in() == 1) {			

			
			$data['titulo']='Evaluación';
			$data['titulo_sistema']='';
			$data['nombreadministrador'] = $this->sessionclass->getnombre();

			$menu = $this->sessionclass->generadinamymenu();			
			$data["menu"] = $menu;
			$nombre = $this->sessionclass->getnombre();
			$data["nombre"]= $nombre;
			$clienteorg =  $this->input->get("oxjexyet");
			$historialcrediticio =  $this->input->get("historialcrediticio");



			$data["idpersonafisica"]= $this->input->get("idpersonafisica");
			$data["calificacion"]= $this->input->get("calificacion");
			$data["numerocredito"] = $this->input->get("numerocredito");
			$data["nombrecompleto"] = $this->input->get("nombrecompleto");
			$data["Ejecutivo"] = $this->input->get("Ejecutivo");
			$data["monto"] = $this->input->get("monto");
			$data["Tipo"] = $this->input->get("Tipo");
			$data["fecha_registro"]= $this->input->get("fecha_registro");
			$data["fecha"] = $this->input->get("fecha");
			$data["Completoporcentaje"]= $this->input->get("Completoporcentaje");
			$data["RFC"] = $this->input->get("RFC");
			$data["idarchivo"] =$this->input->get("idarchivo");
			$data["nota"] =  $this->input->get("nota");

			$data["clienteorg"] =  $clienteorg;
			$data["historialcrediticio"] =  $historialcrediticio;
			$this->load->view('TemplateFEX/headersesion', $data);		
			$this->load->view('expedientes/metricas2' , $data);
			$this->load->view('TemplateFEX/footersession', $data);

    	}else{
			/*Terminamos la session*/
			$this->sessionclass->logout();
		}			
	}/*Termina la  función*/


function metricasmoral(){

	if ( $this->sessionclass->is_logged_in() == 1) {			

			
			$data['titulo']='Evaluación';
			$data['titulo_sistema']='';
			$data['nombreadministrador'] = $this->sessionclass->getnombre();

			$menu = $this->sessionclass->generadinamymenu();			
			$data["menu"] = $menu;
			$nombre = $this->sessionclass->getnombre();
			$data["nombre"]= $nombre;
			$clienteorg =  $this->input->get("oxjexyet");
			$historialcrediticio =  $this->input->get("idhistorial_crediticio_moral");
		

			$data["idarchivo"]= $this->input->get("idarchivo");
			$data["personamoral"]= $this->input->get("oxjexyet");
			$data["calificacion"]= $this->input->get("calificacion");
			$data["numerocredito"] = $this->input->get("numerocredito");
			$data["nombreempresa"] =  $this->input->get("nombreempresa");
			$data["nombrecompleto"] = $this->input->get("nombrecompleto");
			$data["Ejecutivo"] = $this->input->get("Ejecutivo");
			$data["monto"] = $this->input->get("monto");
			$data["Tipo"] = $this->input->get("Tipo");
			$data["fecha_registro"]= $this->input->get("fecha_registro");
			$data["fecha"] = $this->input->get("fecha");
			$data["Completoporcentaje"]= $this->input->get("Completoporcentaje");
			$data["RFC"] = $this->input->get("RFC");
			$data["idarchivo"] =$this->input->get("idarchivo");
			$data["nota"] =  $this->input->get("nota");

			$data["clienteorg"] =  $clienteorg;
			$data["historialcrediticio"] =  $historialcrediticio;
			$this->load->view('TemplateFEX/headersesion', $data);		
			$this->load->view('expedientes/metricas2Moral' , $data);
			$this->load->view('TemplateFEX/footersession', $data);


    	}else{
			/*Terminamos la session*/
			$this->sessionclass->logout();
		}			
}
		
}/*Termina el controlador */
