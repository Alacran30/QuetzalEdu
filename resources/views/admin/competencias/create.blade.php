@extends('admin.template.main')

@section('title')

Agregar Competencia Docente

@endsection

@section('section')

<br>
<div class="container">
<div class="row">
  <div class="col-md-12">
    <h3>
      <i class="fa fa-plus"></i>
      Agregar Competencia Docente
    </h3>
  </div>
</div>
<hr>

<div class="panel panel-default">
		<div class="panel-heading">
			<h5><i class="fa fa-check-circle-o ic">&nbsp;</i> D a t o s </h5>
		</div>
		<div class="panel-body">
{!! Form::open(['route' => 'competencia.store', 'method' => 'POST', 'files' => 'true']) !!}

<div class="form-group">
	{!! Form::label('titulo', 'Titulo') !!}
	{!! Form::text('titulo',null, ['class' => 'form-control', 'placeholder' => 'Titulo del Curso', 
	'required', 'autofocus']) !!}
</div>

<div class="form-group">
	{!! Form::label('area_id', 'Área de Conocimiento') !!}
	{!! Form::select('area_id', $areas , null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('descripcion', 'Descripción del Curso') !!}
	{!! Form::textarea('descripcion',null, ['class' => 'form-control','placeholder' => 'Descripción General del Curso', 'required']) !!}
</div>

<div class="form-group">
	<i class="fa fa-list"></i> {!! Form::label('informacion', 'Información General del Curso') !!} 
	<input id="informacion" type="file" name="informacion" class="file-loading" required>
</div>

<div class="form-group">
	<i class="fa fa-youtube"></i> {!! Form::label('video', 'Video General del Curso') !!} 
	<input id="video" type="file" name="video" class="file-loading" required>
</div>

<div class="form-group">
	{!! Form::label('contenidos', 'Contenidos del Curso') !!} 
	<input id="files" multiple="" name="files[]" type="file" class="file-loading" required>
</div>

<div class="form-group">
    <a href="{{ route('competencia.index') }}" class="btn btn-danger"> Cancelar</a>
	<input type="submit" value="Crear Curso" class="btn btn-success">
</div>

{!! Form::close() !!}

</div>
</div>

@endsection