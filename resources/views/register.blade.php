<!DOCTYPE html>
<html>
<head>
	<title>SICIPAED | Plataforma Web </title>
	<link rel="stylesheet"  href="{{asset('bootstrap-3.3.7/css/bootstrap.min.css')}}" />
    <link rel="stylesheet"  href="{{asset('css/main.css')}}" />
    <link rel="stylesheet"  href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}" />
</head>
<body>


 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}">SICIPAED</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <!--<ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>-->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('/registro') }}"><span class="glyphicon glyphicon-edit"></span> &nbsp;Regístrate</a></li>
        <li><a href="{{ url('/ingresar') }}"><span class="glyphicon glyphicon-log-in"></span> &nbsp;Ingresar</a></li>
        <!--<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>-->
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



<br>

<div class="col-md-5 center-block quitarfloat ">

<center>
<h1>Regístrate <span class="glyphicon glyphicon-edit"></span> </h1>

<h5>Ya tienes cuenta <a href="{{ url('/ingresar') }}">Inicia Sesión</a></h5>
</center>
<hr>

	<div style="color: #5a5a5a;">

  @if(Session::has('message-error'))
    <div class="alert alert-danger alert-dismissible" role="alert">
      <button style="color:red !important;" type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <center><span class="glyphicon glyphicon-lock"></span> &nbsp;{{Session::get('message-error')}}</center>
    </div>
  @endif


  {!!Form::open(['route'=>'users.store', 'method'=>'POST'])!!}

	<div class="form-group">
	<label>Nombre de Usuario</label>
	<input type="text" name="name" class="form-control" placeholder="Nombre de Usuario" required>
    @if($errors->has('name'))
      <span style="color: red; margin:0px; padding: 0px;">* {{ $errors->first('name') }}</span>
    @endif
	</div>
    
	<div class="form-group">
	<label>Correo Electrónico</label>
	<input type="email" name="email" class="form-control" placeholder="Correo Electrónico" required>
    @if($errors->has('email'))
      <span style="color: red; margin:0px; padding: 0px;">* {{ $errors->first('email') }}</span>
    @endif
	</div>

	<div class="form-group">
	<label>Contraseña</label>
	<input type="password" name="password" class="form-control" placeholder="Contraseña" required>
    @if($errors->has('password'))
      <span style="color: red; margin:0px; padding: 0px;">* {{ $errors->first('password') }}</span>
    @endif
	</div>

    

	<div class="form-group">
	<label>Confirmar contraseña</label>
	<input type="password" name="mypassword" class="form-control" placeholder="Confirmar contraseña" required>
    @if($errors->has('mypassword'))
      <span style="color: red; margin:0px; padding: 0px;">* {{ $errors->first('mypassword') }}</span>
    @endif
	</div>

	<div class="form-group">
		<input type="checkbox" name="" checked><span> Acepto Términos y Condiciones</span>
	</div>

	<div class="form-group">
		<a href="{{url('/')}}" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Cancelar</a>
		<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Registrarse</button>
	</div>

  {!!Form::close()!!}

	</div>

	<hr>

	<center>
	<span>Valoramos tu <a href="">privacidad</a> como si fuera la nuestra.</span> <br>
	<span>Ante cualquier duda, nuestros <a href="">Términos de Servicio.</a></span>
	</center>

</div>



	<script src="{{asset('jquery-3.1.1/jquery-3.1.1.min.js')}}"></script>
  <script src="{{asset('bootstrap-3.3.7/js/bootstrap.min.js')}}"></script>

  <script type="text/javascript">
    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
  </script>

</body>
</html>