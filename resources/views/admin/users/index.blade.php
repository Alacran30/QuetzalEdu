<!DOCTYPE html>
<html>
<head>
	<title>SICIPAED | Plataforma Web </title>
	<link rel="stylesheet"  href="{{asset('bootstrap-3.3.7/css/bootstrap.min.css')}}" />
    <link rel="stylesheet"  href="{{asset('css/main.css')}}" />
    <link rel="stylesheet"  href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}" />

    <style type="text/css">
      .action{
        margin: 5px;
      }
    </style>

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
      <i  class="fa fa-users"></i>
      Lista de Usuarios
    </h3>
  </div>
</div>

@if(Session::has('message-info'))
  <div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
      <center>
    <span class="fa fa-user"></span> 
      {{Session::get('message-info')}}
    </center>
  </div>
@endif

@include('flash::message')

<hr>

<a href="{{ route('users.create') }}" class="btn btn-success"> <i class="fa fa-user-plus"></i></span> &nbsp;Registrar Instructor</a>

<form class="navbar-form pull-right">
  <div class="input-group">
    {!! Form::text('nombre',null, ['class' => 'form-control', 'placeholder' => 'Filtrar Usuario | Tipo', 'aria-describedby' => 'search']) !!}
    <span class="input-group-addon" id="search" style="background-color:#dff0d8;"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
  </div>
</form>

<table class="table table-striped">

  <thead>
    <th>ID</th>
    <th>Username</th>
    <th>Nombre</th>
    <th>Correo electrónico</th>
    <th>Tipo</th>
    <th style="text-align: center;">Acciones</th> 
  </thead>

  <tbody>
    @foreach($user as $users)
      <tr>
        <td>
        @if($users->id < 10)
          <span class="label label-default" style="background-color: #777;">0{{$users->id}}</span>
        @else
          <span class="label label-default" style="background-color: #777;">{{$users->id}}</span>
        @endif
        </td>
        <td>
          {{$users->username}}
        </td>
        <td>
          {{$users->persona->nombre}} {{$users->persona->paterno}} {{$users->persona->materno}}
        </td>
        <td>
          {{$users->email}}
        </td>
        <td>
          @if($users->tipo->tipo == "Administrador")
          <h5><span class="label label-danger">{{ $users->tipo->tipo }}</span></h5>
          @endif
          @if($users->tipo->tipo == "Instructor")
          <h5><span class="label label-primary">{{ $users->tipo->tipo }}</span></h5>
          @endif
          @if($users->tipo->tipo == "Alumno")
          <h5><span class="label label-success">{{ $users->tipo->tipo }}</span></h5>
          @endif
        </td>
        <td>
          <center> 
          <a href="{{ route('users.edit', $users->id) }}" class="btn btn-warning action"> <span class="glyphicon glyphicon-pencil"></span></a>

          <a href="{{ route('users.destroy', $users->id) }}" onclick="return confirm('¿Está seguro de eliminar el usuario definitivamente?')" class="btn btn-danger action"> <span class="glyphicon glyphicon-trash"></span></a>


          <a href="" class="btn btn-info action" style="background-color: #2196f3;"> <span class="glyphicon glyphicon-zoom-in"></span></a>
          <a href="" class="btn btn-success action"> <span class="glyphicon glyphicon-circle-arrow-up"></span></a>
          </center> 
        </td>
      </tr>
    @endforeach
  </tbody>
  
</table>

<center>
{!! $user->render() !!}
</center>


</div>

	<script src="{{asset('jquery-3.1.1/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('bootstrap-3.3.7/js/bootstrap.min.js')}}"></script>

    <script type="text/javascript">
   $('#flash-overlay-modal').modal();
  </script>

    <script>
      $('div.alert').not('.alert-important').delay(4000).fadeOut(350);
    </script>

</body>
</html>