<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Inicio | VIRAL</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
          <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Ionicons -->
    <link rel="stylesheet" href="fonts/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.css">

    
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">

  </head>



<body style="
    background-image: url(img/background.png); background-size: auto 90%;  
    background-repeat-y: no-repeat;  background-position: bottom; 
    background-attachment: fixed; background-position-x: 600px; background-position-y: 200px; 
    " class="hold-transition login-page">

  <nav id="nav" class="navbar navbar-default navbar-fixed-top" role="navigation">
    @include('util.navbar')
  </nav>

  <!-- ====================== CARROUSEL =======================================  -->

  <div id="myCarousel" class="carrusel carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
          <img src="img/banner/ban1.jpg" alt="Los Angeles">
        </div>

        <div class="item">
          <img src="img/banner/ban2.jpg" alt="Chicago">
        </div>

        <div class="item">
          <img src="img/banner/ban3.jpg" alt="New York">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
  </div>


  <!-- ===================== FIN CARROUSEL ================================= -->

  <div class="ventanacentro" style="margin-top: 0px !important;">

    <h3 class="titulopagina"> Inicio </h3>
    <div class="row">
      <div class="col-md-6">
          <h3 class="subtitulopagina" style="margin: 10px 0px;">Novedades</h3>
            <div class="row todo">

              <div class="noticia">
                <h2 style="font-style:italic">Esta es una noticia</h2>

                  <hr />
                  <p>sadjas&ntilde;da&ntilde;ls adas d{asd asda dqeqwewqeqwe qwe qeqw eqweqw qwe qweqwe qweq wqw&nbsp;</p>

                  <p>&nbsp;</p>

                  <table border="0" cellpadding="1" cellspacing="1" style="width:500px">
                    <tbody>
                      <tr>
                        <td><img alt="" src="http://static.pokemonpets.com/images/monsters-images-300-300/2025-Shiny-Pikachu.png" style="height:95px; width:100px" /></td>
                        <td>
                        <p>as asa dasd aq weeqw eqw eqwe&nbsp; qwe</p>

                        <p>wqeqweqw qwe qwe q</p>

                        <p>weqw&nbsp;</p>
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                    </tbody>
                  </table>

                  <p>&nbsp;</p>

                  <blockquote>
                  <p>opsadj&ntilde;lkasd&ntilde;lsad&ntilde;sadas wqeqw</p>
                  </blockquote>

                  <p>&nbsp;</p>

              </div> <!-- noticia -->
            </div> <!-- row todo -->
      </div> <!-- colmd6 -->


      <div class="col-md-6">
                  <!-- USERS LIST -->
                  <h3 class="subtitulopagina" style="margin: 10px 0px;"> Actividad </h3>
                  <div class="box box-primary" style="width: 100%;">
                    <div class="box-header with-border">
                      <h3 class="box-title">Miembros recientes</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>                        
                      </div>
                    </div><!-- /.box-header -->
                    <div class="box-body no-padding">
                      <ul class="users-list clearfix">
                        <li>
                          <img src="dist/img/adm.png" alt="User Image">
                          <a class="users-list-name" href="#">Nombre</a>
                          <span class="users-list-date">Today</span>
                        </li>
                        <li>
                          <img src="dist/img/adm.png" alt="User Image">
                          <a class="users-list-name" href="#">Nombre</a>
                          <span class="users-list-date">Yesterday</span>
                        </li>
                        <li>
                          <img src="dist/img/adm.png" alt="User Image">
                          <a class="users-list-name" href="#">Nombre</a>
                          <span class="users-list-date">12 Jan</span>
                        </li>
                        <li>
                          <img src="dist/img/adm.png" alt="User Image">
                          <a class="users-list-name" href="#">Nombre</a>
                          <span class="users-list-date">12 Jan</span>
                        </li>
                        <li>
                          <img src="dist/img/adm.png" alt="User Image">
                          <a class="users-list-name" href="#">Nombre</a>
                          <span class="users-list-date">13 Jan</span>
                        </li>
                        <li>
                          <img src="dist/img/adm.png" alt="User Image">
                          <a class="users-list-name" href="#">Nombre</a>
                          <span class="users-list-date">14 Jan</span>
                        </li>
                        <li>
                          <img src="dist/img/adm.png" alt="User Image">
                          <a class="users-list-name" href="#">Nombre</a>
                          <span class="users-list-date">15 Jan</span>
                        </li>
                        <li>
                          <img src="dist/img/adm.png" alt="User Image">
                          <a class="users-list-name" href="#">Nombre</a>
                          <span class="users-list-date">15 Jan</span>
                        </li>
                      </ul><!-- /.users-list -->
                    </div><!-- /.box-body -->
                    <div class="box-footer text-center">
                      <a href="/Miembros" class="uppercase">Ver todos</a>
                    </div><!-- /.box-footer -->
                  </div><!--/.box -->


                <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Proyectos recientes</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <ul class="products-list product-list-in-box">
                    <li class="item">
                      <div class="product-img">
                        <img src="img/proyectos/preparetodie.jpg" alt="Product Image">
                      </div>
                      <div class="product-info">
                        <a href="javascript::;" class="product-title">Prepare to Die <span class="label label-success pull-right">Version 1.0</span></a>
                        <span class="product-description">
                          Descripción del videojuego - Desarrollado por Nicola Di Candia
                        </span>
                      </div>
                    </li><!-- /.item -->
                    <li class="item">
                      <div class="product-img">
                        <img src="img/proyectos/reciclo.png" alt="Product Image">
                      </div>
                      <div class="product-info">
                        <a href="javascript::;" class="product-title">Reciclo <span class="label label-info pull-right">En curso</span></a>
                        <span class="product-description">
                          Descripción del videojuego - Desarrollado por (varios)
                        </span>
                      </div>
                    </li><!-- /.item -->
                    <li class="item">
                      <div class="product-img">
                        <img src="img/proyectos/nafree404.jpg" alt="Product Image">
                      </div>
                      <div class="product-info">
                        <a href="javascript::;" class="product-title">NaFree404<span class="label label-info pull-right">En curso</span></a>
                        <span class="product-description">
                          Descripción del videojuego - Desarrollado por (varios)
                        </span>
                      </div>                      
                    </li><!-- /.item -->   
                    <li class="item">
                      <div class="product-img">
                        <img src="img/proyectos/viralspace.png" alt="Product Image">
                      </div>
                      <div class="product-info">
                        <a href="javascript::;" class="product-title">Viral Space<span class="label label-success pull-right">Nueva version</span></a>
                        <span class="product-description">
                          Descripción del videojuego - Desarrollado por Jota pé
                        </span>
                      </div>

                  </ul>
                </div><!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="javascript::;" class="uppercase">Ver todos</a>
                </div><!-- /.box-footer -->
              </div><!-- /.box -->


                </div><!-- /.col -->




    </div> <!-- row -->

        
      </div>


<!--
  <img class="logo-main" src="img/logo_largo.png">

  <div class="grupo-cuadros">

    <a href="/Historia">
      <div class="cuadro-btn  iluminarbox">
        <div class="texto-cuadro">
          <h2> ¿Quienes somos?</h2>
            Historia - Fundadores - Logros
        </div>
      </div>
    </a>
    <a href="/Miembros">
      <div class="cuadro-btn iluminarbox">
        <div class="texto-cuadro">
          <h2> Miembros </h2>
          Miembros del semillero
        </div>
      </div>
    </a>
    <a href="/Login">
      <div class="cuadro-btn iluminarbox">      
      <div class="texto-cuadro">
        <h2> Login</h2>
        Inicia sesión o registrate 
      </div>
    </div>
    </a>
    
    </div>
    -->





       

    <!-- ==================FOOTER=================================================== -->   
    <div id="foot" style="bottom: 0px;"> </div>









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
      //$("#nav").load('vistas/navbar/navbar.html');
    </script>

    <script type="text/javascript">    
      $("#foot").load('vistas/footer.html');
    </script>



</body>





  </html>