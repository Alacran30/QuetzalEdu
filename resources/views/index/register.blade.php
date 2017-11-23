@extends('index.template.main')

@section('title','Registro')

@section('section')
        <br>
        <div class="col-md-5 center-block quitarfloat" style="font-weight: bold;" >
          <div>
            <center>
              <h3><span class="label label-danger">!Regístrese Ahora!</span></h3>
              ¿Ya tienes cuenta? <a href="{{url('/ingresar')}}" class="inicia"> Inicia Sesión</a>
            </center>
            @if(Session::has('message-error'))
            <div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <center><span class="glyphicon glyphicon-lock"></span> &nbsp;{{Session::get('message-error')}}</center>
            </div>
            @endif
            <hr>
            {!!Form::open(['route'=>'users.store', 'method'=>'POST'])!!}
            <div class="form-group">
              <label>Nombre de usuario</label>
              <input type="text" name="username" class="in form-control" placeholder="Nombre de usuario" required autofocus>
                @if($errors->has('name'))
                  <span class="error">* {{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="form-group">
              <label>Correo electrónico</label>
              <input type="email" name="email" class="in form-control" placeholder="Correo electrónico" required">
                @if($errors->has('email'))
                  <span class="error">* {{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-group">
              <label>Contraseña</label>
              <input type="password" name="password" class="form-control" placeholder="Contraseña" required >
                @if($errors->has('password'))
                  <span class="error">* {{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="form-group">
              <label>Confirmar contraseña</label>
              <input type="password" name="mypassword" class="form-control" placeholder="Confirmar contraseña" required >
                @if($errors->has('mypassword'))
                  <span class="error">* {{ $errors->first('mypassword') }}</span>
                @endif
            </div>
            <div class="form-group">
              <input type="checkbox" name="" checked><span> Aceptar términos y condiciones</span>
            </div>
            <div class="form-group">
              <a href="{{url('/')}}" class="btn btn-danger"> Cancelar</a>
              <button type="submit" class="btn btn-success"> Registrarse</button>
            </div>
            {!!Form::close()!!}
          </div>
        </div>
@endsection

   