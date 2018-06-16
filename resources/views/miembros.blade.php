<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Miembros | VIRAL</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
          <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Ionicons -->
    <link rel="stylesheet" href="fonts/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">

  </head>



<body style="
    background-image: url(img/background.png); background-size: auto 90%;  
    background-repeat-y: no-repeat;  background-position: bottom; 
    background-attachment: fixed; background-position-x: 600px; background-position-y: 200px; 
    "  class="hold-transition login-page">

    <nav id="nav" class="navbar navbar-default navbar-fixed-top" role="navigation">
      @include('util.navbar')
    </nav>


    <div class="ventanacentro">


        <h3 class="titulopagina">Miembros</h3>



        <div class="row todo">

            <!-- ========================== WIDGET DE MIEMBRO ========================================== -->

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <!-- Widget: user widget style 1 -->
                <div class="box box-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-blue bannerbutton">
                      <div class ="widget-user-image">
                        <img class ="img-circle" src="dist/img/adm.png" alt="User Avatar">
                      </div><!-- /.widget-user-image -->
                      <h3 style="font-weight: 400;" class ="widget-user-username">Denis Patricio Gonzales</h3>
                      <h5 style="color: #adc4c7" class ="widget-user-desc">Lider del semillero</h5>
                    </div>

                <!-- Información del usuario -->

                    <div class="box-footer no-padding">
                      <ul class="nav nav-stacked">
                        <li><a href="#">Estado <span class="pull-right badge bg-blue">Activo</span></a></li>        
                        <li><a href="#">Proyectos <span class="pull-right badge bg-green">6</span></a></li>
                        <li><a href="#">Fecha de ingreso <span class="pull-right badge">12/03/2015</span></a></li>
                      </ul>
                    </div>

                  <!-- ========Barras de poder ============ -->  
                

                    <div class="box box-solid">
                        <div class="box-header with-border">
                          <h3 class="box-title"><b>Perfil de habilidades</b></h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                           <div> Historia</div>
                           <div class="progress">
                             <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                              <span class="sr-only">40% Complete (success)</span>
                            </div>
                           </div>
                          <div> Diseño </div>
                          <div class="progress"> 
                            <div class="progress-bar progress-bar-aqua" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                              <span class="sr-only">80% Complete</span>
                            </div>
                          </div>
                          <div> Programación </div>
                          <div class="progress">
                            <div class="progress-bar progress-bar-yellow" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                              <span class="sr-only">90% Complete (warning)</span>
                            </div>
                          </div>
                          <div> Arte gráfica </div>
                          <div class="progress">
                            <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 35%">
                              <span class="sr-only">80% Complete</span>
                            </div>
                          </div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->                         
                </div><!-- /.col (right) -->                
            </div><!-- /.widget-user -->

            <!-- ========================== WIDGET DE MIEMBRO ========================================== -->

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <!-- Widget: user widget style 1 -->
                <div class="box box-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-blue bannerbutton">
                      <div class="widget-user-image">
                        <img class="img-circle" src="dist/img/adm.png" alt="User Avatar">
                      </div><!-- /.widget-user-image -->
                      <h3 class="widget-user-username">Leonardo Amaya Ovallos</h3>
                      <h5 class="widget-user-desc">Artista</h5>
                    </div>

                <!-- Información del usuario -->

                    <div class="box-footer no-padding">
                      <ul class="nav nav-stacked">
                        <li><a href="#">Estado <span class="pull-right badge bg-blue">Activo</span></a></li>        
                        <li><a href="#">Proyectos <span class="pull-right badge bg-green">3</span></a></li>
                        <li><a href="#">Fecha de ingreso <span class="pull-right badge">12/03/2015</span></a></li>
                      </ul>
                    </div>

                  <!-- ========Barras de poder ============ -->  
                

                    <div class="box box-solid">
                        <div class="box-header with-border">
                          <h3 class="box-title"><b>Perfil de habilidades</b></h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                           <div> Historia</div>
                           <div class="progress">
                             <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                              <span class="sr-only">30% Complete (success)</span>
                            </div>
                           </div>
                          <div> Diseño </div>
                          <div class="progress"> 
                            <div class="progress-bar progress-bar-aqua" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                              <span class="sr-only">30% Complete</span>
                            </div>
                          </div>
                          <div> Programación </div>
                          <div class="progress">
                            <div class="progress-bar progress-bar-yellow" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 16%">
                              <span class="sr-only">20% Complete (warning)</span>
                            </div>
                          </div>
                          <div> Arte gráfica </div>
                          <div class="progress">
                            <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                              <span class="sr-only">70% Complete</span>
                            </div>
                          </div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->                       
                </div><!-- /.col (right) -->                
            </div><!-- /.widget-user -->

            <!-- ========================== WIDGET DE MIEMBRO ========================================== -->

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <!-- Widget: user widget style 1 -->
                <div class="box box-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-blue bannerbutton">
                      <div class="widget-user-image">
                        <img class="img-circle" src="dist/img/adm.png" alt="User Avatar">
                      </div><!-- /.widget-user-image -->
                      <h3 class="widget-user-username">Edwin Snaider Parada</h3>
                      <h5 class="widget-user-desc">Artista</h5>
                    </div>

                <!-- Información del usuario -->

                    <div class="box-footer no-padding">
                      <ul class="nav nav-stacked">
                        <li><a href="#">Estado <span class="pull-right badge bg-blue">Activo</span></a></li>        
                        <li><a href="#">Proyectos<span class="pull-right badge bg-green">1</span></a></li>
                        <li><a href="#">Fecha de ingreso <span class="pull-right badge">01/04/2018</span></a></li>
                      </ul>
                    </div>

                  <!-- ========Barras de poder ============ -->  
                

                    <div class="box box-solid">
                        <div class="box-header with-border">
                          <h3 class="box-title"><b>Perfil de habilidades</b></h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                           <div> Historia</div>
                           <div class="progress">
                             <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                              <span class="sr-only">40% Complete (success)</span>
                            </div>
                           </div>
                          <div> Diseño </div>
                          <div class="progress"> 
                            <div class="progress-bar progress-bar-aqua" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                          <div> Programación </div>
                          <div class="progress">
                            <div class="progress-bar progress-bar-yellow" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                              <span class="sr-only">60% Complete (warning)</span>
                            </div>
                          </div>
                          <div> Arte gráfica </div>
                          <div class="progress">
                            <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                              <span class="sr-only">80% Complete</span>
                            </div>
                          </div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->                      
                </div><!-- /.col (right) -->                
            </div><!-- /.widget-user -->



            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <!-- Widget: user widget style 1 -->
                <div class="box box-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-blue bannerbutton">
                      <div class="widget-user-image">
                        <img class="img-circle" src="dist/img/adm.png" alt="User Avatar">
                      </div><!-- /.widget-user-image -->
                      <h3 class="widget-user-username">Carlos René Angarita</h3>
                      <h5 class="widget-user-desc">Docente</h5>
                    </div>

                <!-- Información del usuario -->

                    <div class="box-footer no-padding">
                      <ul class="nav nav-stacked">
                        <li><a href="#">Estado <span class="pull-right badge bg-blue">Activo</span></a></li>        
                        <li><a href="#">Proyectos completados <span class="pull-right badge bg-green">12</span></a></li>
                        <li><a href="#">Fecha de ingreso <span class="pull-right badge">12/03/2015</span></a></li>
                      </ul>
                    </div>

                  <!-- ========Barras de poder ============ -->  
                

                    <div class="box box-solid">
                        <div class="box-header with-border">
                          <h3 class="box-title"><b>Perfil de habilidades</b></h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                           <div> Frontend </div>
                           <div class="progress">
                             <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                              <span class="sr-only">40% Complete (success)</span>
                            </div>
                           </div>
                          <div> backend </div>
                          <div class="progress"> 
                            <div class="progress-bar progress-bar-aqua" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                          <div> recochar en la clase </div>
                          <div class="progress">
                            <div class="progress-bar progress-bar-yellow" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 99%">
                              <span class="sr-only">60% Complete (warning)</span>
                            </div>
                          </div>
                          <div> Hacer perder a los alumnos </div>
                          <div class="progress">
                            <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 99%">It's OVER 9000!!!
                              <span class="sr-only">80% Complete</span>
                            </div>
                          </div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->   
                </div><!-- /.col (right) -->                
            </div><!-- /.widget-user -->




            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <!-- Widget: user widget style 1 -->
                <div class="box box-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-blue bannerbutton">
                      <div class="widget-user-image">
                        <img class="img-circle" src="dist/img/adm.png" alt="User Avatar">
                      </div><!-- /.widget-user-image -->
                      <h3 class="widget-user-username">Julian Enrique</h3>
                      <h5 class="widget-user-desc">Desarrollador</h5>
                    </div>

                <!-- Información del usuario -->

                    <div class="box-footer no-padding">
                      <ul class="nav nav-stacked">
                        <li><a href="#">Estado <span class="pull-right badge bg-blue">Activo</span></a></li>        
                        <li><a href="#">Proyectos <span class="pull-right badge bg-green">1</span></a></li>
                        <li><a href="#">Fecha de ingreso <span class="pull-right badge">12/03/2015</span></a></li>
                      </ul>
                    </div>

                  <!-- ========Barras de poder ============ -->  
                

                    <div class="box box-solid">
                        <div class="box-header with-border">
                          <h3 class="box-title"><b>Perfil de habilidades</b></h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                           <div> Historia</div>
                           <div class="progress">
                             <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                              <span class="sr-only">30% Complete (success)</span>
                            </div>
                           </div>
                          <div> Diseño </div>
                          <div class="progress"> 
                            <div class="progress-bar progress-bar-aqua" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                              <span class="sr-only">30% Complete</span>
                            </div>
                          </div>
                          <div> Programación </div>
                          <div class="progress">
                            <div class="progress-bar progress-bar-yellow" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                              <span class="sr-only">20% Complete (warning)</span>
                            </div>
                          </div>
                          <div> Arte gráfica </div>
                          <div class="progress">
                            <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 5%">
                              <span class="sr-only">70% Complete</span>
                            </div>
                          </div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->   
                </div><!-- /.col (right) -->                
            </div><!-- /.widget-user -->



            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <!-- Widget: user widget style 1 -->
                <div class="box box-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-blue bannerbutton">
                      <div class="widget-user-image">
                        <img class="img-circle" src="dist/img/adm.png" alt="User Avatar">
                      </div><!-- /.widget-user-image -->
                      <h3 class="widget-user-username">Nicola Di Candia</h3>
                      <h5 class="widget-user-desc">Diseñador de niveles</h5>
                    </div>
                <!-- Información del usuario -->
                    <div class="box-footer no-padding">
                      <ul class="nav nav-stacked">
                        <li><a href="#">Estado <span class="pull-right badge bg-blue">Activo</span></a></li>        
                        <li><a href="#">Proyectos<span class="pull-right badge bg-green">1</span></a></li>
                        <li><a href="#">Fecha de ingreso <span class="pull-right badge">15/03/2016</span></a></li>
                      </ul>
                    </div>
                  <!-- ========Barras de poder ============ --> 
                
                    <div class="box box-solid">
                        <div class="box-header with-border">
                          <h3 class="box-title"><b>Perfil de habilidades</b></h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                           <div> Historia</div>
                           <div class="progress">
                             <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                              <span class="sr-only">40% Complete (success)</span>
                            </div>
                           </div>
                          <div> Diseño </div>
                          <div class="progress"> 
                            <div class="progress-bar progress-bar-aqua" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                          <div> Programación </div>
                          <div class="progress">
                            <div class="progress-bar progress-bar-yellow" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                              <span class="sr-only">60% Complete (warning)</span>
                            </div>
                          </div>
                          <div> Arte gráfica </div>
                          <div class="progress">
                            <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                              <span class="sr-only">80% Complete</span>
                            </div>
                          </div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->                      
                </div><!-- /.col (right) -->                
            </div><!-- /.widget-user -->



        </div><!-- /.col -->
    </div>


    <div id="foot"></div>







    





    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins\jQueryUI/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>

      <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>




  


    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js"></script>

   <script type="text/javascript">    
      //$("#nav").load('vistas/navbar/navbar.html');
    </script>

    <script type="text/javascript">    
      $("#foot").load('vistas/footer.html');
    </script>


</body>





  </html>