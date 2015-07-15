<!--
<?php echo getListDataTable($datalistuserempresa);?>

-->


<script type="text/javascript" src="<?=base_url('application/js/clienteorg/clienteprincipal.js')?>"></script>
<script type="text/javascript" src="<?=base_url('application/js/clienteorg/list.js')?>"></script>
<script type="text/javascript" src="<?=base_url('application/js/clienteorg/listMoral.js')?>"></script>



 <header class="panel-heading custom-tab turquoise-tab">
                <ul class="nav nav-tabs">                                                     
                        <li class="active">
                            <a data-toggle="tab" href="#about3">
                                <i class="fa fa-user fa-3x"></i>
                                    Personas físicas
                            </a>
                        </li>
                         <li class="">
                            <a data-toggle="tab" href="#contact3">
                                <i class="fa fa-building-o fa-3x"></i>
                                Personas morales
                            </a>
                        </li>
                </ul>
    </header>



                       


                            <div class="tab-content">
                                <div id="about3" class="tab-pane active">
                                       <div class="row-centered">
                                               <a href="<?=base_url('index.php/clienteorg/registropersonafisica')?>"> <button class="btn btn-info" >Alta de persona física</button> </a>
                                       </div>
                                       <br> 

                                        <table id='datatable'  class='no-border blue'>
                                            <thead>
                                                <tr>
                                                <th>ID</th>
                                                <th>No. Crédito</th>
                                                <th>Nombre Cliente</th>
                                                <th>RFC</th>
                                                <th>Ejecutivo</th>
                                                <th>Monto</th>
                                                <th>Tipo</th>
                                                <th>Fecha de registro</th>
                                                <th>Fecha de captura</th>
                                                <th>Porcentaje de captura </th>
                                                <th>Puntos acumulados</th>
                                                <th>Calificación</th>
                                                <th>Omisiones gráves</th><th>Evaluar</th>    
                                                </tr>
                                            </thead>
                                            <tbody id="list_person" class='list_person'>
                                            </tbody>
                                        </table>
                    
                                </div>
                                  <div id="contact3" class="tab-pane ">

                                        <div class="row-centered">
                                               <a href="<?=base_url('index.php/clienteorg/registropersonamoral')?>"> <button class="btn btn-info" >Alta de persona moral</button> </a>
                                        </div>
                                        <br> 
                                      






                                        <table  id='datatable-morales' class='no-border blue data-table-class datatable'><thead >
                                            <tr role='row'>
                                            <th>ID</th>
                                            <th>No. Crédito</th>
                                            <th>Nombre Empresa</th>
                                            <th>RFC</th>
                                            <th>Ejecutivo</th>
                                            <th>Monto</th>
                                            <th>Tipo</th>
                                            <th>Fecha de registro</th>
                                            <th>Fecha de captura</th>
                                            <th>Porcentaje de captura</th>
                                            <th>Puntos acumulados</th>
                                            <th>Calificación</th>
                                            <th>Omisiones gráves</th><th>Evaluar</th>    
                                            </tr></thead>

                                            <tbody id="list_person_moral" class='list_person_moral'>
                                            </tbody>
                                        </table>

                                </div>
                                
                            </div>
              

