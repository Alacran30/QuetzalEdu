@extends('index.template.main')

@section('title', 'Curso Exámenes de Oposición')

@section('section')
<style>
.bg-no-overlay {
    background: url("img/C4P2.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    color: #fff;
    height: 600px;
    width: 1349px;
    padding-top: 50px;
}
.img1{
  width: 100%;
  height: auto;
}
#grad5 {
  height: 200px;
  background: black; 
  background: linear-gradient(rgba(162, 148, 148, 0.9),rgba(0,0,0,0));
}
</style>

<div class="container bg-no-overlay img1" class="img-responsive">
    <div class="row text-center">
        <div class="col-md-12">
            <div class="col-md-3">
            </div>
            <div class="col-md-6" style="padding-bottom: 150px;"><br><br>
                <div class="embed-responsive embed-responsive-16by9" id="grad5">
                    <video src="{{asset('img/Videos/VideoQuetzalEdu.mov')}}" controls> 
                        Tu navegador no implementa el elemento <code>video</code>.
                    </video>
                </div>
            </div> 
            <div class="col-md-3">
            </div>
        </div>
    </div>
</div>
<div class="container">
  <div class="col-md-12"><br><br><br><br>
      <div class="col-md-4">
          <div class="panel panel-default">
              <div class="panel-heading">
                  <center>
                          <font size="5" color="#92CBD5">DESCRIPCIÓN DEL CURSO</font>
                  </center>
              </div>
              <div class="panel-body">
                  <p class="text-justify"><br>Capacitación en competencias aquí el docente se puede capacitarse en los diez dominios de competencias consideradas en la formación continua de docentes de acuerdo a los perfiles, parámetros e indicadores de los planes de estudio vigentes.<br>
                  </p>
              </div>
          </div>
      </div>
      <div class="col-md-4">
          <div class="panel panel-default">
              <div class="panel-heading">
                  <center>
                          <font size="5" color="#92CBD5">OBJETIVO DEL CURSO</font>
                  </center>
              </div>
              <div class="panel-body">
                  <p class="text-justify"><br>Capacitación en competencias aquí el docente se puede capacitarse en los diez dominios de competencias consideradas en la formación continua de docentes de acuerdo a los perfiles, parámetros e indicadores de los planes de estudio vigentes.<br>
                 </p>
              </div>
          </div>
      </div>
      <div class="col-md-4">
          <div class="panel panel-default">
              <div class="panel-heading">
                  <center>
                          <font size="5" color="#92CBD5">ALCANCE DEL CURSO</font>
                  </center>
              </div>
              <div class="panel-body">
                  <p class="text-justify"><br>Capacitación en competencias aquí el docente se puede capacitarse en los diez dominios de competencias consideradas en la formación continua de docentes de acuerdo a los perfiles, parámetros e indicadores de los planes de estudio vigentes.<br>
                 </p>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="container">
  <div class="col-md-12"><br><br>
    <div class="col-lg-4 col-lg-offset-4"><br>
      <div class="panel panel-default" style="background-color: #92CBD5;border-radius: 10px;"><br>
          <center><font size="5" color="fffff"> COSTO DEL CURSO</font></center>
          <center><font size="7" color="fffff"> $80</font><font size="5" color="fffff"> MXN</font></center>
        <div class="panel-heading"><br><br>
          <font size="3" color="#92CBD5">- Acceso a Videos</font><br><br>
          <font size="3" color="#92CBD5">- Acceso a Competencias Docentes</font><br><br><br>
          <center><a class="btn btn-default"><h8>COMPRAR CURSO</h8></a></center><br>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection