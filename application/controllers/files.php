<?php

class Files extends CI_Controller {

        public function __construct() {
                parent::__construct();
                $this->load->helper(array('download', 'file', 'url', 'html', 'form'));
                $this->folder = 'application/uploads';

               

        }
  
        public function index()
        {
            $this->load->view('upload_form', array('error' => ' ' ));
        }

//************ CARGA DE ARCHIVOS  ****************  
    public function do_upload(){    


        $tipeclient = "";
            if ($this->input->post("f") ==  1) {  
                 $this->folder = "application/uploads/F";
                 $tipeclient = "F";
            }else if($this->input->post("M") ==  1){
                 $this->folder = "application/uploads/M";   
                 $tipeclient = "M";
            }else{}


            $historia_doc =  $this->input->post("historia_doc");
            $createfolder = mkdir($this->folder."/".$historia_doc , 0777, true);
            

            $config['upload_path'] = $this->folder."/".$historia_doc;
            $config['allowed_types'] = 'gif|jpg|png|txt|pdf|docx|odt';
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
                                $this->load->view('TemplateFEX/footersession', $data);


                        }
                        else
                        {
                           
                            header("location:" . base_url("index.php/files/info?h=". $historia_doc."&t=" .$tipeclient ));
                         
                        }

                }else{
                /*Terminamos la session*/
                $this->sessionclass->logout();
            }       

       }













    public function info(){
      

         $this->load->library('sessionclass');   
           $menu = $this->sessionclass->generadinamymenu();            
                    $data["menu"] = $menu;
                    $nombre = $this->sessionclass->getnombre();        
                    $data["nombre"]= $nombre;
                    $data["perfilactual"] =  $this->sessionclass->getnameperfilactual(); 
                                            

                    $data['titulo']='Cuestionario'; 
                    $h = $this->input->get("h");

                    $typeclient = $this->input->get("t");
                    $data["h"]=  $h;



                    $basef = "";

                    if ($typeclient == "F") {
                        
                        $this->folder = "application/uploads/F";
                        $basef = "application/uploads/F";
                    }else{
                        $this->folder = "application/uploads/M";
                        $basef = "application/uploads/M";
                    }

                    $data["basef"] =  $basef;


         if ( $this->sessionclass->is_logged_in() == 1) {            
    

                    $files = get_filenames($this->folder ."/". $h  , FALSE);
                  
                    if($files){
                        $data['files']=$files;
                           
                        }else{
                            $data['files']=NULL;
                        }



                        $this->load->view('TemplateFEX/headersesion', $data);       
                        $this->load->view('filenames',$data);  
                        $this->load->view('TemplateFEX/footersession', $data);


                       

                }else{
                /*Terminamos la session*/
                $this->sessionclass->logout();
            }          

    }






//************ DESCARGA DE ARCHIVOS ***********************

    public function downloads($name){
            
           $data = file_get_contents($this->folder.$name);
           force_download($name,$data);
        
    }
}