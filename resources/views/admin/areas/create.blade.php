@extends('admin.template.main')

@section('title')

Agregar Area de Conocimiento

@endsection

@section('section')

@include('flash::message')

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
            
            @if(Session::has('message-error'))
              <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <center>
                <span class="glyphicon glyphicon-lock"></span> 
                  {{Session::get('message-error')}}
                </center>
              </div>
            @endif


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
