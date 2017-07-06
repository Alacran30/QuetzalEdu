@extends('admin.template.main')

@section('title')

Agregar Area de Conocimiento

@endsection

@section('section')


<br>

<div class="container">

<div class="row">
  <div class="col-md-12">
    <h3>
      <i class="fa fa-plus"></i>
      Agregar Area de Conocimiento
    </h3>
  </div>
</div>

<hr>


{!! Form::open(['route' => 'areas_conocimiento.store', 'method' => 'POST']) !!}

<div class="form-group">
  
  <label>Nombre:</label>
  <input type="text" name="area_conocimiento" class="form-control" placeholder="Nombre del Area de Conocimiento" required>

  <br>

  <a href="{{ route('areas_conocimiento.index') }}" class="btn btn-danger">Cancelar</a>
  <input type="submit" value="Agregar" class="btn btn-success">

</div>

{!! Form::close() !!}
</div>
@endsection
