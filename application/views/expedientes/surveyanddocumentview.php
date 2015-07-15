<script type="text/javascript" src="<?=base_url('application/js/survey/cuestionario.js')?>">
</script>


	<!--**************************************************************-->
			<form id="generic_form">
				<input type="hidden" name="documento" id="documento" value="<?=$documentacion;?>">
				<input type="hidden" name="clienteorg" id="idcostomer" value="<?=$org;?>">
			</form>




				<div class="row">


					 <div class="col-md-2"></div>
			 		
			        <div class="col-md-8">
			 				
			 				<table>
			 					<tr>
			 						<td>
			 							<h3 id="documentosolicitado"></h3>
			 						</td>

			 						<td>

			 							<div id="checkbox_indicador">
			 								
			 							</div>
			 						</td>
			 					</tr>
			 				</table>
								
			        
			        	<div class="col-lg-12" id="cuestionario"></div>
			        	<div class="col-md-12">
			        	<span id="especificaciones"></span>
			        	</div>
			        </div>
			        
		        </div>














		
<div class="row">
	<?=form_open_multipart('files/do_upload');?>
	<input type="file" name="userfile" size="20" />
	<br/>
	<input type="submit" value="Subir" />
	<?=form_close()?>
	
</div>












<div id="tablero">
<div class="row">

	<div class="col-lg-2"></div>
	<div class="col-lg-8">
		<table class='table'>
			<tr>
				<td>Preguntas contestadas: </td> 
				<td><div id="contestadas"></div> </td>
				<td>DE</td>
				<td><div id="pregguntastotales"></div></td>
				<td><div id="porcentajecontestadas"></div></td>
			</tr>
			<tr>
				<td>El solicitante contestó afirmativamente a: </td>
				<td><div id="preguntascontestadasok"></div></td>
				<td></td>
				<td></td>
				<td><div id="porcentajeokresponde"></div></td>
			</tr>
			<tr>
				<td>El solicitante contestó negativamente a: </td>
				<td><div id="respuestano"></div></td>
				<td></td>
				<td></td>
				<td> <div id="porcentajenegativas"></div></td>
			</tr>

		</table>

	</div>
	
</div>

</div>


<h5><?=br(1).anchor('files/info', 'Listado de archivos para descargar'); ?></h5>