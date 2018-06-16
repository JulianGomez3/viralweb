<?php $usuario = app('request')->user() ?>
<div class="container-fluid">
    <div class="navbar-header">
      <a href="/Inicio">
        <ul style="list-style: none; margin: 0px; padding: 0px">
          <li style="float:left"><img style="max-width: 50px" src="img/logo_corto.png"></li>
          <li style="float:left"> <h1 class="titulo" style="color: white; padding: 6px; margin: 0px"> VIRAL </h1></li>
        </ul>    
        
      </a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav" style="float: right; margin:0px 10px 0px 10px;">

        <li><a class="iluminar" href="/Inicio">Inicio</a></li>
        <li><a class="iluminar" href="/Historia">¿Quienes somos?</a></li>
        <li><a class="iluminar" href="/Miembros">Miembros</a></li>
        
        @if(!empty($usuario))
           @if($usuario->tipo =='2')
              <li><a class="iluminar" href="/Administrador">Administrar</a></li>              
           @else
              <li><a class="iluminar" href="/Perfil"> Perfil</a></li>
           @endif
           <li><a class="iluminar" href="/Logout"> Logout</a></li>
        @else
           <li><a class="iluminar" href="/Login">Login</a></li>
        @endif
      </ul>
    </div>      
  </div>