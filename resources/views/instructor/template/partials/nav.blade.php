<!-- /.navbar-default -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
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
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{url('/inicio')}}"> <i class="fa fa-home fa-2x" style="margin-top: -5px;"></i> </a></li>
            <li><a href="#"> <i class="fa fa-edit fa-2x" style="margin-top: -5px;"></i> </a></li>
            <li><a href="#"><i class="fa fa-graduation-cap fa-2x" style="margin-top: -5px;"></i> </a></li>
            <li><a href="#"> <i class="fa fa-sign-out fa-2x" style="margin-top: -5px;"></i></a></li>
            <li><a href="#"> <i class="fa fa-bell fa-2x" style="margin-top: -5px;"></i> <i class="label label-danger">10</i></a></li>
            <li><a href="#"> {!!Auth::user()->username !!} </a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <img style="width: 45px; height: 45px;float: left;margin-right: 10px;margin-top: -10px;border: solid 2px #c1d188" src='{{url('img/perfil/'.$user->persona->image)}}'><span class="caret" style="color: #c1d188;"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{url('/perfil')}}"><span class="glyphicon glyphicon-edit"></span> Editar Perfil</a></li>
                <li><a href="{{url('/contraseña')}}"><span class="glyphicon glyphicon-lock"></span> Cambiar Contraseña</a></li>
                <li><a  href="#"><span class="glyphicon glyphicon-file"></span> Manual de Usuario</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="{{ url('/logout') }}"><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesión</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <!-- navbar-default./ -->