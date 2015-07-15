<script type="text/javascript" src="<?=base_url('application/js/credito/creditoprincipal.js')?>"></script>
<script type="text/javascript" src="<?=base_url('application/js/credito/personas.js')?>"></script>
<script type="text/javascript" src="<?=base_url('application/js/credito/siguientedocumentossolicitud.js')?>"></script>
<script src="<?=base_url('application/js/js/jquery-tags-input/jquery.tagsinput.js')?>"></script>
<script src="<?=base_url('application/js/js/tagsinput-init.js')?>"></script>
<script type="text/javascript" src="<?=base_url('application/js/js/bootstrap-inputmask/bootstrap-inputmask.min.js')?>">
</script>
	<meta charset="utf8"/>
<link href="<?=base_url('application/js/bootstrap.min.css')?>" rel="stylesheet" id="bootstrap-css">


<!-- <link rel="stylesheet" type="text/css" href="<?=base_url('application/style.css')?>"> -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?=base_url('application/src/jquery.stepyform.js')?>"></script>

<div class="row setup-content" id="step-1">
    <div class="col-xs-8 col-md-offset-2">
        <div class="col-md-12">
			<form id="clienteindb">
				<div class="stepy-step">
					<h2>Información del Cliente</h2>
					<div class="form-group">
        	        	<label class="control-label">RFC de solicitante</label>
            	    	<input maxlength="100" type="text" class="form-control" name='RFC' placeholder="" required="requiered" />
                	</div>
					<div class="row">
                    	<div class="col-xs-6 ">
                       		<div class="form-group">
                           		<label class="control-label">Apellido paterno:</label>
                           		<input  maxlength="100" type="text" required="required" 
                           			class="form-control" name='apellido'  placeholder="Medrano"   />
                        	</div>
                    	</div>    
                    	<div class="col-xs-6 ">
                        	<div class="form-group">
                            	<label class="control-label">Apellido materno:</label>
	                            <input maxlength="100" type="text" required="required" 
    		                    	class="form-control" name='apellidom'  placeholder="Salazar"  />
            	            </div>
                	    </div>        
                    	<div class="col-xs-6 ">
                            <div class="form-group">
                            	<label class="control-label">Primer nombre:</label>
                            	<input maxlength="100" type="text" required="required" 
                              		class="form-control" name='nombres' placeholder="Jonathan" />
                            </div>
	                    </div>        
    	                <div class="col-xs-6 ">        
                        	<div class="form-group">
                            	<label class="control-label">Segundo nombre:</label>
                            	<input maxlength="100" type="text"
                            		class="form-control" name='nombres2' placeholder="Govinda" />
                            </div>
                    	</div>      
                	</div>         		
				</div>
				<div class="stepy-step">
					<h2>Descripcion del crédito</h2>
					<div class="form-group">
                    	<label class="control-label">Fecha:</label>
	                    <input placeholder="" data-mask="99-99-9999" name='fecha' class="form-control" type="text">
    	                <span class="help-inline">dd-mm-yyyy</span>
        	        </div>    
                	<div class="form-group">
                  		<label class="control-label">No. De Crédito:</label>
                  		<input  maxlength="100" type="text" required="required" class="form-control" 
                  			name='numerocredito'  placeholder="2-959480100-000674-09"   />
                	</div> 
                	<div class="form-group">
                    	<input type='hidden' value='' id="clienteregistradoorg" name="clienteregistradoorg"> 
                    	<label class="control-label">Tipo de crédito:</label>
                    	<!-- <div id="creditosolicitado">-->
                    	<select name='creditook' id='creditook' class='form-control'  >
                    		<?php  
                    			foreach ($tipoCredito as $value) {                       
                        			echo "<option value='".$value['idarchivo']."'>".$value['nombre']."</option>";                        
	                    		}
    	                	?>
        	            </select>
            	        <!--</div>  -->
                	</div>
                	<div class="form-group">
                  		<label class="control-label">Ejecutivo a cargo:</label>
                		<input maxlength="100" type="text" class="form-control" name='ejecutivo'  />
                	</div>
                	<div class="form-group">
                  		<label class="control-label">Monto del Crédito:</label>
                  		<input maxlength="100" type="text" class="form-control" name='montocredito' 
                  			placeholder="1000" required="requiered" />
                	</div>
                	<div class="form-group">
                  		<label class="control-label">Comentarios</label>
                  		<textarea class="form-control" name='nota' rows="3"></textarea>
	                </div>
					<!-- <button class="btn btn-primary nextBtn btn-lg pull-right"  id='siguientedocumentossolicitud' 
          				type="button" >Registrar</button> -->
          				<input type="submit" id='siguientedocumentossolicitud' value="Registrar">
				</div>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(function () {
		//$("#clienteindb").stepyform({
		$("form").stepyform({
			navButtonsAttrs: {
				"class":"navigate"
			},
			nextButtonsClass: "next",
			prevButtonsClass: "prev",
			onChangeStep: function(){
				console.log(this)
			}
		})
	})
	</script>