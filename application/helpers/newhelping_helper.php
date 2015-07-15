<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
//si no existe la función invierte_date_time la creamos
if(!function_exists('invierte_date_time')){

/*******************************************************************************************************/
/*Retornamos la vista que desplegará  en principal*/


function getFotmatTimemonth($cadena ){
	
$meses = ["", "Ene","Feb","Mar","Abr","May","Jun","Jul","Agos","Sep","Oct","Nov","Dic"];
	

	$dia = "";
	$mes = "";
	$año ="";

	$banderadia=0;
	$banderames =0;
	$banderA =0 ;

	$banderanumeromes =0;


	for ($x=0; $x < strlen($cadena); $x++) { 




		if ($banderadia == 0 ){

			if ($cadena[$x]!="-") {

				$dia.= $cadena[$x];

			}else{

				$banderadia++;
			}
		}else if($banderames == 0 ){

			if ($cadena[$x]!="-") {


					if ($cadena[$x] == "0" &&  $banderanumeromes == 0 ) {

						 $banderanumeromes ++;
					}else{

						$mes.= $cadena[$x];	


					}

					
			}else{

				$banderames++;
			}

			/*Año*/
		}




		else if($banderA == 0 ){

			if ($cadena[$x]!="-") {

				$año .= $cadena[$x];
			}else{

				$banderA++;
			}
			/*Año*/
		}else {}






	}



		
	$mernumero = intval($mes);
	return $dia .  "/" .  $meses[$mernumero]  . "/" . $año;




	//return strlen($cadena);


		
}







function getformatporcentaje($cadena ){
	$newformat  = "";
	$b =0;
	$cut =0; 
	while($b < strlen( $cadena)  ){
		if ($cut == 0  ) {
			$newformat .= $cadena[$b];
			if ($cadena[$b] == ".") {
				
				$newformat .= $cadena[$b + 1];
				$newformat .= $cadena[$b + 1]. "%";
				$cut++;
			}
		}
		$b++;
	}
	return $newformat;
}


/****************************************************************************************************/	
/*Termina retornamos la vista que desplegará */




}/*Termina el helper*/
 