<script type="text/javascript" src="<?=base_url('application/js/credito/metricas/principalpersona.js')?>"> </script>
<script type="text/javascript" src="<?=base_url('application/js/credito/evaluacion/principal.js')?>"> </script>


<div class="row">
    <h3>Creditos del cliente

            #<span class="text-center" id="numerocreditos"></span>
    </h3>
</div>

<form id="user_form_general">
            <input type="hidden" name="clienteorg" id="clienteorg" value="<?=$clienteorg;?>">
</form>            





<div class="col-lg-1"></div>
<div class="col-lg-10">
<div class="row">


          <section class="panel">
    
          
                        <table class="table" style=" background :  none repeat scroll 0% 0% #174C7A">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Apellido paterno</th>
                                <th>Apellido materno</th>
                                <th>Primer nombre</th>
                                <th>segundo nombre</th>
                                <th>Nombre completo</th>
                                <th>Fecha en que fué registrado por primera vez</th>
                                <th>Persona quien registró por primera vez</th>
                                <th>Folio del primer registrante</th>
                                <th>Historial crediticio</th>
                            </tr>
                            </thead>
                            <tbody tyle="color :  #FFF;" id="infoclientemoved">
                            </tbody>
                        </table>
                        <div id="mensaje"></div>


                         
   

<table>
    <tr>
        <td> RFC : </td>
        <td><div id='RFCcliente'></div> </td>
    </tr>
    <tr>
         <td> Observaciones : </td> <td> <div id='notacliente'></div></td>
    </tr>
</table>
           
        

                                <div class="row">
                                   
                                    <div class="col-lg-2"> </div> 
                                <div class="row">

                                    <div class="col-lg-8">        
                                                                        
                                                <table class='table'>


                                                   <h3 id="credito_nombre"></h3>         
                                                    
                                                    <tr>
                                                        <td>Documentos entregados: </td>   
                                                        <td><div id="documentosentregadosok"></div></td>
                                                         <td>DE </td> 
                                                         <td> <div id="numerodocumentosrequeridos"> </div></td>
                                                         <td> <div id="porcentajeentregados"></div> </td>

                                                    </tr>
                                                    <tr>
                                                        <td>Faltantes: </td>
                                                        <td><div id='documentos_faltantes'></div></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><div id='documentos_faltantesporcentaje'></div></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Monto solicitado (MX): </td><td > <div id="monto_solicitado"></div></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Folio del credito: </td><td> <div id="Folio_solicitante"></div></td>
                                                    </tr>
                                                    <tr>
                                                        <div id="imagendocumento"></div>
                                                    </tr>
                                                    
                                                </table>
                                    </div>  

                                 </div>

                                 <div class="row">
                                     <h4>Documentación</h4>
                                       <div class="col-lg-2"> </div> 

                                     <div class="col-lg-10">        
                                            <div  class="" id='listadocumentook'></div>
                                    </div>         
                                
                                 </div>   
                                </div>

              
                    

          </section>



</div>

</div>



 
