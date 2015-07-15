<script src="<?=base_url('application/js/sha1.js'); ?>"></script>
<script type="text/javascript" src="<?=base_url('application/js/home/iniciosession/iniciosession.js')?>"></script>

<script type="text/javascript" src="<?=base_url('application/js/recuperapassword/recuperaPassword.js')?>"></script>

<br><br><br><br><br><br>
<div class='row'>

        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-5 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info">
                       

                    <div style="padding-top:30px" class="panel-body">

                      <!--**************************************************************************************-->

<div id="cl-wrapper" class="login-container">
      <div class="middle-login">
        <div class="block-flat">
          <div class="header">
            <h3 class="text-center">
              <img src="<?=base_url('assets/img/logo.png')?>" alt="logo" class="logo-img">FEX
            </h3>
          </div>
          <div>
            <!--<form style="margin-bottom: 0px !important;" action="index.html" class="form-horizontal">-->
            <form id="in" method="post" action="">
              <fieldset>
                  <div class="content">
                    <h4 class="title">Acceso</h4>
                    <div class="form-group">
                      <div class="col-sm-12">
                        <label class='title'><strong>Usuario</strong></label> 
                        <div class="input-group"><span class="input-group-addon"><i class="fa fa-user"></i></span>
                          <input type="mail" name='mail' id="mail" placeholder="Usuario" aria-describedby="basic-addon1" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-12">
                        <label class='title'><strong>Password</strong></label>
                        <input type='hidden' name='secret' id="secret">
                        <div class="input-group"><span class="input-group-addon"><i class="fa fa-lock"></i></span>
                          <input name='pw' id="pw" aria-describedby="basic-addon1" type="password" placeholder="Password" class="form-control">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="foot">
                      <label class="label">No recuerdo mi contraseña</label>
                      <div class="">
                        <div style="float:right; font-size: 80%; position: relative; top:-10px">
                          <div class='col-sm-6 col-md-2'></div>

                           <a data-toggle="modal" class='col-sm-6 col-md-12' href="#myModal">
                            Recuperar contraseña</a>
                           
                      </div>
                    </div>  
                      <!-- <button role="button" class="btn btn-default">
                          <a data-toggle="modal" href="#myModal" >
                              Recuperar contraseña
                          </a>
                      </button> -->
                      <button role="button" id="inbutton" class='btn btn-primary'>Empezar ahora</button>
                  </div>
                  <center><label class='' id="reportesession"></label></center>
              </fieldset>
            </form>
            
          </div>
        </div>
        
      </div>
    </div>

                    </div>
            </div>
        </div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


 <!--********************************************************************************************+***** -->
 <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Olvidaste tu contraseña?</h4>
                    </div>
                    <div class="modal-body">
                        <p>Ingresa tu correo electrónico y tu contraseña será enviada a el</p>
                        <input type="text" id="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
                        <br>
                        <div id="divPass"></div>
                        <div id="divContr"></div>
                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
                        <button class="btn btn-primary" type="button" id="enviar">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->