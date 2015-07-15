<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class updatafilerestcontroller extends REST_Controller{
      
    function __construct(){
            parent::__construct();

            $this->load->helper(array('download', 'file', 'url', 'html', 'form'));
            $this->folder = 'uploads/';

            
            
        }     




     function updocumentfisico_POST(){



            $config['upload_path'] = $this->folder;
            $config['allowed_types'] = 'gif|jpg|png|txt|pdf|docx';
            $config['max_size'] = '9000';
            $config['max_width'] = '10024';
            $config['max_height'] = '7068';

            $this->load->library('upload', $config);

            // Alternately you can set preferences by calling the initialize function. Useful if you auto-load the class:
            $this->upload->initialize($config);

            $this->load->library('upload', $config);
            $this->load->library('sessionclass');   

            if ( $this->sessionclass->is_logged_in() == 1) {            
    
                    $menu = $this->sessionclass->generadinamymenu();            
                    $data["menu"] = $menu;
                    $nombre = $this->sessionclass->getnombre();        
                    $data["nombre"]= $nombre;
                    $data["perfilactual"] =  $this->sessionclass->getnameperfilactual(); 
                                            

                    $data['titulo']='Cuestionario'; 

                    

                    if ( ! $this->upload->do_upload())
                        {
                            $error = array('error' => $this->upload->display_errors());
                            $data["error"] = $error;
                            $this->load->view('TemplateFEX/headersesion', $data);   
                            $this->load->view('upload_form',$data);
                            $this->load->view("TemplateFEX/footer" , $data);
                            


                        }
                        else
                        {
                           
                            $this->load->view('TemplateFEX/headersesion', $data);
                            $this->load->view('upload_success', $data);
                            $this->load->view("TemplateFEX/footer" , $data);
                         
                        }

                }else{
                /*Terminamos la session*/
                $this->sessionclass->logout();
            }       





  
       
        }/*Termina función */

	
}/*Termina rest*/

