@extends('admin.template.main')

@section('title')

Editar Area de Conocimiento

@endsection

@section('section')

<br>

<div class="container">

<div class="row">
  <div class="col-md-12">
    <h3>
      <i class="fa fa-user-plus"></i>
      Editar Area de Conocmiento
    </h3>
  </div>
</div>

<hr>


{!! Form::open(['route' => ['areas_conocimiento.update', $area], 'method' => 'PUT']) !!}

<div class="form-group">
  
  <div class="form-group">
    {!! Form::label('area_conocimiento', 'Area de Conocimiento:') !!}
    {!! Form::text('area_conocimiento', $area->area_conocimiento, ['class' => 'form-control', 'placeholder' => 'Nombre Area de Conocimiento', 'required']) !!}
  </div>

  <br>

  <a href="{{ route('areas_conocimiento.index') }}" class="btn btn-danger">Cancelar</a>
  <input type="submit" value="Editar" class="btn btn-success">

</div>

{!! Form::close() !!}


</div>

@endsection

