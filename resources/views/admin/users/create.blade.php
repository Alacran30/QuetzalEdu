<!DOCTYPE html>
<html>
<head>
	<title>SICIPAED | Plataforma Web </title>
	<link rel="stylesheet"  href="{{asset('bootstrap-3.3.7/css/bootstrap.min.css')}}" />
    <link rel="stylesheet"  href="{{asset('css/main.css')}}" />
    <link rel="stylesheet"  href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}" />
</head>
<body>
 <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="{{asset('img/logotipo.png')}}" title="QuetzalEdu"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="{{ route('users.index') }}"> <span class="fa fa-users"> &nbsp;USUARIOS</span> </a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">

        <li><a href="{{ url('/registro') }}"><span class="glyphicon glyphicon-user"></span> {!!Auth::user()->id_tipo !!} | &nbsp;{!!Auth::user()->username !!}</a></li>
        
                <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span> <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#"><span class="glyphicon glyphicon-edit"></span> Editar Perfil</a></li>
		            <li><a href="#"><span class="glyphicon glyphicon-lock"></span> Cambiar Contraseña</a></li>
		            <li><a target="_blank" href="{{asset('Manual.pdf')}}"><span class="glyphicon glyphicon-file"></span> Manual de Usuario</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="{{ url('/logout') }}"><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesión</a></li>
		          </ul>
		        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<br>

<div class="container">

<div class="row">
  <div class="col-md-12">
    <h3>
      <i class="fa fa-user-plus"></i>
      Registrar Instructor
    </h3>
  </div>
</div>

<hr>


{!! Form::open(['route' => 'agregar', 'method' => 'POST']) !!}

<div class="form-group">
  
  <label>Username:</label>
  <input type="text" name="username" class="form-control">

  <label>Correo Electrónico:</label>
  <input type="email" name="email" class="form-control">

  <label>Contraseña:</label>
  <input type="password" name="password" class="form-control">

  <label>Nombre:</label>
  <input type="text" name="nombre" class="form-control">

  <label>Apellido Paterno:</label>
  <input type="text" name="paterno" class="form-control">

  <label>Apellido Materno:</label>
  <input type="text" name="materno" class="form-control">

  <br>

  <a href="{{ route('users.index') }}" class="btn btn-danger">Cancelar</a>
  <input type="submit" value="Registrar" class="btn btn-success">

</div>

{!! Form::close() !!}


</div>

  @include('flash::message')
	<script src="{{asset('jquery-3.1.1/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('bootstrap-3.3.7/js/bootstrap.min.js')}}"></script>

    <script type="text/javascript">
   $('#flash-overlay-modal').modal();
  </script>

</body>
</html>