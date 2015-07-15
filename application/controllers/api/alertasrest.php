<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class Alertasrest extends REST_Controller{

function __construct(){
        parent::__construct();
        $this->load->library("email");
        $this->load->model("recuperapasswordmodel");
        $this->load->model("usuariogeneralmodel");  
        $this->load->model("repomodel");  
         
        $this->load->library('sessionclass');  

}   

function sendalerttomember_get(){


	 if ( $this->sessionclass->is_logged_in() == 1) {  

                $idempresa = $this->sessionclass->getidempresa();    
                

                $numeropersonasfisicas = $this->repomodel->getNumeroPersonasFisicasByIdEmpresa($idempresa);
                $numeropersonamoral = $this->repomodel->getNumeroPersonamoralByIdEmpresa($idempresa);
                $totalclientes = $this->repomodel->getNumeroPersonasFisicasByIdEmpresa($idempresa) + 
                $this->repomodel->getNumeroPersonamoralByIdEmpresa($idempresa); 

                $ExpedientesPersonasMorales =  $this->repomodel->getNumExpedientesMorales($idempresa);
                $ExpedientesPersonasFisicas =   $this->repomodel->getNumExpedientesFisicas($idempresa);
                $TotalExpedientes=   $this->repomodel->getNumExpedientesFisicas($idempresa) + 
                $this->repomodel->getNumExpedientesMorales($idempresa);
                
                $numeroOGRAVESmorales=$this->repomodel->getomisionesMUYgravesmorales($idempresa);
                $numeroOGRAVESfisicas=$this->repomodel->getomisionesMUYgravesfi($idempresa);
                $TotalOGRAVES = $this->repomodel->getomisionesMUYgravesmorales($idempresa) + 
                $this->repomodel->getomisionesMUYgravesfi($idempresa);
                
                $omisionesmorales = $this->repomodel->getomisionesnogravesmorales($idempresa); 
                $omisionesfi = $this->repomodel->getomisionesnogravesfi($idempresa); 
                $TotalSinOmisiones = $this->repomodel->getomisionesnogravesmorales($idempresa) + 
                $this->repomodel->getomisionesnogravesfi($idempresa);
                
                $Otro_omisionesmorales = $this->repomodel->getSINomisionesmorales($idempresa); 
                $Otro_omisionesfi = $this->repomodel->getSINomisionesfi($idempresa); 
                $Otro_TotalSinOmisiones = $this->repomodel->getSINomisionesmorales($idempresa) + 
                $this->repomodel->getSINomisionesfi($idempresa);


                $mensajenuevo ="Este es un Reporte General respecto a la cuenta FEX<br><br>
                <table>
                <tr><td>Total de Clientes de la cuenta: </td><td>". $totalclientes ."</td></tr>
                <tr><td>Personas Físicas de la cuenta: </td><td>". $numeropersonasfisicas."</td></tr>
                <tr><td>Personas morales de la cuenta: </td><td>".$numeropersonamoral."</td></tr></table><br>
                <table>
                <tr><td>Total de Expedientes de la cuenta:</td><td>". $TotalExpedientes ."</td></tr>
                <tr><td>Expedientes personas morales de la cuenta:</td><td>".  $ExpedientesPersonasMorales  ."</td></tr>
                <tr><td>Expedientes personas Fisicas de la cuenta:</td><td>".  $ExpedientesPersonasFisicas  ."</td></tr></table><br>
                <table>
                <tr><td>Total de Sin Omisiones en la cuenta: </td><td>".$Otro_TotalSinOmisiones ."</td></tr>
                <tr><td>Sin Omisiones por personas morales: </td><td>". $Otro_omisionesmorales."</td></tr>
                <tr><td>Sin Omisiones por personas Físicas: </td><td>". $Otro_omisionesfi."</td></tr></table><br>
                <table>
                <tr><td>Total de Omisiones en la cuenta: </td><td>".   $TotalSinOmisiones  ."</td></tr>
                <tr><td>Omisiones por personas morales: </td><td>". $omisionesmorales."</td></tr>
                <tr><td>Omisiones por personas Físicas: </td><td>".   $omisionesfi."</td></tr></table><br>
                <table>
                <tr><td>Total de Omisiones Graves en la cuenta:</td><td>".   $TotalOGRAVES  ."</td></tr>
                <tr><td>Omisiones Graves por personas morales:  </td><td>". $numeroOGRAVESmorales."</td></tr>
                <tr><td>Omisiones Graves por personas Físicas:  </td><td>".   $numeroOGRAVESfisicas."</td></tr></table><br>";
              		
              	//$this->response( $this->sendMailGmail($mensajenuevo ) );

                $mensajenuevo1 ="base_url('index.php/auditoria/exportaTablaPDF/')";

                $lista = $this->usuariogeneralmodel->envioAdministrador($idempresa);

                $respuesta = '';

                foreach ($lista as $correo) {

                    $uno = $correo['email'];

                    $respuesta .=  $this->sendMailGmailAdjuntoPdf($mensajenuevo1, $uno);
                    //$respuesta .=  $this->sendMailGmail($mensajenuevo, $uno);

                }





                /*Aqui lakisjfdjksand*/

                //$this->sendMailGmailAdjuntoPdf();
                $this->response($respuesta);
             

                
             }else{
            $this->sessionclass->logout();
        
        }



}      

function sendMailGmail($mensajenuevo, $uno)
{
		$configGmail = array(
		'protocol' => 'smtp',
		'smtp_host' => 'ssl://smtp.gmail.com',
		'smtp_port' => 465,
		'smtp_user' => 'jmedrano@ubcubo.com',
		'smtp_pass' => 'puntoExeJar.1',
		'mailtype' => 'html',
		'charset' => 'utf-8', 
		'newline' => "\r\n"
	);    
			 

		//cargamos la configuración para enviar con gmail
		$this->email->initialize($configGmail);
		 
		$this->email->from('jmedrano@ubcubo.com');
		//$this->email->to("arithgrey@gmail.com");
        $this->email->to($uno);
		$this->email->subject('informe general de su cuenta FEX');
		$this->email->message($mensajenuevo);
		$this->email->send();
		//con esto podemos ver el resultado
		//$this->response($this->email->print_debugger());
}
 
 
/*


function sendMailGmailAdjuntoPdf()
{
        $configGmail = array(
        'protocol' => 'smtp',
        'smtp_host' => 'ssl://smtp.gmail.com',
        'smtp_port' => 465,
        'smtp_user' => 'jmedrano@ubcubo.com',
        'smtp_pass' => 'puntoExeJar.1',
        'mailtype' => 'html',
        'upload_path' => 'base_url()',
        'charset' => 'utf-8', 
        'newline' => "\r\n"
    );    
        
        
        
        $this->email->initialize($configGmail);
        $this->email->from('jmedrano@ubcubo.com');
        $this->email->to("marco_alducin@ubcubo.com");
        $this->email->subject("Informe general de su cuenta FEX");
        
        $this->email->message("Informe FEX Formato PDF");
        $this->email->attach('/var/www/html/ikarus25j/xxxxx/application/n/Reporte.pdf');
        $this->email->send();
        

        return $this->email->print_debugger();
}

*/

function sendMailGmailAdjuntoPdf($mensajenuevo1, $uno)
{
        $configGmail = array(
        'protocol' => 'smtp',
        'smtp_host' => 'ssl://smtp.gmail.com',
        'smtp_port' => 465,
        'smtp_user' => 'jmedrano@ubcubo.com',
        'smtp_pass' => 'puntoExeJar.1',
        'mailtype' => 'html',
        'upload_path' => 'base_url()',
        'charset' => 'utf-8', 
        'newline' => "\r\n"
    );    
        
        
        
        $this->email->initialize($configGmail);
        $this->email->from('jmedrano@ubcubo.com');
        $this->email->to($uno);
        $this->email->subject("Informe general de su cuenta FEX");
        
        $this->email->message($mensajenuevo1);
        //$this->email->attach();
        //$this->email->attach('/var/www/html/ikarus25j/xxxxx/application/n/Reporte.pdf');
        $this->email->send();
        

        return $this->email->print_debugger();
}/*Termina la función*/


	
}/*Termina rest*/
