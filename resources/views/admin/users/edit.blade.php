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
      Editar Instructor
    </h3>
  </div>
</div>

<hr>


{!! Form::open(['route' => ['users.update', $user], 'method' => 'PUT']) !!}

<div class="form-group">
  
  <div class="form-group">
    {!! Form::label('username', 'Username:') !!}
    {!! Form::text('username', $user->username, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required']) !!}
  </div>

    {!! Form::label('email', 'Correo Electrónico:') !!}
    {!! Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'Correo Electrónico', 'required']) !!}

    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', $user->persona->nombre, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required']) !!}

    {!! Form::label('paterno', 'Apellido Paterno:') !!}
    {!! Form::text('paterno', $user->persona->paterno, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required']) !!}

    {!! Form::label('materno', 'Apellido Materno:') !!}
    {!! Form::text('materno', $user->persona->materno, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required']) !!}

  <br>

  <a href="{{ route('users.index') }}" class="btn btn-danger">Cancelar</a>
  <input type="submit" value="Editar" class="btn btn-success">

</div>

{!! Form::close() !!}


</div>

@endsection

