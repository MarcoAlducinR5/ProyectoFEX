<script type="text/javascript" src="<?=base_url('application/js/credito/creditoprincipal.js')?>"></script>
<script type="text/javascript" src="<?=base_url('application/js/credito/personas.js')?>"></script>
<script type="text/javascript" src="<?=base_url('application/js/credito/siguientedocumentossolicitud.js')?>"></script>
<script type="text/javascript" src="<?=base_url('application/js/credito/siguientedocumentossolicitudmoral.js')?>"></script>

<script src="<?=base_url('application/js/js/jquery-tags-input/jquery.tagsinput.js')?>"></script>
<script src="<?=base_url('application/js/js/tagsinput-init.js')?>"></script>
<script type="text/javascript" src="<?=base_url('application/js/js/bootstrap-inputmask/bootstrap-inputmask.min.js')?>">
</script>





    <div class="row setup-content" id="step-1">
      <div class="col-xs-8 col-md-offset-2">
        <div class="col-md-12">
          <form id="empresaindb">

                <div class="form-group">
                    <label class="control-label">Fecha:</label>
                    <input placeholder="" data-mask="99-99-9999" name='fecha' class="form-control" type="text">
                    <span class="help-inline">dd-mm-yyyy</span>
                </div>
                
                <div class="form-group">
                  <label class="control-label">No. De Crédito:</label>
                  <input  maxlength="100" type="text" required="required" 
                  class="form-control" name='numerocredito'  placeholder="2-959480100-000674-09"   />
                </div>



                <div class="form-group">
                  <label class="control-label">RFC de solicitante</label>
                  <input maxlength="100" type="text"
                  class="form-control" name='RFC' placeholder="" required="requiered" />
                </div>  
                

                
                <div class="form-group">
                  <label class="control-label">Empresa:</label>
                <input maxlength="100" type="text"
                  class="form-control" name='empresa'  />
                </div>
                


                <div class="form-group">
                    <input type='hidden' value='' id="empresaregistradoorg" name="empresaregistradoorg"> 
                    <label class="control-label">Tipo de crédito:</label>
                    <div id="creditosolicitado"></div>  
                </div>

                
                <div class="form-group">
                  <label class="control-label">Ejecutivo a cargo:</label>
                <input maxlength="100" type="text"
                  class="form-control" name='ejecutivo'  />
                </div>

                <div class="form-group">
                  <label class="control-label">Monto del Crédito:</label>
                  <input maxlength="100" type="text"
                  class="form-control" name='montocredito' placeholder="1000" required="requiered" />
                </div>

                <div class="form-group">
                  <label class="control-label">Comentarios</label>
                  <textarea class="form-control" name='nota' rows="3"></textarea>
                </div>
                   
           </form> 


          <button class="btn btn-primary nextBtn btn-lg pull-right"  id='siguientedocumentossolicitudmoral' 
          type="button" >Siguiente</button>
        </div>
      </div>
    </div>
        
