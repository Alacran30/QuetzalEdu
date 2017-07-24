@extends('admin.template.main')

@section('title')

Lista de Competencias Docentes

@endsection

@section('section')

<div class="container">
	<br>
	<h3>
		<span class="glyphicon glyphicon-list-alt"></span> Competencias Docentes	
	</h3>
	<hr>
	@include('flash::message')
	<div class="panel panel-default">
		<div class="panel-heading">
			<h5><i class="fa fa-check-circle-o ic">&nbsp;</i> D a t o s </h5>
		</div>
		<div class="panel-body">
			<a href="{{ route('competencia.create')}}" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Crear Competencia</a>
			<form class="navbar-form pull-right" style="margin-top: 0px;">
			  <div class="input-group">
			    {!! Form::text('nombre',null, ['class' => 'form-control', 'placeholder' => 'Filtrar Competencia | Titulo', 'aria-describedby' => 'search']) !!}
			    <span class="input-group-addon" id="search" style="background-color:#dff0d8;"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
			  </div>
			</form>
			<table class="table table-striped">
			  <thead>
			    <th>ID</th>
			    <th>Titulo de Competecia Docente</th>
			    <th>Area de Conocimiento</th>
			    <th>Usuario</th>
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

	
</div>

@endsection