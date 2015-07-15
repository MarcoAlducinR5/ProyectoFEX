<!DOCTYPE html>
<html lang="en">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <meta name="robots" content="no-cache" />
    <meta name="keywords" content="emprendimiento" />
    <meta name="robots" content="no-cache" />

   

  <head>



    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Raleway:300,200,100" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" rel="stylesheet" type="text/css">
    <link href="<?=base_url('application/assets/lib/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url('application/assets/lib/font-awesome/css/font-awesome.min.css')?>">
    
    <link rel="stylesheet" type="text/css" href="<?=base_url('application/assets/lib/jquery.nanoscroller/css/nanoscroller.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('application/assets/lib/jquery.niftymodals/css/component.css')?>"/>
    <link rel="stylesheet" type="text/css" href="<?=base_url('application/assets/lib/jquery.crop/css/jquery.Jcrop.css')?>"/>
    <link rel="stylesheet" type="text/css" href="<?=base_url('application/assets/lib/jquery.datatables/plugins/bootstrap/3/dataTables.bootstrap.css')?>"/>
    <link type="text/css" rel="stylesheet" href="<?=base_url('application/assets/css/style.css')?>">








    <script type="text/javascript" src="<?= base_url('application/assets/lib/jquery/jquery.min.js')?>"></script>
    <script type="text/javascript" src="<?= base_url('application/assets/lib/jquery.nanoscroller/javascripts/jquery.nanoscroller.js')?>"></script>
    <script type="text/javascript" src="<?= base_url('application/assets/js/cleanzone.js')?>"></script>
    <script src="<?=base_url('application/assets/lib/bootstrap/dist/js/bootstrap.min.js')?>"></script>
    <script src="<?=base_url('application/assets/js/voice-recognition.js')?>"></script>
    <script src="<?=base_url('application/assets/lib/jquery.niftymodals/js/jquery.modalEffects.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('application/assets/lib/jquery.crop/js/jquery.Jcrop.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('application/assets/lib/jquery.sparkline/jquery.sparkline.min.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('application/assets/lib/jquery-ui/jquery-ui.min.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('application/assets/lib/jquery.upload/js/jquery.iframe-transport.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('application/assets/lib/jquery.upload/js/jquery.fileupload.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('application/assets/js/page-profile.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('application/assets/js/page-charts.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('application/assets/lib/jquery.easypiechart/jquery.easypiechart.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('application/assets/lib/jquery.flot/jquery.flot.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('application/assets/lib/jquery.flot/jquery.flot.pie.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('application/assets/lib/jquery.flot/jquery.flot.resize.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('application/assets/js/page-charts.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('application/assets/lib/jquery.datatables/js/jquery.dataTables.min.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('application/assets/lib/jquery.datatables/plugins/bootstrap/3/dataTables.bootstrap.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('application/assets/js/page-data-tables.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('application/assets/lib/jquery.niftymodals/js/jquery.modalEffects.js')?>" type="text/javascript"></script> 
     <script type="text/javascript"  src="<?=base_url('application/js/main.js')?>"></script> 


<script type="text/javascript">
      $(document).ready(function(){
        //initialize the javascript
        App.init();
        App.dataTables();
      });
      
    </script>
    
  </head>
  <body class="sticky-header">
  <section>

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


    <div id="head-nav" class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid" id='leftcontenido'>
        <div class="navbar-header">
            <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle">
                <span class="fa fa-gear"></span>
            </button>
            <a href="<?=base_url()?>" class="navbar-brand"><span>FEX</span></a>
        </div>
        <div class="navbar-collapse collapse">
          
          <ul class="nav navbar-nav navbar-right user-nav">
            <li class="dropdown profile_menu"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><span><?=$nombre;?></span><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?=base_url('index.php/reportecontrolador')?>"><i class="fa fa-cog"></i> 
                    Sugerencias y reportes del sistema </a></li>
                <li><a href="" data-toggle="modal"  data-target="#basicModal">
                    <i class="fa fa-sign-out"></i> Versión del sistema
                </a></li>
                
                <li class="divider"></li>
                <li><a href="<?=base_url('index.php/sessioncontroller/logout')?>"><i class="fa fa-sign-out"></i> Salir</a></li>
              </ul>
            </li>
          </ul>
          
        </div>
      </div>
    </div>
    
    <div id="cl-wrapper">
   
            
            <div class="cl-sidebar">
              <div class="cl-toggle"><i class="fa fa-bars"></i></div>
              <div class="cl-navblock">
                <div class="menu-space">
                  <div class="content">
                    <div class="side-user">
                      <div class="info">
                        
                      </div>
                    </div>
                   
                    <ul class="nav nav-pills nav-stacked custom-nav">
                            <?php echo $menu;  ?>
                    </ul>
                    
                  </div>
                  
                </div>
                
              </div>
            </div>
        <div id="pcont" class="container-fluid ">
          <div class="page-head">
            <h2><small><?=$titulo;?></small></h2>
            
          </div>
            <div class="cl-mcont">

                    <div class="header-section">

            
                
           </div>
        
        
            