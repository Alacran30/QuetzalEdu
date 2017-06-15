@extends('instructor.template.main')

@section('title')

Perfil

@endsection


@section('section')
	
	  <br>
<br>

<div class="row">
  <div class="col-lg-3">
    <form method="post" action='{{url("perfil/updateImage")}}' enctype="multipart/form-data">
    <center>
    {{csrf_field()}}
    <img style="width: 235px; height: 235px;margin-right: 10px;margin-top: -10px;border: solid 5px #c1d188;" src='{{url('img/perfil/'.$user->persona->image)}}'>
   <!-- <img src='{{url('img/perfil/'.$user->persona->image)}}' class="w3-circle" style="height:106px;width:106px" alt="Avatar"> -->
       <hr>
        <input type="file" name="image">
        <div class="text-danger">{{ $errors->first('image')}}</div>
        <br>
        <button type="submit" name="imagen" class="btn btn-success"> Actualizar Imagen </button>
        <br>
    <br>
    <img src="{{asset('img/logo_quetzal.png')}}">
    </center>
    </form>
  </div>




  <div class="col-lg-6" style="margin-top: -30px;">



<hr>
 <ul class="nav nav-tabs">
                  <li class="active"><a href="#info-tab" data-toggle="tab">DATOS PERSONALES <i class="fa"></i></a></li>
                  <li><a href="#adress-tab" data-toggle="tab">DIRECCIÓN <i class="fa"></i></a></li>
                  <li><a href="#profesional-tab" data-toggle="tab">INFORMACIÓN PROFESIONAL <i class="fa"></i></a></li>
              </ul>
              <br>
  <div class="tab-content">
    <div class="tab-pane active" id="info-tab">


  {!! Form::open(['route' => 'perfil.store', 'method' => 'POST']) !!}
   
  <label>Nombre(s) *</label>
  {!! Form::text('nombre', $user->persona->nombre, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required']) !!}

  <label>Apellido Paterno *</label>
  {!! Form::text('paterno', $user->persona->paterno, ['class' => 'form-control', 'placeholder' => 'Apellido Paterno', 'required']) !!}

  <label>Apellido Materno *</label>
  {!! Form::text('materno', $user->persona->materno, ['class' => 'form-control', 'placeholder' => 'Apellido Materno', 'required']) !!}

  {!! Form::label('genero', 'Género *') !!}
  {!! Form::select('genero', ['Hombre' => 'Hombre', 'Mujer' => 'Mujer'], $user->persona->genero, ['class' => 'form-control']) !!}

  <label>Fecha de Nacimiento *</label>
  {!! Form::date('nacimiento', $user->persona->nacimiento, ['class' => 'form-control', 'required']) !!}

  <label>Teléfono Oficina</label>
  {!! Form::text('telcasa', $user->persona->telcasa, ['class' => 'form-control', 'placeholder' => 'Teléfono de Oficina', 'required']) !!}

  <label>Teléfono Móvil</label>
  {!! Form::text('telmovil', $user->persona->telmovil, ['class' => 'form-control', 'placeholder' => 'Teléfono Móvil', 'required']) !!}

  </div>

  <div class="tab-pane" id="adress-tab">
     <label>Calle *</label>
  {!! Form::text('calle', $user->persona->direccion->calle, ['class' => 'form-control', 'placeholder' => 'Calle']) !!}

     <label>Número Interior *</label>
  <input type="text" name="interior" class="form-control">
  
     <label>Número Exterior *</label>
  <input type="text" name="exterior" class="form-control">

      <label>Colonia *</label>
  <input type="text" name="colonia" class="form-control">
  
     <label>Municipio *</label>
  <input type="text" name="municipio" class="form-control">

      <label>Estado *</label>
  <input type="text" name="estado" class="form-control">

      <label>Código Postal *</label>
  <input type="text" name="postal" class="form-control">

  </div>


   <div class="tab-pane" id="profesional-tab">
      <label>Nivel de Estudios *</label>
  <input type="text" name="estudios" class="form-control">
      <label>Especialidad *</label>
  <input type="text" name="especialidad" class="form-control">
      <label>Resumen Curricular</label>
      <textarea class="form-control"></textarea>
   </div>

  </div>

  <br>
  <a class="btn btn-danger" href="{{url('/inicio')}}"> Cancelar</a>

  <input type="submit" value="Guardar" class="btn btn-success">

  {!! Form::close() !!}
  
  <!--<div style="border: solid 2px #c1d188;margin-top: -5px;padding: 10px;padding-top: 0px;">
  <div class="col-lg-6">
    <a class="btn btn-success btn-block" style="background-color:#7fa57b;"> Mensajes </a>
  </div>
  <div class="col-lg-6">
    <a class="btn btn-warning btn-block" style="background-color:#c1d188;"> Asignar Actividad </a>
  </div>
  <hr>
  <textarea class="form-control" placeholder="Escriba su mensaje aquí..."></textarea>
  <hr>
  <i class="fa fa-book fa-2x" style="padding: 4px;"></i>&nbsp;
  <i class="fa fa-clipboard fa-2x" style="padding: 4px;"></i>&nbsp;
  <i class="fa fa-chain fa-2x" style="padding: 4px;"></i>&nbsp;
  <a class="btn btn-warning">Cancelar</a> <a class="btn btn-success" >Enviar</a>
  <br>
  <br>
  </div>
  <div style="border: solid 2px #7fa57b;margin-top: -5px;padding: 10px;padding-top: 0px;margin-top: 10px;">
    <h5 style="color:#7fa57b">Publicaciones</h5>
    <hr>
    <h6 style="color:#7fa57b">Sé el primero en publicar...Comienza la Conversación</h6>
  </div>-->
  </div>



  <div class="col-lg-3">
  <center>
    <h5 style="border: solid 5px #c1d188;padding: 5px;margin-right: 20px;color:#7fa57b;margin-top: -5px;">GESTIÓN DE GRUPOS</h5>

    <h5 style="border: solid 5px #c1d188;background-color:#c1d188;padding: 5px;margin-right: 20px;margin-top: -5px;color: #fff;">ADMINISTRAR GRUPOS</h5>

    <h5 style="border: solid 5px #c1d188;background-color:#c1d188;padding: 5px;margin-right: 20px;margin-top: -5px;color: #fff;">CREAR GRUPO</h5>

    <h5 style="border: solid 5px #c1d188;background-color:#c1d188;padding: 5px;margin-right: 20px;margin-top: -5px;color: #fff;">UNIRSE A UN GRUPO</h5>

    <h5 style="border: solid 5px #c1d188;padding: 5px;color:#7fa57b;margin-right: 20px;margin-top: -5px;">MIS GRUPOS</h5>

    <h6 style="border: solid 5px #7fa57b;background-color:#7fa57b;padding: 5px;margin-right: 20px;margin-top: -5px;color: #fff;">Competencias Docentes</h6>
    <h6 style="border: solid 5px #7fa57b;background-color:#7fa57b;padding: 5px;margin-right: 20px;margin-top: -5px;color: #fff;">Estrategias Docentes</h6>
    <h6 style="border: solid 5px #7fa57b;background-color:#7fa57b;padding: 5px;margin-right: 20px;margin-top: -5px;color: #fff;">Planeación y Desarrollo</h6>
    <h6 style="border: solid 5px #7fa57b;background-color:#7fa57b;padding: 5px;margin-right: 20px;margin-top: -5px;color: #fff;">Exámenes de Oposición</h6>
    </center>
  </div>
</div>

<div class="row" style="background-color:#c1d188;color: #fff;font-weight: bold;margin-top: 30px;">
  <center>
  <div class="col-lg-4">AVISO DE PRIVACIDAD</div>
  <div class="col-lg-4">TÉRMINOS Y CONDICIONES</div>
  <div class="col-lg-4">CONTÁCTANOS</div>
  </center>
</div>

<div class="repeat" style="border-top: solid 5px #dfdfdf;">
</div>

@endsection
