<script type="text/javascript" src="<?=base_url('application/js/presentacion/principal.js')?>"></script>

                        
<div class="panel-body">

    <div class="tab-content">

        <div class="tab-pane active" id="general">

            <div class="col-md-1"></div>

            <div class="col-md-9">

                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th><center>Expedientes</center></th>
                                    <th><center>Total de Expedientes</center></th>
                                  
                                </tr>
                            </thead>
                            <tbody align="center">
                                <tr>
                                    <td>Total de clientes en el sistema</td>
                                    <td id="numeroclientes"></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Expedientes CON omisiones GRAVES</td>
                                    <td id="numeroOmisionesGraves"></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Expedientes CON omisiones</td>
                                    <td>427</td>

                                    <!--<td id="numeroConO"> </td>-->
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Expedientes SIN omisiones</td>
                                    
                                    <td id="numeroSinO"></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <input id='inputClientes' type='hidden' />
                    <input id='inputOmisionesGraves' type='hidden' />
                    <input id='inputConOmisiones' type='hidden' />
                    <input id='inputSinOmisiones' type='hidden' />

<!-- 
                    <div class="value" id='numerointegrantes'></div>
                    <div class="title"> Integrantes de la empresa </div>
                    <div class="value"><label id="numeroclientes"></label></div>
                    <div class="title"> Clientes de la organizacion </div>
                    <div class="value">0</div>
                    <div class="title"> Anomalias presentadas </div>
                    <div class="value" id="numeroclientessolicitantes"></div>
                    <div class="title"> Clientes en proceso de validación </div>
                    <div class="value">0</div>
                    <div class="title"> Clientes rechazados</div>
                    <div class="value"><label id="numeroOmisiones"></label></div>
                    <div class="title"> Documentos que la empresa ha marcado ser omisiones graves </div>
 -->
              
            </div>

        </div>
    </div>
</div>









