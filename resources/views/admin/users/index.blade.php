@extends('admin.template.main')

@section('title')

Lista de Usuarios

@endsection

@section('section')

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


@endsection

	