

<?php
include("../libraries/fonts/times.php"); //tcpdf
include("../libraries/config/lang/spa.php"); //tcpdf
//$this->load->library('tcpdf'); //tcpdf
 
//*************
ob_end_clean(); //rompimiento de pagina
//*************
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
 
// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Ubcubo.com');
$pdf->SetTitle('Reporte General');
//$pdf->SetTitle('codigoweblibre.comli.co - codigoweblibre.wordpress.com');
$pdf->SetSubject('PDF');
$pdf->SetKeywords('Reporte Operativo');
 
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
 
//set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$pdf->setPageOrientation('P');
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
 
setlocale(LC_ALL,"es_ES");
// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->setPrintHeader(false); //no imprime la cabecera ni la linea
$pdf->setPrintFooter(true); // imprime el pie ni la linea
$pdf->AddPage();
 
$i = 0;
$tipo_documento = "";
$style = "";
$html = "";
$html = "<div class='col-lg-6'>";
$html = '<h2 style="text-align:center"><font color="#000000">Reporte General</font></h2>';
$html .= '<table align="center" border="1" cellspacing="2" cellpadding="2">';
$html .='<tr style=" text-align: center;">
    <th width="50%">Total de clientes en el sistema</th>
    <th width="25%">' . $totalclientes . '</th>
    <th width="25%">100.00 %</th>
    </tr>';
// ---------------------------------------------------------
    
    $html .= '<tr ' . $style . '><td style="text-align: center;">Personas Fisicas</td>';
    $html .= '<td style="text-align: center;">' . $numeropersonasfisicas . '</td>';
    $html .= '<td style="text-align: center;">'.$porcentajeClientesFisicos.' %</td></tr>';    
    $html .= '<tr ' . $style . '><td style="text-align: center;">Personas Morales</td>';
    $html .= '<td style="text-align: center;">' . $numeropersonamoral . '</td>';
    $html .= '<td style="text-align: center;">'.$porcentajeClientesMorales.' %</td></tr>'; 
    $html .= '</table></div>';
    $html .= '<br><br>';
    $html .= '<table border="1" cellspacing="2" cellpadding="2">';
    $html .='<tr style=" text-align: center;">
    <th width="50%">Total de expedientes en el sistema</th>
    <th width="25%">' . $TotalExpedientes . '</th>
    <th width="25%">100.00 %</th>
    </tr>';
    $html .= '<tr ' . $style . '><td style="text-align: center;">Personas Fisicas</td>';
    $html .= '<td style="text-align: center;">' . $ExpedientesPersonasFisicas . '</td>';
    $html .= '<td style="text-align: center;">'.$porcentajeExpedientesFisicos.' %</td></tr>';       
    $html .= '<tr ' . $style . '><td style="text-align: center;">Personas Morales</td>';
    $html .= '<td style="text-align: center;">' . $ExpedientesPersonasMorales . '</td>';
    $html .= '<td style="text-align: center;">'.$porcentajeExpedientesMorales.' %</td></tr>';      
    $html .= '</table></div>';

    $html .= '<br><br>';
    
    $html .= '<table border="1" cellspacing="2" cellpadding="2">';
    $html .='<tr style="text-align: center;">
    <th width="50%">Total de sin omisiones en el sistema</th>
    <th width="25%">' . $Otro_TotalSinOmisiones . '</th>
    <th width="25 %">100.00 %</th>
    </tr>';
    $html .= '<tr ' . $style . '><td style="text-align: center;">Personas fisicas</td>';
    $html .= '<td style="text-align: center;">' . $Otro_omisionesfi . '</td>';
    $html .= '<td style="text-align: center;">' . $porcentajeOtro_omisionesfi . '%</td></tr>';      
    $html .= '<tr ' . $style . '><td style="text-align: center;">Personas morales</td>';
    $html .= '<td style="text-align: center;">'.$Otro_omisionesmorales.'</td>';
    $html .= '<td style="text-align: center;">' . $porcentajeOtro_omisionesmorales     . '%</td></tr>';    
    $html .= '</table></div>';
    $html .= '<br><br>';

    $html .= '<br><br>';
    $html .= '<table border="1" cellspacing="2" cellpadding="2">';
    $html .='<tr style="text-align: center;">
    <th width="50%">Total de omisiones en el sistema</th>
    <th width="25%">' . $TotalSinOmisiones . '</th>
    <th width="25 %">100.00 %</th>
    </tr>';
    $html .= '<tr ' . $style . '><td style="text-align: center;">Personas fisicas</td>';
    $html .= '<td style="text-align: center;">' . $omisionesfi . '</td>';
    $html .= '<td style="text-align: center;">' . $porcentajeSinOmisionesFisicos . '%</td></tr>';      
    $html .= '<tr ' . $style . '><td style="text-align: center;">Personas morales</td>';
    $html .= '<td style="text-align: center;">'.$omisionesmorales.'</td>';
    $html .= '<td style="text-align: center;">' . $porcentajeSinOmisionesMorales     . '%</td></tr>';    
    $html .= '</table></div>';
    $html .= '<br><br>';

    $html .= '<table border="1" cellspacing="2" cellpadding="2">';
    $html .='<tr style="text-align: center;">
    <th width="50%">Total de omisiones graves en el sistema</th>
    <th width="25%">' . $TotalOGRAVES . '</th>
    <th width="25%">100.00 %</th>
    </tr>';
    $html .= '<tr ' . $style . '><td style="text-align: center;">Personas Fisicas</td>';
    $html .= '<td style="text-align: center;">' . $numeroOGRAVESfisicas . '</td>';
    $html .= '<td style="text-align: center;">'.$porcentajeAlertasFisicos.' %</td></tr>';        
    $html .= '<tr ' . $style . '><td style="text-align: center;">Personas Morales</td>';
    $html .= '<td style="text-align: center;">' . $numeroOGRAVESmorales . '</td>';
    $html .= '<td style="text-align: center;">'.$porcentajeAlertasMorales.' %</td></tr>';    
    $html .= '</table></div>';
    $html .= '<br><br>';
    
    $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
    $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
    $time = $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ." ".date('h:i:s A')."" ;
    
    //strftime('%A %d de %B del %Y');
    $html.= '<center>Documento generado el dia '.$time.'</center></div>';

$pdf->writeHTMLCell($w = 0, $h = 0, $x = '', $y = '', $html, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = 'C', $autopadding = true);
$pdf->Output('Reporte.pdf', 'I');
?>