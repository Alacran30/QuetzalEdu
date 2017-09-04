@extends('admin.template.main')

@section('title')

Lista de Áreas de Conocimiento

@endsection

@section('section')

<br>

<div class="container">

<div class="row">
  <div class="col-md-12">
    <h4>
      <i  class="fa fa-graduation-cap"></i>
      Áreas de Conocimiento
    </h4>
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


<hr>

@if(count($errors) > 0)
    <div class="alert alert-danger" role="alert">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error}}</li>
        @endforeach
      </ul>
    </div>
@endif

@include('flash::message')

<div class="panel panel-primary" >
<div class="panel-heading">
      <h6 style="color: #fff;"><i class="fa fa-check-circle-o ic">&nbsp;</i> D a t o s </h6>
</div>
<div class="panel-body" style="border: solid 1px  #dfdfdf;">
<a href="" class="btn btn-success" data-toggle="modal" data-target="#agregar" > <i class="fa fa-plus"></i></span> &nbsp;Agregar nueva área</a>
<form class="navbar-form pull-right" style="margin-top: 0px;">
  <div class="input-group">
    {!! Form::text('area_conocimiento',null, ['class' => 'form-control', 'aria-describedby' => 'search']) !!}
    <span class="input-group-addon" id="search" style="background-color:#dff0d8;"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
  </div>
</form>

<hr>

<table class="table table-striped">

  <thead style="background-color: #dfdfdf;">
    <th>ID</th>
    <th>Área de Conocimiento</th>
    <td><center><strong>Acciones</strong></center></td> 
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
          <a href="{{ route('areas_conocimiento.edit', $areas->id) }}" class="btn btn-warning action"> <span class="glyphicon glyphicon-pencil"></span> &nbsp;Modificar</a>

          <a href="{{ route('area.destroy', $areas->id) }}" onclick="return confirm('¿Está seguro de eliminar el Área de conocimiento definitivamente?')" class="btn btn-danger action"> <span class="glyphicon glyphicon-trash"></span> &nbsp;Eliminar</a>

          </center> 
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>


<center>
{!! $area->render() !!}
</center>




<!-- line modal -->
<div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="margin-top: 50px;">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" style="color: gray;">×</span><span class="sr-only">Close</span></button>
      <br>
      <h4 class="modal-title" id="lineModalLabel"> <span class="glyphicon glyphicon-plus"></span> Agregar Área de Conocimiento</h4>
     
    </div>
    <div class="modal-body">
      {!! Form::open(['route' => 'areas_conocimiento.store', 'method' => 'POST']) !!}
        <div class="form-group">
          <label> Nombre del Área de Conocimiento </label>
          <input type="text" name="area_conocimiento" class="form-control"  autofocus required />
        </div>
    </div>
    <div class="modal-footer">
      <div class="btn-group btn-group-justified" role="group" aria-label="group button">
        <div class="btn-group" role="group">
          <button type="button" class="btn btn-danger" data-dismiss="modal"  role="button" style="box-shadow: none;"">Cancelar</button>
        </div>
        <div class="btn-group" role="group">
          <input type="submit" name="agregar" value="Agregar" class="btn btn-success" style="box-shadow: none;">
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
  </div>
</div>
 
    <div class="well" style="border-radius: 5px;border: solid 2px #dfdfdf;">
      <div class="row">
        <center>
          <div class="col-md-6">
            <span class="glyphicon glyphicon-globe"></span>&nbsp; Plataforma de Capacitación Docente :: QuetzalEdu
          </div>
          <div class="col-md-6">
            <span class="glyphicon glyphicon-copyright-mark"></span>&nbsp;&nbsp;2017 SICIPAED S. de R.L. de C.V.
          </div>
        </center>
      </div>
    </div>
</div>




@endsection

	