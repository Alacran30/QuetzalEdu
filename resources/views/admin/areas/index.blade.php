@extends('admin.template.main')

@section('title')

Areas de Conocimiento

@endsection

@section('section')

<br>

<div class="container">

<div class="row">
  <div class="col-md-12">
    <h3>
      <i  class="fa fa-graduation-cap"></i>
      Lista de Areas de Conocimiento
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

<a href="{{ route('areas_conocimiento.create') }}" class="btn btn-success"> <i class="fa fa-plus"></i></span> &nbsp;Agregar Area de Conocimiento</a>

<form class="navbar-form pull-right">
  <div class="input-group">
    {!! Form::text('area_conocimiento',null, ['class' => 'form-control', 'placeholder' => 'Filtrar Area de Conocimiento', 'aria-describedby' => 'search']) !!}
    <span class="input-group-addon" id="search" style="background-color:#dff0d8;"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
  </div>
</form>

<table class="table table-striped">

  <thead>
    <th>ID</th>
    <th>Area de Conocimiento</th>
    <th style="text-align: center;">Acciones</th> 
  </thead>

  <tbody>
    @foreach($area as $areas)
      <tr>
        <td>
        @if($areas->id < 10)
          <span class="label label-default" style="background-color: #777;">0{{$areas->id}}</span>
        @else
          <span class="label label-default" style="background-color: #777;">{{$areas->id}}</span>
        @endif
        </td>
        <td>
          {{$areas->area_conocimiento}}
        </td>
        <td>
          <center> 
          <a href="{{ route('areas_conocimiento.edit', $areas->id) }}" class="btn btn-warning action"> <span class="glyphicon glyphicon-pencil"></span></a>

          <a href="{{ route('area.destroy', $areas->id) }}" onclick="return confirm('¿Está seguro de eliminar el area de conocimiento definitivamente?')" class="btn btn-danger action"> <span class="glyphicon glyphicon-trash"></span></a>

          </center> 
        </td>
      </tr>
    @endforeach
  </tbody>
  
</table>

<center>
{!! $area->render() !!}
</center>


</div>


@endsection

	