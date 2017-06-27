@extends('index.template.main')

@section('title','Iniciar Sesión')

@section('section')
        <hr>
        <div class="col-md-5 center-block quitarfloat" style="font-weight: bold;">
          <div>
            <center>
            <h3><span class="label label-warning">!Iniciar Sesión!</span></h3>
            </center>
            <hr>
            @if(Session::has('message-error'))
              <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <center>
                <span class="glyphicon glyphicon-lock"></span> 
                  {{Session::get('message-error')}}
                </center>
              </div>
            @endif
            {!!Form::open(['route'=>'log', 'method'=>'POST'])!!}
              <div class="form-group has-feedback">
                <input type="email" name="email" class="form-control" placeholder="Correo electrónico / Usuario" required autofocus />
                <span class="fa fa-user fa-lg form-control-feedback"></span> 
                @if($errors->has('email'))
                  <span class="error" >* {{ $errors->first('email') }}</span>
                @endif
              </div>
                <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" placeholder="Contraseña" required />
                <span class="fa fa-lock fa-lg form-control-feedback"></span> 
                @if($errors->has('password'))
                  <span class="error">* {{ $errors->first('password') }}</span>
                @endif
              </div>
              <div class="form-group">
                <input type="checkbox" name="" checked><span>Recordar mi contraseña</span>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-success btn-block"> INGRESAR</button>
              </div>
            {!!Form::close()!!}
          </div>
          <div class="contra">
            <p><span class="pull-left"> ¿No tienes <a href="{{ url('/registro') }}"> Cuenta?</a></span></p> ¿Olvidaste tu <a href="">Contraseña?</a>
          </div>
        </div>
        </div>
@endsection

   