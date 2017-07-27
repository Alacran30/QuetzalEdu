@extends('instructor.template.main')

@section('title', 'Competencian')

@section('section')

    
    <br>
    <br>
    <div class="row">
      <div class="col-lg-12">
        <!-- <div class="col-lg-3">
          <center>
          <img style="width: 235px; height: 235px;margin-right: 10px;margin-top: -10px;border: solid 5px #c1d188;" src='{{url('img/perfil/'.$user->persona->image)}}'>
              <h5>Bienvenido, {{$user->username}}!</h5>
          <br>
          <img src="{{asset('img/Q_Quetzal.png')}}">
          </center>
        </div> -->
        <div class="col-lg-9">
          <h3 style="margin-top: 0px;padding-top: 0px;">Organizar y Animar Situaciones de Aprendizaje</h3>
          <!-- <h4><a href="{{asset('Contenidos/Competencias Docentes/Organizar y Animar Situaciones de Aprendizaje/VideoGeneral/QuetzalEduCompetenciasM1.mp4')}}" style="color:#000;" target="_blank"><i class="fa fa-youtube"></i> Organizar y Animar Situaciones de Aprendizaje</a></h4> -->
          <hr>
          <video autoplay class="img-responsive" src="{{asset('Contenidos/Competencias Docentes/Organizar y Animar Situaciones de Aprendizaje/VideoGeneral/QuetzalEduCompetenciasM1.mp4')}}" width="1280" height="720" controls>
          </video>
          <hr>
        </div>
        
        <div class="col-lg-3">
        <center>
          <h5 style="border: solid 5px #7fa57b;background-color:#7fa57b;padding: 5px;margin-right: 20px;margin-top: -5px;color: #fff;">COMPETENCIA 1</h5>
          <!-- <h5 style="border: solid 5px #c1d188;background-color:#c1d188;padding: 5px;color:#fff;margin-right: 20px;margin-top: -5px;"> EVIDENCIAS</h5> -->
          <hr>
          <a href="" class="aside"><h6> <i class="fa fa-file-o"></i> EVALUACIÓN DIAGNOSTICA</h6></a>
          <hr>
          <a href="" class="aside"><h6> <i class="fa fa-file"></i> EVIDENCIA 1</h6></a>
          <hr>
          <a href="" class="aside"><h6> <i class="fa fa-users"></i> TRABAJO GRUPAL</h6></a>
          <hr>
          <a href="" class="aside"><h6> <i class="fa fa-file-o"></i> COEVALUACIÓN</h6></a>
          <hr>
          <a href="" class="aside"><h6> <i class="fa fa-file"></i> EVIDENCIA 2</h6></a>
          <hr>
          </center>
        </div>
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
