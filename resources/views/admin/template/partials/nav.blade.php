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

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="{{ route('users.index') }}"> <i class="fa fa-users"> &nbsp;USUARIOS</i> </a></li>
        <li><a href="{{ route('areas_conocimiento.index') }}"> <i class="fa fa-graduation-cap"> &nbsp;AREAS DE CONOCIMIENTO</i> </a></li>
        <li><a href=""> <i class="fa fa-star"> &nbsp;COMPETENCIAS</i> </a></li>
        <li><a href=""> <i class="fa fa-cubes"> &nbsp;CURSOS</i> </a></li>
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