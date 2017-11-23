@extends('index.template.main')

@section('title','Iniciar Sesión')

@section('section')
        <br>
        <div class="col-md-5 center-block quitarfloat" style="font-weight: bold;">
          <div>
            <center>
              <h3>
                <span class="label label-warning">
                  !Iniciar Sesión!
                </span>
              </h3>
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
                <input type="email" name="email" class="form-control" placeholder="Correo electrónico" required autofocus />
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
                <div class="contra">
                <p><span class="pull-left"> ¿No tienes <a href="{{ url('/registro') }}" style="text-decoration: underline;"> Cuenta?</a></span></p> ¿Olvidaste tu <a href="" style="text-decoration: underline;">Contraseña?</a>
                </div>
              </div> 
              <hr>
              <!-- <div class="form-group">
                <a class="btn btn-primary btn-block" href="{{ route('facebook.login') }}" style="background-color: #3b5998;">
              Iniciar con &nbsp;<img src="img/facebook.png">
                </a>
              </div> -->
              <div class="form-group">
              <a class="btn btn-block btn-social btn-facebook" style="text-transform: none;color: #fff;" href="{{ route('facebook.login') }}">
                <span class="fa fa-facebook"></span> Iniciar sesión con Facebook
              </a>
          </div>
              {!!Form::close()!!}
          </div>
        </div>
@endsection

   