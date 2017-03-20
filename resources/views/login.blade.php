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
<h1><span class="glyphicon glyphicon-log-in"></span> Ingresar</h1>

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

  {!!Form::open(['route'=>'log.store', 'method'=>'POST'])!!}

	<div class="form-group has-feedback">
	<label> Email </label>
	<input type="emil" name="email" class="form-control" placeholder="Ingresar email" required />
  <span class="fa fa-user fa-lg form-control-feedback" style="margin-top: 10px;"></span> 
    @if($errors->has('email'))
      <span style="color: red; margin:0px; padding: 0px;">* {{ $errors->first('email') }}</span>
    @endif
	</div>

  <div class="form-group has-feedback">
  <label> Contraseña </label>
  <input type="password" name="password" class="form-control" placeholder="*********************" required />
  <span class="fa fa-lock fa-lg form-control-feedback" style="margin-top: 10px;"></span> 
    @if($errors->has('password'))
      <span style="color: red; margin:0px; padding: 0px;">* {{ $errors->first('password') }}</span>
    @endif
  </div>


	

	<div class="form-group">
		<input type="checkbox" name="" checked><span> Recordar mi contraseña</span>
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-primary btn-block"> <span class="glyphicon glyphicon-check"></span> Iniciar Sesión</button>
	</div>

  {!!Form::close()!!}

	</div>

	<hr>

	<div style="text-align: right;margin-bottom: 10px;">
  <p><span class="pull-left" style="color: #337ab7;">¿Aún no tienes cuenta?</span></p> ¿Olvidaste tu <a href="">Contraseña?</a>

  </div>

  <div style="text-align: right;">
  <a href="{{ url('/registro') }}" class="btn btn-danger pull-left">Regístrate aquí &nbsp;<span class="glyphicon glyphicon-edit"></span></a>  <a href=""> <span class="glyphicon glyphicon-phone"></span> Plataforma Web SICIPAED </a>
  </div>


</div>

	  <script src="{{asset('jquery-3.1.1/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('bootstrap-3.3.7/js/bootstrap.min.js')}}"></script>

    <script type="text/javascript">
    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
    </script>

</body>
</html>