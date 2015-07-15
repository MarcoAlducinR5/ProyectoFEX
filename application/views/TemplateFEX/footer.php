</div></div>
<footer>
<div class="container">
	<div class="row" align="center">
		<div>UBCubo</div>
		<div> © Copyright 2015. Todos los derechos reservados.</div>
		<div>
			<img src="<?=base_url('application/img/general/002.jpg');?>" style="width:30px;">
		</div>
	</div>
</div>

</footer>



<!--Termina new letter-->


<input type='hidden' name='now' class='now' value="<?=base_url();?>" > 
 </body>
    </html>


    <script type="text/javascript">

   	$(document).on("ready", function(){

   		$('.table').dataTable({
		        "language": {
		            "url": "//cdn.datatables.net/plug-ins/1.10.7/i18n/Spanish.json"
		        },
		        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "Todos"]]
		});

   	});
    </script>