<script type="text/javascript" src="<?=base_url('application/js/presentacion/personas.js')?>"></script>
<script type="text/javascript" src="<?=base_url('application/js/usuarios/principal.js')?>"></script>
<script type="text/javascript" src="<?=base_url('application/js/correo/exito.js')?>"></script>
<script src="<?=base_url('application/js/js/morris-chart/morris.js')?>"></script>
<script src="<?=base_url('application/js/js/morris-chart/raphael-min.js')?>"></script>
<script src="<?=base_url('application/js/js/morris-chart/morris.init.js')?>"></script>
<script type="text/javascript"></script>



<script type="text/javascript">
      google.load("visualization", "1.1", {packages:["bar" , "corechart"]});
    //
</script> 



<div class="row">
        <div class="col-sm-4"> 

            <table class="table table-bordered">
                <thead>
                    <tr>                                                
                        <th width="85%">
                            <center><h5>Clientes en el Sistema</h5></center>
                        </th>
                        <th>
                            <center><h5><div id="numeroclientes"></div></h5></center>
                        </th>
                        <!-- <th>
                            <center><h5>100.00 %</h5></center>
                        </th> -->
                    </tr>
                </thead>
                <tbody align="center">
                    <tr>
                        <td>Personas Físicas</td>
                        <td><div id="personasFisicas" ></div></td>
                        <!-- <td><div id="porcentajePersonasFisicas"></div></td> -->
                    </tr>
                    <tr>
                        <td>Personas Morales</td>
                        <td><div id="personasMorales"></div></td>
                    <!--     <td><div id="porcentajePersonasMorales"></div></td> -->
                    </tr>
                </tbody>
            </table>

        </div> 

     


            <div class="col-sm-8"> 
                                                
                     <div id="clientes-pastel"></div>
            </div>  
    

    


    </div>
    <br>
    <div class="row">
    

        <div class="col-sm-4"> 
                                                
            <table class="table table-bordered" >
                <thead>
                    <tr>                                        
                        <th width="85%">
                            <center><h5>Expedientes en el Sistema</h5></center>
                        </th>
                        <th><center><h5><div id="totalExpedientes"></div></h5></center></th>
                        <!-- <th><center><h5><div>100.00%</div></h5></center></th> -->
                    </tr>
                </thead>
                <tbody align="center">
                    <tr>
                        <td>Personas Físicas</td>
                        <td id="expedientesFisicas"></td>
                        <!-- <td id="porcentajeExpedientesFisicas"></td> -->
                    </tr>
                    <tr>
                        <td>Personas Morales</td>
                        <td id="expedientesMorales"></td>
                        <!-- <td id="porcentajeExpedientesMorales"></td> --> 
                    </tr>
                </tbody>
            </table>

        </div>  
    
     
        <div class="col-sm-8">        
            <div id="Expedientes-pastel" class="Expedientes-pastel"></div>

        </div>

       
    </div>
    <br>

    <div class="row">
        <div class="col-sm-4">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="85%">
                            <center><h5>Sin Omisiones en el Sistema</h5></center>
                        </th>
                        <th><center><h5><div id="TotalSinOmisiones"></div></h5></center></th>
                        <!-- <th><center><h5>100.00 %</h5></center></th> -->
                     </tr>
                </thead>
                <tbody align="center">
                    <tr>
                        <td>Personas Físicas</td>
                        <td><div id="SinOmisionesFisicas"></div></td>
                        <!-- <td><div id="porcentajeSinOmisionesFisicas"></div></td> -->
                    </tr>
                    <tr>
                        <td>Personas Morales</td>
                        <td><div id="SinOmisionesMorales"></div></td>
                        <!-- <td><div id="porcentajeSinOmisionesMorales"></div></td> -->
                    </tr>
                </tbody>
            </table>

        </div> 




        <div class="col-sm-8">

            <div class="col-sm-12">

                <div class="col-sm-2" ></div>
                <div class="col-sm-8" >
                    <div id="top_x_div3" class="top_x_div3"></div>
                </div>
                
                <div class="col-sm-2" ></div>
            </div>
            
        </div>


    </div>

    

    <br>
    <div class="row">
        <div class="col-sm-4">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="85%">
                            <center><h5>Omisiones en el Sistema</h5></center>
                        </th>
                        <th><center><h5><div id="TotalOmisionesNoGraves"></div></h5></center></th>
                        <!-- <th><center><h5>100.00 %</h5></center></th> -->
                     </tr>
                </thead>
                <tbody align="center">
                    <tr>
                        <td>Personas Físicas</td>
                        <td><div id="OmisionesNoGravesFisicas"></div></td>
                        <!-- <td><div id="porcentajeOmisionesNoGravesFisicas"></div></td> -->
                    </tr>
                    <tr>
                        <td>Personas Morales</td>
                        <td><div id="OmisionesNoGravesMorales"></div></td>
                        <!-- <td><div id="porcentajeOmisionesNoGravesMorales"></div></td> -->
                    </tr>
                </tbody>
            </table>

        </div> 




        <div class="col-sm-8">

            <div class="col-sm-12">

                <div class="col-sm-2" ></div>
                <div class="col-sm-8" >
                    <div id="top_x_div2" class="top_x_div2"></div>
                </div>
                
                <div class="col-sm-2" ></div>
            </div>
            
        </div>


    </div>
    
    
    <br>
    <br>
    
    <div class="row">
        <div class="col-sm-4">        

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="85%">
                            <center><h5>Omisiones Graves en el Sistema</h5></center>
                        </th>
                        <th><center><h5><div id="numeroAlertas"></div></h5></center></th>
                        <!-- <th><center><h5><div>100.00 %</div></h5></center></th> -->
                     </tr>
                </thead>
                <tbody align="center">
                    <tr>
                        <td>Personas Físicas</td>
                        <td><div id="alertasFisicas"></div></td>
                        <!-- <td><div id="porcentajeAlertasFisicas"></div></td> -->
                    </tr>
                    <tr>
                        <td>Personas Morales</td>
                        <td><div id="alertasMorales"></div></td>
                        <!-- <td><div id="porcentajeAlertasMorales"></div></td> -->
                    </tr>
                </tbody>
            </table>
    
        </div>


        


            <div class="col-sm-8"> 
                <div class="col-sm-2"> </div>
                <div class="col-sm-8">
                     <div class="col-sm-12">

                        <div class="top_x_div" id="top_x_div"></div> 
                
                     </div>   
                </div>
                <div class="col-sm-2"> </div>
                
            </div> 
        
        

                      
    </div>

    

    
<br><br><br><br>
<div class="row">


          
                <div id="masInfo" align="center">
                    <a href="<?=base_url('index.php/auditoria/exportaTablaPDF/')?>">Generar PDF</a>
                </div>
                <br>
                <div id="enviar" align="center">
                  <button id="enviar">Enviar el correo electronico del adnimistrador</button>
                  <div id="mensaje"></div>
                </div>  
                        <input id='inputClientes' type='hidden' />
                        <input id='numeroFisicos_input' type='hidden' />
                        <input id='numeroMorales_input' type='hidden' />

                        <input id='input_expedientesFisicas' type='hidden' />
                        <input id='input_expedientesMorales' type='hidden' />
</div>                



<br><br><br><br>
