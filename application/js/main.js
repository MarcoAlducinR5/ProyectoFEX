$(document).on("ready" , function(){

	now = $(".now").val();
});
function outsystem(){
	urlnext = $(".now").val()+"index.php/sessioncontroller/logout/";		
	redirect(urlnext);	
}
function llenaelementoHTML(idelement , data){

	$(idelement).html(data);
} 
function valorHTML(idelement , data){

	$(idelement).val(data);
} 
function redirect(url){
	window.location.replace(url);
}
function recorrepage(idrecorrer){
	
      $('html,body').animate({
        scrollTop: $(idrecorrer).offset().top
    }, 200);
}


function showhide(elementoenelquepasas, elementodinamico ){

	$( elementoenelquepasas ).mouseover(function() {

			$(elementodinamico).show();
	
	}).mouseout(function() {

		$(elementodinamico).hide();
	});


}


function showonehideone( elementomostrar , elementoocultar  ){
 
	$(elementomostrar).show();
	$(elementoocultar).hide();

}


/*saca el id del elemento */
function getidstringanddinamicelement(completa, elementomostrar , elementoocultar){

	bandera =0; 
	id="";

	for(var x in completa){

			if (bandera>0) {
				id += completa[x];
			}

			if (completa[x] == "_") {
				bandera++;
			}


	}/*Termina el ciclo*/
	
	dinamicinput =  elementomostrar + id;
	dinamicpnombre =  elementoocultar+ id;
	showonehideone( dinamicinput , dinamicpnombre  );
	return id;



}





/*saca el id del elemento */
function getidstringcadena(completa){

	bandera =0; 
	id="";

	for(var x in completa){

			if (bandera>0) {
				id += completa[x];
			}

			if (completa[x] == "_") {
				bandera++;
			}


	}/*Termina el ciclo*/
	
	return id;

}





 function valEmail(valor){
    re=/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$/
    if(!re.exec(valor))    {
        return false;
    }else{
        return true;
    }
}


function currency(value, decimals, separators) {
    decimals = decimals >= 0 ? parseInt(decimals, 0) : 2;
    separators = separators || ['.', "'", ','];
    var number = (parseFloat(value) || 0).toFixed(decimals);
    if (number.length <= (4 + decimals))
        return number.replace('.', separators[separators.length - 1]);
    var parts = number.split(/[-.]/);
    value = parts[parts.length > 1 ? parts.length - 2 : 0];
    var result = value.substr(value.length - 3, 3) + (parts.length > 1 ?
        separators[separators.length - 1] + parts[parts.length - 1] : '');
    var start = value.length - 6;
    var idx = 0;
    while (start > -3) {
        result = (start > 0 ? value.substr(start, 3) : value.substr(0, 3 + start))
            + separators[idx] + result;
        idx = (++idx) % 2;
        start -= 3;
    }
    return (parts.length == 3 ? '-' : '') + result;
}




function getmonthFormat(cadena){


var meses = new Array ("", "Ene","Feb","Mar","Abr","May","Jun","Jul","Agos","Sep","Oct","Nov","Dic");


	dia = "";
	mes = "";
	año ="";

	banderadia=0;
	banderames =0;
	banderA =0 ;

	banderanumeromes =0;

	for(var x in cadena){

		
		if (banderadia == 0 ){

			if (cadena[x]!="-") {

				dia+= cadena[x];
			}else{

				banderadia++;
			}
		}else if(banderames == 0 ){

			if (cadena[x]!="-") {


					if (cadena[x] == "0" &&  banderanumeromes == 0 ) {

						 banderanumeromes ++;
					}else{

						mes+= cadena[x];	


					}

					
			}else{

				banderames++;
			}

			/*Año*/
		}




		else if(banderA == 0 ){

			if (cadena[x]!="-") {

				año += cadena[x];
			}else{

				banderA++;
			}
			/*Año*/
		}else {}

	}



	//diasSemana[f.getDay()] + ", " + f.getDate() + " de " +  + " de " + f.getFullYear()
	mernumero = parseInt(mes);

	return dia + "/" + meses[mernumero]  + "/" + año;


}
