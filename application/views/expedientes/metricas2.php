<script type="text/javascript" src="<?=base_url('application/js/credito/metricas2/principal.js')?>"> </script>
<script type="text/javascript" src="<?=base_url('application/js/credito/metricas2/ready.js')?>"> </script>
<script type="text/javascript" src="<?=base_url('application/js/credito/upload/events.js')?>" ></script>





<div class="row">
            <div class="col-md-12">
              <div class="block-flat">
                <div class="header">
                  <h3>Datos del Expediente: No.[<?=$historialcrediticio;?>]</h3>
                </div>
                <div class="content">
                  <div>

                        <table >
                            
                        

                            <tr class="greytr">
                                <td>Fecha:</td> 
                                <td
                                <td>
                                    <div id="fecha"><?=getFotmatTimemonth( $fecha); ?></div>
                                </td> 
                            </tr>

                            <tr>
                                <td>
                                    Fecha de registro:
                                </td>
                                <td> 
                                    <div><?= getFotmatTimemonth( $fecha_registro);?></div>
                                 </td>
                            </tr>


                           <tr class="greytr">
                                <td>No. De Crédito:</td> <td><div id="numerocredito"><?=$numerocredito?></div></td>
                               
                            </tr>


                            <tr>
                                <td>Nombre del Cliente:</td>
                                <td><?=$nombrecompleto?></td>
                            </tr>
                            <tr class="greytr">
                                <td>RFC</td>
                                <td><?=$RFC?></td>
                            </tr>
                           <tr >
                                <td>Tipo de Crédito:</td>
                                <td><?=$Tipo?></td>
                           </tr>
                           <tr class="greytr">
                            <td>Ejecutivo a cargo:</td>
                            <td><?=$Ejecutivo?></td>
                           </tr>
                    
                            <tr >
                                <td>Monto del Crédito:</td><td><div id="monto"> $ 
                                <?php 
                             
                                setlocale(LC_MONETARY, 'it_IT');
                                echo money_format('%.2n', $monto) . "\n";
                                
                               
                                ?> 
                            </div></td>
                            </tr>   
                            <tr >
                                <td>Observaciones:</td><td>
                                <div id="observaciones"><?=$nota;?></div>
                            </td>
                            </tr>
                               


                             
                           
                        </table>









  <div id="documentossolicitados"></div>

              
                    <!--Termina la nueva tabla-->
             
                        <table >
                            <tr>
                                <td class="col-sm-6">
                                </td>

                                <td class="col-sm-6">
                                
                                <a href="<?=base_url('index.php/auditoria/exportaEvaluacioncliente/')?>?numerocredito=<?=$historialcrediticio?>&customer=<?=$clienteorg?>">
                                    <div id="expordocument">
                                       
                                        
                                        
                                         <center><i class="fa fa-file-pdf-o fa-3x"></i></center>
                                       <br>
                                        <center><span>Exportar</span></center>
                                        
                                    </div>
                                </a>    
                                    
                                    
                                </td>

                            </tr>
                        </table>
   





        </div>
    </div>
</div>



















<!--*******************************************************************************************************-->
<form id="generic_form" class="generic_form">
    <input type="hidden" id="numerocreditook" name='numerocreditook' value="<?=$numerocredito?>">
    <input type="hidden" id="clienteorg" name="clienteorg" value="<?=$idpersonafisica?>">
    <input type="hidden" id="documento_s" name="documento">
    <input type="hidden" name="clienteorg" id="clienteorg" value="<?=$clienteorg;?>">
    <input type="hidden" name="histotialp" id="historialp" value="<?=$historialcrediticio;?>"> 
</form>




<!--****************************************************************************************************-->

<form id="user_form_general">
            <input type="hidden" name="clienteorg" id="clienteorg" value="<?=$clienteorg;?>">
</form>            

<form id="form_archivo">
    <input type="hidden" id="numerocreditook" name='numerocreditook' value="<?=$numerocredito?>">
    <input type="hidden" id="clienteorg" name="clienteorg" value="<?=$idpersonafisica?>">
    <input type="hidden" id="documento_s" name="documento">
    <input type="hidden" name="clienteorg" id="clienteorg" value="<?=$clienteorg;?>">
    <input type="hidden" name="historialcrediticio" id="historial" value="<?=$historialcrediticio;?>">
    <input type="hidden" name="idarchivo" id="idarchivo" value="<?=$idarchivo?>">
    <input type="hidden" name="typeclient" id="typeclient" value="clienteorg"> 

</form>




<!--
Dont change
-->

<input type='hidden'   id="totaleshechosocultos" value='0' name="totaleshechosocultos">



<!--************************************************************************************-->
 <!-- 
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
    <div class="modal-dialog">


                <div class="modal-content">
                    <div class="modal-body">
                        



                        <center>
                          
                                <div id="cuestionario"></div>
                        </center>

                        <center>
                            <table >
                                    <tr>
                                        <td> <h2>Preguntas contestadas: </h2> </td> 
                                        <td><div id="contestadas"></div> </td>
                                        <td><h2> DE </h2></td>
                                        <td><div id="pregguntastotales"></div></td>
                                    </tr>
                                    <tr>
                                        <td>Afirmativas: </td>
                                        <td><div id="preguntascontestadasok"></div></td>
                                        <td>Negativas </td>
                                        <td><div id="respuestano"></div></td>
                                    </tr>
                            </table>
                        </center>
        
      
<center>
        <table>
                <tr>
                    <td> <h1>Puntuaje</h1></td>
                    <td><h1>/</h1></td>
                    <td><h1>Solicitado</h1></td>
                </tr>
                 <tr>
                    <td>
                      <h3 id='mispuntosencuesta'></h3>  
                    </td>  
                    <td>
                        <h3> / </h3>
                    </td>
                    <td>
                        <h3 id="mispuntossolicitados">  </h3>
                    </td>
                  </tr>
        </table>

</center>

<center>

    <?=heading('Suba un archivo  pdf, docx ', 3);?> 

    <?=form_open_multipart('files/do_upload');?>
    
    

    <table>
        <tr>
            <td>
                <input type="file" name="userfile"  />
                <input type='hidden' name='f' value='1'>
                <input type="hidden" name="historia_doc" id="historia_doc"
                 value="<?=$historialcrediticio;?>">
            </td>
             <td>
                <input type="submit" value="Subir documento" />
            </td>    
        </tr>
        

    </table>

    <?=form_close()?>
</center>

                    <div class="modal-footer">
                        <button id="cerrarmodal" data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
     modal -->







<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
    <div class="modal-dialog">


                <div class="modal-content">
                    <div class="modal-body">
<center>

   






<div class="dinamic-list"></div>



</center>

                    <div class="modal-footer">
                        <button id="cerrarmodal" data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

















<p class='w'></p>

<form id="hiddenformulario">
    <input type='hidden' class="input_puntoRecabados"  name="input_puntoRecabados">
    <input type="hidden" name="historialcrediticioo" id="historialo" value="<?=$historialcrediticio;?>">
    <input type="hidden" name="tipo"  value="0" >
</form>
