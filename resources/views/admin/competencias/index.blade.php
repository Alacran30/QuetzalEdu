@extends('admin.template.main')

@section('title')

Lista de Competencias Docentes

@endsection

@section('section')

<div class="container">
	<br>
	<h4>
		<span class="glyphicon glyphicon-star"></span> Competencias Docentes	
	</h4>
	<hr>
	@include('flash::message')
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h6 style="color: #fff;"><i class="fa fa-check-circle-o ic">&nbsp;</i> D a t o s </h6>
		</div>
		<div class="panel-body" style="border: solid 1px #dfdfdf;">
			<a href="{{ route('competencia.create')}}" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Agregar Nueva Competencia</a>
			<form class="navbar-form pull-right" style="margin-top: 0px;">
			  <div class="input-group">
			    {!! Form::text('nombre',null, ['class' => 'form-control', 'aria-describedby' => 'search']) !!}
			    <span class="input-group-addon" id="search" style="background-color:#dff0d8;"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
			  </div>
			</form>
			<table class="table table-striped">
			  <thead>
			    <th>ID</th>
			    <th>Titulo de Competecia Docente</th>
			    <th>Area de Conocimiento</th>
			    <th>Contenido</th>
			    <th>Editar</th>
			    <th style="text-align: center;">Eliminar</th> 
			  </thead>
			<tbody>
				@foreach($competencia as $competencias)
				<tr>
					<td>
				        @if($competencias->id < 10)
				          <span class="label label-default" style="background-color: #777;">0{{$competencias->id}}</span>
				        @else
				          <span class="label label-default" style="background-color: #777;">{{$competencias->id}}</span>
				        @endif
			        </td>
			        <td>
			        	{{$competencias->titulo}}
			        </td>
			        <td>
			        	{{$competencias->area->area_conocimiento}}
			        </td>
			        <td>
			        	<a href="" class="btn btn-warning action"> <i class="fa fa-briefcase"></i></a>
			      	</td>
			      	<td>
			      		<a href="" class="btn btn-warning action"> <span class="glyphicon glyphicon-pencil"></span></a>
			      	</td>
			      	<td>
			      		<a href="{{ route('competencia.destroy', $competencias->id) }}" onclick="return confirm('¿Está seguro de eliminar la competencia docente definitivamente?')" class="btn btn-danger action"> <span class="glyphicon glyphicon-trash"></span></a>
			      	</td>
			    </tr>
				@endforeach
			</tbody>
			</table>
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