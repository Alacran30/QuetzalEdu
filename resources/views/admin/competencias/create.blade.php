@extends('admin.template.main')

@section('title')

Agregar Competencia Docente

@endsection

@section('section')

<br>
<div class="container">
<div class="row">
  <div class="col-md-12">
    <h4>
      <i class="fa fa-plus"></i>
      Agregar Competencia Docente
    </h4>
  </div>
</div>
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
<div class="panel panel-primary">
		<div class="panel-heading">
			<h6 style="color: #fff;"><i class="fa fa-check-circle-o ic">&nbsp;</i> D a t o s </h6>
		</div>
		<div class="panel-body">
{!! Form::open(['route' => 'competencia.store', 'method' => 'POST', 'files' => 'true']) !!}

<div class="form-group">
	{!! Form::label('titulo', 'Titulo de Competencia') !!}
	{!! Form::text('titulo',null, ['class' => 'form-control', 'placeholder' => 'Titulo de Competencia', 
	'required', 'autofocus']) !!}
</div>

<div class="form-group">
	{!! Form::label('area_id', 'Área de Conocimiento') !!}
	{!! Form::select('area_id', $areas , null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('descripcion', 'Descripción General del Curso') !!}
	{!! Form::textarea('descripcion',null, ['class' => 'form-control','placeholder' => 'Descripción General del Curso', 'required']) !!}
</div>

<div class="form-group">
	<i class="fa fa-file"></i> {!! Form::label('informacion', 'Información General del Curso') !!} 
	<input id="informacion" type="file" name="informacion" class="file-loading" required>
</div>

<div class="form-group">
	<i class="fa fa-youtube-play"></i> {!! Form::label('video', 'Video General del Curso') !!} 
	<input id="video" type="file" name="video" class="file-loading" required>
</div>

<div class="form-group">
	<i class="fa fa-folder-open"></i> {!! Form::label('contenidos', 'Contenidos del Curso') !!} 
	<input id="files" multiple="" name="files[]" type="file" class="file-loading" required>
</div>

<div class="form-group">
    <a href="{{ route('competencia.index') }}" class="btn btn-danger"> Cancelar</a>
	<input type="submit" value="Crear Curso" class="btn btn-success">
</div>

{!! Form::close() !!}

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

@endsection