<script type="text/javascript" src="<?=base_url('application/js/auditoria/listarusuarios.js')?>"></script>
<!--********************************************************************************************************-->
        <div class="page-header">
          <h1><?=$titulo;?> <small></small></h1>
        </div>
       
        <table aria-describedby="hidden-table-info_info" class="display table table-bordered dataTable" 
        id="hidden-table-info">
        <thead>

        <tr role="row">
            <th aria-label="" style="width: 1%;" colspan="1" rowspan="1" role="columnheader" 
            class="sorting_disabled">#
            </th>
        <th aria-label="Rendering engine: activate to sort column descending" aria-sort="ascending"
         style="width: 5%;" colspan="1" rowspan="1" aria-controls="hidden-table-info"
          tabindex="0" role="columnheader" class="sorting_asc">Nombre</th>
          <th aria-label="Browser: activate to sort column ascending" style="width: 15%;" 
          colspan="1" rowspan="1" aria-controls="hidden-table-info" tabindex="0" role="columnheader" 
          class="sorting">Email</th>
          <th  style="width: 15%;" colspan="1" rowspan="1" aria-controls="hidden-table-info"
           tabindex="0" role="columnheader" class="hidden-phone sorting">Fecha de registro</th>
           <th aria-label="Engine version: activate to sort column ascending" style="width: 15%;" 
           colspan="1" rowspan="1" aria-controls="hidden-table-info" tabindex="0" role="columnheader
           " class="hidden-phone sorting">Perfil</th>
           <th aria-label="CSS grade: activate to sort column ascending" style="width: 4%;" 
           colspan="1" rowspan="1" aria-controls="hidden-table-info" tabindex="0" role="columnheader" 
           class="hidden-phone sorting"></th></tr>
        </thead>
        
        <tbody id='listausuariosempresa' >
            

         
        </tbody>



    </table>
    <br>
    <div id="masInfo" align="center">
      <a href="<?=base_url('index.php/auditoria/exportaUsuariosPDF/')?>">Generar PDF</a>
    </div>
