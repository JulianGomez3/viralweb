<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Log in | VIRAL</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="fonts/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.css"> 
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>


  <body style="
    background-image: url(img/background.png); background-size: auto 90%;  
    background-repeat-y: no-repeat;  background-position: bottom; 
    background-attachment: fixed; background-position-x: 600px; background-position-y: 200px; 
    "  class="hold-transition login-page">

 

<nav id="nav" class="navbar navbar-default navbar-fixed-top" role="navigation">
  @include('util.navbar')
</nav>




    <div class="login-box" style="margin-top: 70px; margin-bottom: 50px;">

      


      <img style="max-width: 100%" src="img/logo_largo.png">

      <div class="login-box-body" >
        <legend style="text-align: center; font-size: 14px;">Inicia sesión</legend>

        <form action="autenticar" method="post">

          <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />

          <div align="center" style="margin-bottom: 8px; padding: 10px; background-color: #d6e8f1">            
            <label style="color: #363667" class="radio-inline"><input type="radio" name="optradio" value="1" checked>  Miembro</label>
            <label style="color: #363667" class="radio-inline"><input type="radio" name="optradio" value="2" >  Administrador</label>
          </div>

          <div class="form-group has-feedback">
            <input name="codigo" id="codigo" type="text" class="form-control logintextarea" placeholder="Código" style="border: 2px solid #a3c2d4; border-radius: 13px;">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>

          </div>

          <div class="form-group has-feedback" >
            <input name="clave" id="clave" type="password" class="form-control logintextarea" placeholder="Contraseña" style="border: 2px solid #a3c2d4; border-radius: 13px;">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
         
          <div class="row">                        
            <div class="col-xs-12">
              <button type="submit" class="btn btnLogin btn-primary btn-block btn-flat" style="background-image: url(img/background-box.png);">Iniciar sesión</button>
            </div><!-- /.col -->
          </div>

        </form> 

        @if(count($errors) > 0)
        <div class="alert alert-warning">
          @foreach ($errors->all() as $message)
                <li>{{ $message }}</li>
            @endforeach 
            @if(session()->has('warning'))
                <li>{{ session('warning') }}</li>
            @endif   
        </div>
        @endif
        @if(session()->has('warning'))
                <div class="alert alert-warning">
                  {{ session('warning') }}
                </div>
            @endif 
       

      </div><!-- /.login-box-body -->


    
<!--
    <div class="register-box" style="margin-top: 0px;">
      
      <div class="register-box-body ">

        <p class="login-box-msg">Registrate como miembro</p>

        <form action="../../index2.html" method="post">

          <div class="form-group has-feedback">
            <input type="text" class="form-control logintextarea" placeholder="Código">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="text" class="form-control logintextarea" placeholder="Nombre">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="email" class="form-control logintextarea" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
              <input type="password" class="form-control logintextarea" placeholder="Contraseña">
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>  
          <div class="form-group has-feedback">
              <input type="password" class="form-control logintextarea" placeholder="Repite tu contraseña">
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>  

          <div class="row">                        
            <div class="col-xs-12">
                <button type="submit" class="btn btnLogin btn-primary btn-block btn-flat">Crear cuenta</button>
            </div><!-- /.col --><!--
          </div>      
        </form>
      </div>
    </div><!-- /.Register-box --> 
    
    




    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js"></script>

    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>

    <script type="text/javascript">    
      //$("#nav").load('vistas/navbar/navbar.html');
    </script>

    <script type="text/javascript">    
      $("#foot").load('vistas/footer.html');
    </script>


  </body>
</html>
