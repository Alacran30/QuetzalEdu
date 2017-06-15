@extends('instructor.template.main')

@section('title')

Inicio

@endsection

@section('section')
  <!-- /.carousel-slide -->

  <br>
<br>

<div class="row">
  <div class="col-lg-3">
    <center>
    <img style="width: 235px; height: 235px;margin-right: 10px;margin-top: -10px;border: solid 5px #c1d188;" src='{{url('img/perfil/'.$user->persona->image)}}'>
        <h5>Editar Perfil <span class="fa fa-edit"></span></h5>
    <br>
    <img src="{{asset('img/logo_quetzal.png')}}">
    </center>
  </div>
  <div class="col-lg-6">
  <div style="border: solid 2px #c1d188;margin-top: -5px;padding: 10px;padding-top: 0px;">
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
  </div>
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
