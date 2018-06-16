<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Perfil | Viral</title>
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
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">

    



  </head>



  <body class="hold-transition skin-blue sidebar-mini">

 

    <div class="wrapper">

       <nav id="nav" class="navbar navbar-default navbar-fixed-top" role="navigation">
        @include('util.navbar')
      </nav>

      <header class="main-header">

          <button href="#" class="tog" data-toggle="offcanvas">
            <span class="sr-only">Toggle navigation</span>            
          </button>
        
      </header>



<!-- ======================== INICIO DEL SIDEBAR =========================================================  -->


      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- ============== PERFIL DEL ADMIN ================= -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/adm.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Nombre del usuario</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>          

          <!-- =============== SECCIÓN DEL SIDEBAR ============== -->

          <ul class="sidebar-menu">
            <li class="header">GESTIONAR SITIO</li>
            
            <li>
              <a href="#" id="misdatos">
                <i class="fa fa-user"></i> <span>Mis datos</span>              
              </a>
            </li>
            <li>
              <a href="#" id="misarchivos"><i class="fa fa-file"></i> <span>Mis Proyectos</span></a>
            </li>


            <!-- =============== SECCIÓN DEL SIDEBAR ============== -->
            
            
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>


<!-- ======================== FIN DEL SIDEBAR ===========================================================  -->

<!-- ======================== INICIO DEL CONTENIDO ======================================================  -->

      <!-- Content Wrapper. Contains page content -->
      <div id="contenedor" class="content-wrapper" style="margin-top: 50px; padding: 20px;">

        <!-- Content Header (Page header) -->
        
      </div><!-- /.row (main row) -->




      </div><!-- /.content-wrapper -->




<!-- ============================== FOOTER =============================================================== -->

        
    <div id="foot"> </div>



    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins\jQueryUI/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>

    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>




  


    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js"></script>

   <script type="text/javascript">    
     // $("#nav").load('vistas/navbar/navbar-user.html');
    </script>
  </body>

   <script type="text/javascript">    
      $("#foot").load('vistas/footer.html');
    </script>

    <script type="text/javascript"> 

          $("#contenedor").load('vistas/datosperfil.html');
          
          $("#misdatos").click(function(event){
          $("#contenedor").load('vistas/datosperfil.html');
          });   
 
          $("#misarchivos").click(function(event){
          $("#contenedor").load('vistas/proyectos.html');
          });
    </script>

</html>
