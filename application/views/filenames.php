
<div class="col-sm-12">
    <table class="col-sm-12">
                                <thead>
                                    <tr>
                                        <th>Documentos (Descargar)</th>
                                      
                                    </tr>
                                </thead>

    <tbody>

<?php
 if($files){
     echo heading('Archivo(s) disponible(s) para descargar', 3);
     $lista="";
      foreach($files as $file){
        $urlfile = base_url(). $basef."/". $h . "/" .$file;
        $lista .="<tr>
        <td><a href='$urlfile'>$file</a> </td>
        </td>";
    		
      }
      echo $lista;
 }else{

	echo heading('No hay archivos para descargar', 3).anchor('files', 'Subir un Archivo');

 }
    

?>
                    
        
        </tbody>
    </table>
</div>
                   
