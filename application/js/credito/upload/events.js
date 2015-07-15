$(document).ready(function(){


	$("#upload-content-doc").click(uploaddata);

});



function uploaddata(){

	 next = now + "index.php/api/updatafilerestcontroller/updocumentfisico/format/json/";
	 $.post(next).done(function(data){
	 	
	 		alert(data);

	 }).fail(function(){

	 		alert("Error");
	 });


}/*Termina de subir el archivo*/