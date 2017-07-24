@extends('admin.template.main')

@section('title')

Inicio

@endsection

@section('section')



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
  <input type="text" name="username" class="form-control" required>

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

  

@endsection

