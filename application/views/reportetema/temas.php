<table class="no-border">
    <thead class="no-border">
        <tr>
            <th style="width:55%;"></th>
            <th class="text-center">No. Exp.</th>
            <th class="text-center">%</th>
            <th class="text-center"> </th>
            <th></th>
        </tr>
    </thead>
    <tbody class="no-border-y">
        <tr>
            <th>Expedientes sin omisiones</th>
            <td class="text-center primary-emphasis" align='center' class='hidden-phone'> <?=$expsinomisiones;?> </td>
            <td align='center'><i class="fa fa-check"></i>  </td>
            <td align='center'><a href="">Ver</a> </td>
            <td align='center'><a href="">Imprimir</a></td>
        </tr>
    </tbody>
</table>

<br>

<table class="no-border">
    <thead class="no-border">
        <tr>
            <th style="width:55%;"></th>
            <th class="text-center">No. Exp.</th>
            <th class="text-center">%</th>
            <th class="text-center"> </th>
            <th></th>
        </tr>
    </thead>
    <tbody class="no-border-y">
        <tr>
            <th>Expedientes con omisiones</th>
            <td class="text-center primary-emphasis"  align='center'></td>
            <td align='center'> <i class="fa fa-check"></i></td>
            <td align='center'></td>
            <td align='center'></td>
        </tr>
        <tr>
            <td>Acta de autorización de crédito</td>
            <td class="text-center primary-emphasis"  align='center' class='hidden-phone'><?=$actaautorizacion;?> </td>
            <!-- <td align='center' ><i class="fa fa-check"></i></td> -->
            <td align='center' ><?=number_format(($actaautorizacion*100)/$sumatoriaNoGraves, 2, '.', '');?></td>
            <td align='center'><a href="<?=base_url('index.php/reportetema/ver?doc=Acta de autorización de crédito&grave=1')?>">Ver</a> </td>
            <td align='center'><a href="<?=base_url('index.php/reportetema/verPDF?doc=Acta de autorización de crédito&grave=1')?>">Imprimir</a></td>
        </tr>
        <tr>
            <td>Solicitud de crédito</td>
            <td class="text-center primary-emphasis" align='center' class='hidden-phone'> <?=$Solicitudcredito;?> </td>
            <!-- <td align='center' ><i class="fa fa-check"></i></td> -->
            <td align='center' ><?=number_format(($Solicitudcredito*100)/$sumatoriaNoGraves, 2, '.', '');?></td>
            <td   align='center'><a href="<?=base_url('index.php/reportetema/ver?doc=Solicitud de crédito&grave=0')?>">Ver</a> </td>
            <td align='center'><a href="<?=base_url('index.php/reportetema/verPDF?doc=Solicitud de crédito&grave=0')?>">Imprimir</a></td>
        </tr>
        <tr>
            <td>Carta autorización del buró de crédito</td>
            <td class="text-center primary-emphasis" align='center' class='hidden-phone'> <?=$cartaautorizacion;?> </td>
            <!-- <td align='center' ><i class="fa fa-check"></i></td> -->
            <td align='center' ><?=number_format(($cartaautorizacion*100)/$sumatoriaNoGraves, 2, '.', '');?></td>
            <td align='center'><a href="<?=base_url('index.php/reportetema/ver?doc=Carta autorización de consulta al Buró de Crédito&grave=0')?>">Ver</a> </td>
            <td align='center'><a href="<?=base_url('index.php/reportetema/verPDF?doc=Carta autorización de consulta al Buró de Crédito&grave=0')?>">Imprimir</a></td>
        </tr>
        <tr>
            <td>Reporte del buró de crédito</td>
            <td class="text-center primary-emphasis" align='center' class='hidden-phone'> <?=$reporteburo;?></td>
            <!-- <td align='center' ><i class="fa fa-check"></i></td> -->
            <td align='center' ><?=number_format(($reporteburo*100)/$sumatoriaNoGraves, 2, '.', '');?></td>
            <td align='center'><a href="<?=base_url('index.php/reportetema/ver?doc=Reporte del buró de crédito&grave=0')?>">Ver</a> </td>
            <td align='center'><a href="<?=base_url('index.php/reportetema/verPDF?doc=Reporte del buró de crédito&grave=0')?>">Imprimir</a></td>
        </tr>
        <tr>
            <td>Reporte de otras consultas al buró de crédito</td>
            <td class="text-center primary-emphasis"   align='center' class='hidden-phone'> <?=$Reporteotras;?></td>
            <!-- <td align='center' ><i class="fa fa-check"></i></td> -->
            <td align='center' ><?=number_format(($Reporteotras*100)/$sumatoriaNoGraves, 2, '.', '');?></td>
            <td align='center'><a href="<?=base_url('index.php/reportetema/ver?doc=Reporte de otras consultas al buró de crédito&grave=0')?>">Ver</a> </td>
            <td align='center'><a href="<?=base_url('index.php/reportetema/verPDF?doc=Reporte de otras consultas al buró de crédito&grave=0')?>">Imprimir</a></td>
        </tr>
        <tr>
            <td>Estudio de crédito y/o Proyecto de inversión y/o Evaluación técnica</td>
            <td class="text-center primary-emphasis" align='center' class='hidden-phone'> <?=$estudiomercado;?> </td>
            <!-- <td align='center' ><i class="fa fa-check"></i></td> -->
            <td align='center' ><?=number_format(($estudiomercado*100)/$sumatoriaNoGraves, 2, '.', '');?></td>
            <td align='center'><a href="<?=base_url('index.php/reportetema/ver?doc=Estudio de crédito y/o Proyecto de inversión y/o Evaluación técnica&grave=0')?>">Ver</a> </td>
            <td align='center'><a href="<?=base_url('index.php/reportetema/ver?docPDF=Estudio de crédito y/o Proyecto de inversión y/o Evaluación técnica&grave=0')?>">Imprimir</a></td>
        </tr>
        <tr>
            <td>Flujo de Efectivo</td>
            <td class="text-center primary-emphasis" align='center' class='hidden-phone'> <?=$flujoEfectivo;?> </td>
            <!-- <td align='center' ><i class="fa fa-check"></i></td> -->
            <td align='center' ><?=number_format(($flujoEfectivo*100)/$sumatoriaNoGraves, 2, '.', '');?></td>
            <td align='center'><a href="<?=base_url('index.php/reportetema/ver?doc=Flujo de Efectivo&grave=0')?>">Ver</a> </td>
            <td align='center'><a href="<?=base_url('index.php/reportetema/verPDF?doc=Flujo de Efectivo&grave=0')?>">Imprimir</a></td>
        </tr>
        <tr>
            <td>Reporte de Visita</td>
            <td class="text-center primary-emphasis" align='center' class='hidden-phone'><?=$reportevisita;?> </td>
            <!-- <td align='center' ><i class="fa fa-check"></i></td> -->
            <td align='center' ><?=number_format(($reportevisita*100)/$sumatoriaNoGraves, 2, '.', '');?></td>
            <td align='center'><a href="<?=base_url('index.php/reportetema/ver?doc=Reporte de Visita&grave=0')?>">Ver</a> </td>
            <td align='center'><a href="<?=base_url('index.php/reportetema/verPDF?doc=Reporte de Visita&grave=0')?>">Imprimir</a></td>
        </tr>
        <tr>
            <td>Hoja de Términos y Condiciones</td>
            <td class="text-center primary-emphasis-dark"  align='center' class='hidden-phone'> <?=$hojaterminos;?></td>
            <!-- <td align='center' ><i class="fa fa-check"></i></td> -->
            <td align='center' ><?=number_format(($hojaterminos*100)/$sumatoriaNoGraves, 2, '.', '');?></td>
            <td align='center'><a href="<?=base_url('index.php/reportetema/ver?doc=Hoja de Términos y Condiciones&grave=0')?>">Ver</a> </td>
            <td align='center'><a href="<?=base_url('index.php/reportetema/verPDF?doc=Hoja de Términos y Condiciones&grave=0')?>">Imprimir</a></td>
        </tr>
    </tbody>
</table>

<br>        

<table class="no-border">
    <thead class="no-border">
        <tr>
            <th style="width:55%;"></th>
            <th class="text-center">No. Exp.</th>
            <th class="text-center">%</th>
            <th class="text-center"> </th>
            <th></th>
        </tr>
    </thead>
    <tbody class="no-border-y">
        <tr>
            <th>Expedientes con omisiones graves</th>
            <td class="text-center primary-emphasis"  align='center'></td>
            <td align='center'> <i class="fa fa-check"></i></td>
            <td align='center'></td>
            <td align='center'></td>
        </tr>
        <tr>
            <td>Contrato de crédito</td>
            <td class="text-center primary-emphasis" align='center' class='hidden-phone'><?=$Contrato;?></td>
            <!-- <td align='center' ><i class="fa fa-check"></i></td> -->
            <td align='center' ><?=number_format(($Contrato*100)/$sumatoriaGraves, 2, '.', '');?></td>
            <td align='center'><a href="<?=base_url('index.php/reportetema/ver?doc=Contrato de crédito&grave=1')?>">Ver</a> </td>
            <td align='center'><a href="<?=base_url('index.php/reportetema/verPDF?doc=Contrato de crédito&grave=1')?>">Imprimir</a></td>
        </tr>
        <tr>
            <td>Pagarés</td>
            <td class="text-center primary-emphasis" align='center' class='hidden-phone'> <?=$pagares;?> </td>
            <!-- <td align='center' ><i class="fa fa-check"></i></td> -->
            <td align='center' ><?=number_format(($pagares*100)/$sumatoriaGraves, 2, '.', '');?></td>
            <td align='center'><a href="<?=base_url('index.php/reportetema/ver?doc=Pagarés&grave=1')?>">Ver</a> </td>
            <td align='center'><a href="<?=base_url('index.php/reportetema/verPDF?doc=Pagarés&grave=1')?>">Imprimir</a></td>
        </tr>
        <tr>
            <td>Póliza de seguro</td>
            <td class="text-center primary-emphasis" align='center' class='hidden-phone'> <?=$Poliza;?> </td>
            <!-- <td align='center' ><i class="fa fa-check"></i></td> -->
            <td align='center' ><?=number_format(($Poliza*100)/$sumatoriaGraves, 2, '.', '');?></td>
            <td align='center'><a href="<?=base_url('index.php/reportetema/ver?doc=Póliza de seguro&grave=1')?>">Ver</a> </td>
            <td align='center'><a href="<?=base_url('index.php/reportetema/verPDF?doc=Póliza de seguro&grave=1')?>">Imprimir</a></td>
        </tr>
        <tr>
            <td>Comprobación de la entrega de recursos</td>
            <td class="text-center primary-emphasis"   align='center' class='hidden-phone'> <?=$entregarecursos;?></td>
            <!-- <td align='center' ><i class="fa fa-check"></i></td> -->
            <td align='center' ><?=number_format(($entregarecursos*100)/$sumatoriaGraves, 2, '.', '');?></td>
            <td align='center'><a href="<?=base_url('index.php/reportetema/ver?doc=Comprobación de la entrega de recursos&grave=1')?>">Ver</a> </td>
            <td align='center'><a href="<?=base_url('index.php/reportetema/verPDF?doc=Comprobación de la entrega de recursos&grave=1')?>">Imprimir</a></td>
        </tr>
        <tr>
            <td>Comprobante de inversión</td>
            <td   class="text-center primary-emphasis" align='center' class='hidden-phone'> <?=$comprobanteinversion;?> </td>
            <!-- <td align='center' ><i class="fa fa-check"></i></td> -->
            <td align='center' ><?=number_format(($comprobanteinversion*100)/$sumatoriaGraves, 2, '.', '');?></td>
            <td align='center'><a href="<?=base_url('index.php/reportetema/ver?doc=Comprobante de inversión&grave=1')?>">Ver</a> </td>
            <td align='center'><a href="<?=base_url('index.php/reportetema/verPDF?doc=Comprobante de inversión&grave=1')?>">Imprimir</a></td>
        </tr>
        <tr>
            <td>Garantías</td>
            <td class="text-center primary-emphasis-dark"  align='center' class='hidden-phone'><?=$Garantias;?></td>
            <!-- <td align='center' ><i class="fa fa-check"></i></td> -->
            <td align='center' ><?=number_format(($Garantias*100)/$sumatoriaGraves, 2, '.', '');?></td>
            <td align='center'><a href="<?=base_url('index.php/reportetema/ver?doc=Garantías&grave=1')?>">Ver</a> </td>
            <td align='center'><a href="<?=base_url('index.php/reportetema/verPDF?doc=Garantías&grave=1')?>">Imprimir</a></td>
        </tr>
    </tbody>
</table>

<br>