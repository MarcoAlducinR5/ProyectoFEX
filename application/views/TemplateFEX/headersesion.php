<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="<?=base_url('images/favicon.png')?>">
    <link rel="shortcut icon" href="<?=base_url('assets/img/favicon.png')?>">

  <title><?=$titulo;?></title>

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Raleway:300,200,100" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" rel="stylesheet" type="text/css">
    <link href="<?=base_url('assets/lib/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/lib/font-awesome/css/font-awesome.min.css')?>">
    
    <link rel="stylesheet" href="<?=base_url('application/css/formatoTablas.css')?>">
    
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/lib/jquery.nanoscroller/css/nanoscroller.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/lib/jquery.niftymodals/css/component.css')?>"/>
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/lib/jquery.crop/css/jquery.Jcrop.css')?>"/>
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/lib/jquery.datatables/plugins/bootstrap/3/dataTables.bootstrap.css')?>"/>
    <link type="text/css" rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">
  
 <script type="text/javascript" src="<?= base_url('assets/lib/jquery/jquery.min.js')?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/lib/jquery.nanoscroller/javascripts/jquery.nanoscroller.js')?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/cleanzone.js')?>"></script>
    <script src="<?=base_url('assets/lib/bootstrap/dist/js/bootstrap.min.js')?>"></script>
    <script src="<?=base_url('assets/js/voice-recognition.js')?>"></script>
    <script src="<?=base_url('assets/lib/jquery.niftymodals/js/jquery.modalEffects.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/lib/jquery.crop/js/jquery.Jcrop.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/lib/jquery.sparkline/jquery.sparkline.min.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/lib/jquery-ui/jquery-ui.min.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/lib/jquery.upload/js/jquery.iframe-transport.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/lib/jquery.upload/js/jquery.fileupload.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/js/page-profile.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/js/page-charts.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/lib/jquery.easypiechart/jquery.easypiechart.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/lib/jquery.flot/jquery.flot.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/lib/jquery.flot/jquery.flot.pie.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/lib/jquery.flot/jquery.flot.resize.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/js/page-charts.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/lib/jquery.datatables/js/jquery.dataTables.min.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/lib/jquery.datatables/plugins/bootstrap/3/dataTables.bootstrap.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/js/page-data-tables.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/lib/jquery.niftymodals/js/jquery.modalEffects.js')?>" type="text/javascript"></script> 
    <script type="text/javascript"  src="<?=base_url('application/js/main.js')?>">
     </script> 
    <script type="text/javascript" src="<?=base_url('application/js/jsapi.js')?>" ></script>
  
<script type="text/javascript"> 
    $(document).ready(function(){
        //initialize the javascript
        App.init();
        App.dataTables(12);
        App.pageProfile();
        App.charts();
        $('.md-trigger').modalEffects();
            ////////////eventos de expedientes///////////////
        $("#frminformacion").submit(function() {
              var formulario=$("#frminformacion").serializeArray();
                $.ajax({
                    type: "post",
                    dataType: 'json',
                    url: "get_Insert_formularios",
                    data: formulario,
        })
                //return false;
    });        
    $(document).on('click','#editar',function(){
        var id= $(this).attr('data-id');
        var persona=$(this).attr('data-persona');
        var action =$(this).attr('data-edit');
        params={};
        console.log(params.id=id);
        console.log(params.persona=persona);
        console.log(params.action=action);
        $('.modal-body').load('get_Formulario_update', params,function(){
         
            })  
    })
    $(document).on('click','#new',function(){
        var persona=$(this).attr('data-persona');
        var action =$(this).attr('data-new');
        params={};
        params.persona=persona;
        $('.modal-body').load('get_Formulario_nuevo', params,function(){
         
        })  
      
    })
    $(document).on('click','#new_moral',function(){
        var persona=$(this).attr('data-persona');
        var action =$(this).attr('data-new');
        params={};
        params.persona=persona;
        $('.modal-body').load('get_Formulario_nuevo', params,function(){
         
        })  
    }) 
        ///////////////fin de eventos expedientes////////////////
        //////////////Eventos Clientes CREDITO//////////////////////////
    $(document).on('click','#id_credito',function(){
        var id= $(this).attr('data-id');
        var url='mostrar_agrupacion_creditos?v='.concat(id);
        document.location=(url);
        }) 
    });

    $("#form-creditos").submit(function() {
              var formulario=$("#form-creditos").serializeArray();
              console.log('hola');
                $.ajax({
                type: "post",
                dataType: 'json',
                url: "get_Insert_credito",
                data: formulario,
        })
                //return false;
    });

    $(document).on('click','#id_credito_detalle',function(){
        var id= $(this).attr('data-id');
        var id_exp= $(this).attr('data-exp');
        var url='mostrar_detalle_credito?v='+id_exp+'&v2='+id;
        document.location=(url);
        }) 
  

     $(document).on('click','#editar_credito',function(){
        var id_credito= $(this).attr('data-idcredito');
        params={};
        console.log(params.id_credito=id_credito);
        $('#creditos').load('get_Formulario_credito_consulta', params,function(){
         
            })  
    })
//////////////EVENTO DE MOVIMIENTOS/////////77
 $("#form-movimientos").submit(function() {
              var formulario=$("#form-movimientos").serializeArray();
              console.log('hola putos');
                $.ajax({
                type: "post",
                dataType: 'json',
                url: "get_Insert_movimiento",
                data: formulario,
        })
                //return false;
    });
////////////////////////////////////////////////////////////////////////////////
$('.table').dataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.7/i18n/Spanish.json"
        },
        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "Todos"]]
});
</script>


  </body>
</html>













<div id="head-nav" class="navbar navbar-default navbar-fixed-top">
      <!-- Main Menu -->
        <?php $this->load->view('TemplateFEX/menu_arriba');?>
    </div>
 
    <div id="cl-wrapper">
    
      <div class="cl-sidebar">
        <!-- Sidebar Menu -->
          <?php $this->load->view('TemplateFEX/menu_left');?>
      </div>





<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Version del Producto</h4>
            </div>
            <div class="modal-body">
                <h3>FEX version 1.2</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <div id="masInfo" align="right">
                    <a href="<?=base_url('index.php/reportecontrolador')?>">¿Tienes alguna sugerencia o comentario?</a>
                </div>
            </div>
        </div>
    </div>
</div>


 
<div class='row'>
    <div class='col-md-12'>
        <div class="block-flat">
                <div class="header">
                  <h2><?=$titulo;?></h2>
                </div>
                <div class="content">





                
                 

