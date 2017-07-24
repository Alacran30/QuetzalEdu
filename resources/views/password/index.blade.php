@extends('instructor.template.main')

@section('title', 'Contraseña')

@section('section')
    <br>
    <br>
    <div class="container"> 
    @if(Session::has('message-info'))
       <div class="alert alert-danger alert-dismissible"  role="alert" style="font-size: 14px;">
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
           <center>
           {{Session::get('message-info')}}
         </center>
       </div>
    @endif
       {!! Form::open(['url' => 'updatecontraseña', 'method' => 'POST']) !!}
       <hr />
       <div class="form-group">
        <label for="mypassword">Contraseña Actual</label>
        <input type="password" name="mypassword" class="form-control" placeholder="Contraseña actual">
        <div class="text-danger">{{ $errors->first('mypassword') }}</div>
       </div>
       <div class="form-group">
        <label for="password">Nueva Contraseña</label>
        <input type="password" name="password" class="form-control" placeholder="Nueva Contraseña">
        <div class="text-danger">{{$errors->first('password')}}</div>
       </div>
       <div class="form-group">
        <label for="mypassword">Repetir Nueva Contraseña</label>
        <input type="password" name="password_confirmation" class="form-control" placeholder="Repite Nueva Contraseña">
       </div>
       <a href="{{url('/inicio')}}" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span>&nbsp;Cancelar</a>
       <button type="submit" class="btn btn-success">Guardar Cambios</button>
       {!! Form::close() !!}
      <hr>
    </div>
    <div class="row" style="background-color:#c1d188;color: #fff;font-weight: bold;margin-top: 30px;">
      <center>
        <div class="col-lg-4">AVISO DE PRIVACIDAD</div>
        <div class="col-lg-4">TÉRMINOS Y CONDICIONES</div>
        <div class="col-lg-4">CONTÁCTANOS</div>
      </center>
    </div>
    <div class="repeat" style="border-top: solid 5px #dfdfdf;">
    </div>
    @endsection