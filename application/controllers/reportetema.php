<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Reportetema extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model("reportetemamodel");
		$this->load->library('sessionclass');  
		
		
	}
	/**/
	function index(){
		
		
		if ( $this->sessionclass->is_logged_in() == 1) {	
				/*Load data*/				
				$menu = $this->sessionclass->generadinamymenu();			
				$data["menu"] = $menu;
				$nombre = $this->sessionclass->getnombre();
				//$data["datosperfil"] = $this->sessionclass->getuserdataperfil();			
				$data["nombre"]= $nombre;
				
				$data["perfilactual"] =  $this->sessionclass->getnameperfilactual(); 							
				$data['titulo']='Reporte por tema';
				$idempresa = $this->sessionclass->getidempresa();  
				
					$totalexpedientessistema  = $this->reportetemamodel->getTotalExpedientesEmpresa($idempresa);
					$expedientesSinomisiones = $this->reportetemamodel->getExpSinOmision($idempresa);



					/*GRAVES */
					

					$actaautorizacion = $this->reportetemamodel->getLen($idempresa , "Acta de autorización de crédito" );
					$Contrato = $this->reportetemamodel->getLen($idempresa , "Contrato de crédito" );
					$pagares = $this->reportetemamodel->getLen($idempresa , "Pagarés" );
					$Poliza = $this->reportetemamodel->getLen($idempresa , "Póliza de seguro" );
					$entregarecursos = $this->reportetemamodel->getLen($idempresa , "Comprobación de la entrega de recursos");
					$comprobanteinversion = $this->reportetemamodel->getLen($idempresa , "Comprobante de inversión");
					$Garantias = $this->reportetemamodel->getLen($idempresa ,"Garantías");
					$Solicitudcredito = $this->reportetemamodel->getLenomisiones($idempresa , "Solicitud de crédito" );

					$sumarotoriaGraves = $actaautorizacion + $Contrato + $pagares + $Poliza 
					+ $entregarecursos + $comprobanteinversion + $Garantias + $Solicitudcredito ;


					/*Solo omisiones */

					$cartaautorizacion =  $this->reportetemamodel->getLenomisiones($idempresa , "Carta autorización de consulta al Buró de Crédito");
					$reporteburo = $this->reportetemamodel->getLenomisiones($idempresa, "Reporte del buró de crédito");
					$Reporteotras =  $this->reportetemamodel->getLenomisiones($idempresa , "Reporte de otras consultas al buró de crédito");
					$estudiomercado = $this->reportetemamodel->getLenomisiones($idempresa , "Estudio de crédito y/o Proyecto de inversión y/o Evaluación técnica");
					$flujoEfectivo = $this->reportetemamodel->getLenomisiones($idempresa , "Flujo de Efectivo");
					$reportevisita =  $this->reportetemamodel->getLenomisiones($idempresa, "Reporte de Visita");
					$hojaterminos = $this->reportetemamodel->getLenomisiones($idempresa , "Hoja de Términos y Condiciones");

					$sumarotoriaNoGraves = $cartaautorizacion + $reporteburo + $Reporteotras + $estudiomercado 
					+ $flujoEfectivo + $reportevisita + $hojaterminos;


				$data["totalexpedientessistema"] = 	$totalexpedientessistema;
				$data["expsinomisiones"] = 	$expedientesSinomisiones;
				$data["Contrato"] = $Contrato;
				$data["Poliza"] = $Poliza;
				$data["entregarecursos"] =$entregarecursos;
				$data["comprobanteinversion"] = $comprobanteinversion;
				$data["Garantias"] =  $Garantias;
				$data["actaautorizacion"] = $actaautorizacion;
				$data["pagares"] = $pagares;



				/*No Graves */
				$data["Solicitudcredito"] = $Solicitudcredito;
				$data["cartaautorizacion"] = $cartaautorizacion ;
				$data["reporteburo"] =  $reporteburo;
				$data["Reporteotras"] = $Reporteotras;
				$data["estudiomercado"] = $estudiomercado;
				$data["flujoEfectivo"] =  $flujoEfectivo;
				$data["reportevisita"] = $reportevisita;
				$data["hojaterminos"] = $hojaterminos;

				$data["sumatoriaGraves"] = $sumarotoriaGraves;
				$data["sumatoriaNoGraves"] = $sumarotoriaNoGraves;

				$this->load->view('TemplateFEX/headersesion', $data);		
				$this->load->view('reportetema/temas', $data);
				$this->load->view('TemplateFEX/footersession', $data);	
				

			}else{
			/*Terminamos la session*/
			$this->sessionclass->logout();
		}		
		
	}	
	



	function verPDF(){

		if ( $this->sessionclass->is_logged_in() == 1) {	
				/*Load data*/				
				$menu = $this->sessionclass->generadinamymenu();			
				$data["menu"] = $menu;
				$nombre = $this->sessionclass->getnombre();
				//$data["datosperfil"] = $this->sessionclass->getuserdataperfil();			
				$data["nombre"]= $nombre;
				
				$data["perfilactual"] =  $this->sessionclass->getnameperfilactual(); 							
				$data['titulo']='Reporte por tema';
				$idempresa = $this->sessionclass->getidempresa();  

				

				$gravedad = $this->input->get("grave");
				$documentg = $this->input->get("doc");
				

				if ($gravedad == 1 ){
						
					
					$data["datatablegeneric"]= $this->reportetemamodel->getdatagrave($idempresa , $documentg);
					
					
				}else{
				
					$data["datatablegeneric"]= $this->reportetemamodel->getdatanograve($idempresa , $documentg);	
					
				}
					
					$this->load->view('reporte/reporteportema/repotema', $data);			
						

				

		
			}else{
			/*Terminamos la session*/
			$this->sessionclass->logout();
		}	



	}




	function ver(){



		if ( $this->sessionclass->is_logged_in() == 1) {	
				/*Load data*/				
				$menu = $this->sessionclass->generadinamymenu();			
				$data["menu"] = $menu;
				$nombre = $this->sessionclass->getnombre();
				//$data["datosperfil"] = $this->sessionclass->getuserdataperfil();			
				$data["nombre"]= $nombre;
				
				$data["perfilactual"] =  $this->sessionclass->getnameperfilactual(); 							
				$data['titulo']='Reporte por tema';
				$idempresa = $this->sessionclass->getidempresa();  

				

				$gravedad = $this->input->get("grave");
				$documentg = $this->input->get("doc");
				

				if ($gravedad == 1 ){
						
					
					$data["datatablegeneric"]= $this->reportetemamodel->getdatagrave($idempresa , $documentg);
					
					
				}else{
				
					$data["datatablegeneric"]= $this->reportetemamodel->getdatanograve($idempresa , $documentg);	
					
				}
					$this->load->view('TemplateFEX/headersesion', $data);		
					$this->load->view('reportetema/list', $data);			
					$this->load->view('TemplateFEX/footersession', $data);	
				
				

		
			}else{
			/*Terminamos la session*/
			$this->sessionclass->logout();
		}	



	}




		
}



/******************************************************/

/******************************************************/

/******************************************************/