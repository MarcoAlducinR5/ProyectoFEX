<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class reportetemamodel extends CI_Model {

    function __construct()
    {
        parent::__construct();        
        $this->load->database();
    }



    function getTotalExpedientesEmpresa($idempresa){


        $getTotal = "SELECT * FROM historial_crediticio where idempresa='".$idempresa."' "; 
        $rhc = $this->db->query($getTotal);

        $getTotalc = "SELECT * FROM historial_crediticio_moral where idempresa='".$idempresa."' ";
        $rhcm = $this->db->query($getTotalc);


        $c = $rhc->num_rows();
        $hc = $rhcm ->num_rows();
        return $c + $hc;
    }



    function getExpSinOmision($idempresa){

        $getSinOmision="SELECT * FROM historial_crediticio where omisionesgraves=0 and idempresa ='".$idempresa."'";
        $rhc = $this->db->query($getSinOmision);

        $getSinOmisionmoral ="SELECT * FROM historial_crediticio_moral where omisionesgraves=0 and idempresa ='".$idempresa."'";
        $rhcm = $this->db->query( $getSinOmisionmoral );

        $c = $rhc->num_rows();
        $hc = $rhcm ->num_rows();
        return $c + $hc;
    }




    function getLen($idempresa , $nombredocumento ){


        

        $getActas ="select * from documentosolicitado where nombredocumento='".$nombredocumento."'";
        $r = $this->db->query($getActas);
        $iddocumentosolicitado =0;
        $docindb = 0;
        $flag =0;
        foreach ($r->result_array() as $row) {
              
              

              if ($flag == 0 ) {
                 $iddocumentosolicitado  = $row["iddocumentosolicitado"];
                  
                  $dy = "select p.idpregunta as numerop , p.pregunta , p.statuspregunta from
                  pregunta as p, documentosolicitado_pregunta where 
                  documentosolicitado_pregunta.iddocumentosolicitado='". $iddocumentosolicitado."' 
                  and documentosolicitado_pregunta.idpregunta = p.idpregunta and p.statuspregunta=1";
                  $dinamiclen  = $this->db->query($dy);
                  $l = $dinamiclen->num_rows();
                  if ($l>0 ) {

                     $docindb =  $iddocumentosolicitado;
                      $flag ++; 
                  }
              }
             
        }

   
     
        $dynamicquery = "select p.idpregunta as numerop , p.pregunta , p.statuspregunta from
        pregunta as p, documentosolicitado_pregunta where 
        documentosolicitado_pregunta.iddocumentosolicitado='".$docindb."' 
        and documentosolicitado_pregunta.idpregunta = p.idpregunta and p.statuspregunta=1";


        $clientesr = "select * from clienteorg_respuesta  as cr , personafisica 
        as pf where   pf.idpersonafisica =cr.idpersonafisica 
        and pf.idempresa='".$idempresa."'";


        $actasf = $this->db->query($dynamicquery);
        $preguntassinomisionesdef  = $actasf->result_array();
        
        $clientesresult  = $this->db->query($clientesr);
        $contestadas = $clientesresult->result_array();

       
        $b = 0;
        $idpreguntadefault = 0;
        $idcontestadap =0;

        foreach ( $contestadas as $row) {
              
               $idcontestadap = $row["idpregunta"];
                 
                   foreach($preguntassinomisionesdef  as $row ) {
          
                              $idpreguntadefault  = $row["numerop"];
                         
                                  if ($idpreguntadefault == $idcontestadap) {
                                      $b++;
                                  }
                        }

                            
            }

        return $b;

    }


      function getLenomisiones($idempresa , $nombredocumento ){


        $getActas ="select * from documentosolicitado where nombredocumento='".$nombredocumento."'";
        $r = $this->db->query($getActas);
        $iddocumentosolicitado =0;
        $docindb = 0;
        $flag =0;
        foreach ($r->result_array() as $row) {
              
              

              if ($flag == 0 ) {
                 $iddocumentosolicitado  = $row["iddocumentosolicitado"];
                  
                  $dy = "select p.idpregunta as numerop , p.pregunta , p.statuspregunta from
                  pregunta as p, documentosolicitado_pregunta where 
                  documentosolicitado_pregunta.iddocumentosolicitado='". $iddocumentosolicitado."' 
                  and documentosolicitado_pregunta.idpregunta = p.idpregunta and p.statuspregunta=0";
                  $dinamiclen  = $this->db->query($dy);
                  $l = $dinamiclen->num_rows();
                  if ($l>0 ) {

                     $docindb =  $iddocumentosolicitado;
                      $flag ++; 
                  }
              }
             
        }

   
     
        $dynamicquery = "select p.idpregunta as numerop , p.pregunta , p.statuspregunta from
        pregunta as p, documentosolicitado_pregunta where 
        documentosolicitado_pregunta.iddocumentosolicitado='".$docindb."' 
        and documentosolicitado_pregunta.idpregunta = p.idpregunta and p.statuspregunta=0";


        $clientesr = "select * from clienteorg_respuesta  as cr , personafisica 
        as pf where   pf.idpersonafisica =cr.idpersonafisica 
        and pf.idempresa='".$idempresa."'";


        $actasf = $this->db->query($dynamicquery);
        $preguntassinomisionesdef  = $actasf->result_array();
        
        $clientesresult  = $this->db->query($clientesr);
        $contestadas = $clientesresult->result_array();

       
        $b = 0;
        $idpreguntadefault = 0;
        $idcontestadap =0;

        foreach ( $contestadas as $row) {
              
               $idcontestadap = $row["idpregunta"];
                 
                   foreach($preguntassinomisionesdef  as $row ) {
          
                              $idpreguntadefault  = $row["numerop"];
                         
                                  if ($idpreguntadefault == $idcontestadap) {
                                      $b++;
                                  }
                        }

                            
            }

        return $b;

    }

























/****************************************************************/
function getdatagrave($idempresa , $nombredocumento){

        $clientesarreglo = array();

        $t =0;

        $getActas ="select * from documentosolicitado where nombredocumento='".$nombredocumento."'";
        $r = $this->db->query($getActas);
        $iddocumentosolicitado =0;
        $docindb = 0;
        $flag =0;
        foreach ($r->result_array() as $row) {
              
              

              if ($flag == 0 ) {
                 $iddocumentosolicitado  = $row["iddocumentosolicitado"];
                  
                  $dy = "select p.idpregunta as numerop , p.pregunta , p.statuspregunta from
                  pregunta as p, documentosolicitado_pregunta where 
                  documentosolicitado_pregunta.iddocumentosolicitado='". $iddocumentosolicitado."' 
                  and documentosolicitado_pregunta.idpregunta = p.idpregunta and p.statuspregunta=1";
                  $dinamiclen  = $this->db->query($dy);
                  $l = $dinamiclen->num_rows();
                  if ($l>0 ) {

                     $docindb =  $iddocumentosolicitado;
                      $flag ++; 
                  }
              }
             
        }

   
     
        $dynamicquery = "select p.idpregunta as numerop , p.pregunta , p.statuspregunta from
        pregunta as p, documentosolicitado_pregunta where 
        documentosolicitado_pregunta.iddocumentosolicitado='".$docindb."' 
        and documentosolicitado_pregunta.idpregunta = p.idpregunta and p.statuspregunta=1";


        $clientesr = "select * from clienteorg_respuesta  as cr , personafisica 
        as pf where   pf.idpersonafisica =cr.idpersonafisica 
        and pf.idempresa='".$idempresa."'";


        $actasf = $this->db->query($dynamicquery);
        $preguntassinomisionesdef  = $actasf->result_array();
        
        $clientesresult  = $this->db->query($clientesr);
        $contestadas = $clientesresult->result_array();

       
        $b = 0;
        $idpreguntadefault = 0;
        $idcontestadap =0;

        foreach ( $contestadas as $row) {
              
               $idcontestadap = $row["idpregunta"];
               $idpersonafisica = $row["idpersonafisica"];
               $historialCC = $row["idhistorial"];
                 
                   foreach($preguntassinomisionesdef  as $row ) {
          
                              $idpreguntadefault  = $row["numerop"];
                         
                                  if ($idpreguntadefault == $idcontestadap) {
                                    
      //                                
                                                
                $clientesarreglo[$t] = array(
                    "idpersonafisicaaaa" => $idpersonafisica,
                    "idpregunta" => $idcontestadap,
                    "historialCC" =>  $historialCC
                );

              $t++;


                                      }
                        }

                            
            }


      $vx = 0;

      $clientesdatosf = array();

      foreach ($clientesarreglo as $row) {
        # code...
     


            $idpregunta = $row["idpregunta"];
            $idpersonafisica = $row["idpersonafisicaaaa"];
             $historialCC =  $row["historialCC"];


            
           
            $dinamicArreyCliente = "SELECT * FROM personafisica as pf , historial_crediticio, clienteorg_respuesta as cr  
            WHERE cr.idhistorial = $historialCC and   cr.idpregunta = $idpregunta and cr.idpersonafisica =  $idpersonafisica  and 
            historial_crediticio.idhistorial = cr.idhistorial group by pf.idpersonafisica";      



            $valorresultado  = $this->db->query($dinamicArreyCliente);   
            array_push($clientesdatosf ,  $valorresultado->result_array() ); 

         $vx++;
         
       }
     


     // print_r($clientesdatosf);
      return $clientesdatosf;








}/*Termina modelo */






/**************************************************************************************/





/****************************************************************/
function getdatanograve($idempresa , $nombredocumento){

        $clientesarreglo = array();

        $t =0;

        $getActas ="select * from documentosolicitado where nombredocumento='".$nombredocumento."'";
        $r = $this->db->query($getActas);
        $iddocumentosolicitado =0;
        $docindb = 0;
        $flag =0;
        foreach ($r->result_array() as $row) {
              
              

              if ($flag == 0 ) {
                 $iddocumentosolicitado  = $row["iddocumentosolicitado"];
                  
                  $dy = "select p.idpregunta as numerop , p.pregunta , p.statuspregunta from
                  pregunta as p, documentosolicitado_pregunta where 
                  documentosolicitado_pregunta.iddocumentosolicitado='". $iddocumentosolicitado."' 
                  and documentosolicitado_pregunta.idpregunta = p.idpregunta and p.statuspregunta=0";
                  $dinamiclen  = $this->db->query($dy);
                  $l = $dinamiclen->num_rows();
                  if ($l>0 ) {

                     $docindb =  $iddocumentosolicitado;
                      $flag ++; 
                  }
              }
             
        }

   
     
        $dynamicquery = "select p.idpregunta as numerop , p.pregunta , p.statuspregunta from
        pregunta as p, documentosolicitado_pregunta where 
        documentosolicitado_pregunta.iddocumentosolicitado='".$docindb."' 
        and documentosolicitado_pregunta.idpregunta = p.idpregunta and p.statuspregunta=0";


        $clientesr = "select * from clienteorg_respuesta  as cr , personafisica 
        as pf where   pf.idpersonafisica =cr.idpersonafisica 
        and pf.idempresa='".$idempresa."'";


        $actasf = $this->db->query($dynamicquery);
        $preguntassinomisionesdef  = $actasf->result_array();
        
        $clientesresult  = $this->db->query($clientesr);
        $contestadas = $clientesresult->result_array();

       
        $b = 0;
        $idpreguntadefault = 0;
        $idcontestadap =0;

        foreach ( $contestadas as $row) {
              
               $idcontestadap = $row["idpregunta"];
               $idpersonafisica = $row["idpersonafisica"];
                 
                   foreach($preguntassinomisionesdef  as $row ) {
          
                              $idpreguntadefault  = $row["numerop"];
                         
                                  if ($idpreguntadefault == $idcontestadap) {
                                    
      //                                array_push($clientesarreglo , $idpersonafisica);
                                      
      $clientesarreglo[$t] = array(
          "idpersonafisica" => $idpersonafisica,
          "idpregunta" => $idcontestadap,
      );

      $t++;


                                      }
                        }

                            
            }


      $w = 0;

      $clientesdatosf = array();

      while ( $w < count($clientesarreglo) ) {
          


            $idpregunta = $clientesarreglo[$w]["idpregunta"];
            $idpersonafisica = $clientesarreglo[$w]["idpersonafisica"];

            
            $dinamicArreyCliente = "SELECT * FROM personafisica , historial_crediticio, clienteorg_respuesta as cr  
            WHERE cr.idpregunta = $idpregunta and cr.idpersonafisica =  $idpersonafisica  and historial_crediticio.idhistorial = cr.idhistorial";      
            $value  = $this->db->query($dinamicArreyCliente);
            array_push($clientesdatosf,  $value->result_array());
          
          $w++; 
      }      
      

        
      return $clientesdatosf;



















}/*Termina modelo */



/*Termina modelo */
}




