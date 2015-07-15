<?php

include("../libraries/fonts/times.php"); //tcpdf
include("../libraries/config/lang/spa.php"); //tcpdf
$this->load->library('tcpdf'); //tcpdf

//*************
ob_end_clean(); //rompimiento de pagina
//*************
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('SOFTWARE-CREAM');
$pdf->SetTitle('codigoweblibre.comli.co - codigoweblibre.wordpress.com');
$pdf->SetSubject('PDF');
$pdf->SetKeywords('Reporte, ESTUDIANTES');

$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

//set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

//set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

//set some language-dependent strings
//$pdf->setLanguageArray($l);
// ---------------------------------------------------------
// set default font subsetting mode
$pdf->setFontSubsetting(true);

$pdf->SetFont('helvetica', '', 10, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->setPrintHeader(false); //no imprime la cabecera ni la linea
$pdf->setPrintFooter(false); // imprime el pie ni la linea
$pdf->AddPage();

$i = 0;
$tipo_documento = "";
$style = "";
$html = "";
$html = '<h2 style="text-align:center"><font color="#000000">Listado de Reportes</font></h2>';
$html .= '<table border="1" cellspacing="2" cellpadding="2">';
$html .='<tr style="background-color:#2494F2; color:#000; text-align: center;">
    <th># ID </th>
    <th>No. Crédito</th>    
    <th>Nombre Cliente</th>
    <th>RFC</th>
    <th>Monto</th>    
    <th>Fecha</th> 
    <th>%Completado</th>  
    <th>Ejecutivo</th>  
    </tr>';
          
    $i = 0;
    $z =0;
    $dinamicTable="";
    $wget =0;   

foreach ($datatablegeneric as $key => $value) {
    


     $i++;    
    if (($i % 2) == 0) {
        $style = 'style="background-color: #F8F8F8; "';
    } else {
        $style = "";
    }
            $primernombre = $datatablegeneric[$key][0]["primernombre"];
            $segundonombre = $datatablegeneric[$key][0]["segundonombre"];
            $primerapellido  = $datatablegeneric[$key][0]["primerapellido"];
            $segundoapellido = $datatablegeneric[$key][0]["segundoapellido"];
            $fecha_registro =  $datatablegeneric[$key][0]["fecha_registro"];
            $idpersonafisica = $datatablegeneric[$key][0]["idpersonafisica"];
        
            $ID = $z;
            $numerocredido =$datatablegeneric[$key][0]["idcredito"];
            $nombrecompleto = $primernombre . " " . $segundonombre . " " . $primerapellido . " " . $segundoapellido; 
            $RFC =  $datatablegeneric[$key][0]["RFC"];  
            $Ejecutivo =$datatablegeneric[$key][0]["Ejecutivoacargo"];
            $Monto =$datatablegeneric[$key][0]["monto"];
            $Tipo ="";
            $Fecha =$datatablegeneric[$key][0]["fecha"];

            $Calificacion =$datatablegeneric[$key][0]["calificacion"]; 
            $porcentaje = $datatablegeneric[$key][0]["Completoporcentaje"];

            setlocale(LC_MONETARY, 'it_IT');
            $idhistorial =0 ;
            $idhistorial = $datatablegeneric[$key][0]["idhistorial"];               
            
            $idarchivo =0;
            $nota = $datatablegeneric[$key][0]["nota"];


            $urlnextmetricas = base_url(). "index.php/expedientes/metricas?historialcrediticio=". $idhistorial."&oxjexyet=". $idpersonafisica."&idpersonafisica=" . $idpersonafisica. "&calificacion=" 
            . $Calificacion . "&numerocredito=".$numerocredido."&nombrecompleto=".$nombrecompleto.
            "&Ejecutivo=".$Ejecutivo."&monto=".$Monto."&Tipo=".$Tipo."&fecha_registro=".$fecha_registro 
            ."&fecha=".$Fecha."&Completoporcentaje=".$porcentaje."&RFC=".$RFC ."&idarchivo=". $idarchivo . "&nota=". $nota;
                   


    $html .= '<tr ' . $style . '><td>' .  $ID . '</td>';
    $html .= '<td>' . $numerocredido . '</td>';
    $html .= '<td>' . $nombrecompleto . '</td>';
    $html .= '<td>' . $RFC . '</td>';
    $html .= '<td> $'.money_format('%.2n', $Monto).' </td>';
   
    $html .= '<td>' . $Fecha . '</td>';
    $html .= '<td>' . $porcentaje . '</td>';
    $html .= '<td>' . $Ejecutivo . '</td></tr>';   

        $z++;
       $wget++;

}




/*************************************************************************************/




$html .= '</table>';


 $html .= '<br><br>';
    $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
    $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
    $time = $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ." ".date('h:i:s A')."" ;
    
    //strftime('%A %d de %B del %Y');
    $html.= '<center>Documento generado el dia '.$time.'</center></div>';






$pdf->writeHTMLCell($w = 0, $h = 0, $x = '', $y = '', $html, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = 'C', $autopadding = true);
$pdf->Output('Reporte.pdf', 'I');
?>







