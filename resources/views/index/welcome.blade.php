@extends('index.template.main')

@section('title')

Plataforma de Capacitación Docente

@endsection

@section('section')
  <!-- /.carousel-slide -->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
              <li data-target="#myCarousel" data-slide-to="4"></li>
          </ol>
          <div class="item active">
            <center>
              <img class="img-responsive" src="{{asset('img/slide1.png')}}">
            </center> 
          </div>
          <div class="item">
            <center>
              <img class="img-responsive" src="{{asset('img/slide2.png')}}">
            </center> 
          </div>
          <div class="item">
            <center>
              <img class="img-responsive" src="{{asset('img/slide3.png')}}">
            </center> 
          </div>
          <div class="item">
            <center>
              <img class="img-responsive" src="{{asset('img/slide4.png')}}">
            </center> 
          </div>
          <div class="item">
            <center>
              <img class="img-responsive" src="{{asset('img/slide5.png')}}">
            </center> 
          </div>
        </div>
      </div>
  <!-- /.carousel-slide -->
    <div class="repeat">
    </div>

    <div class="container">
      <center>
      <div class="col-lg-12">
                <h3 class="page-header">
                    ¿En qué desea capacitarse?
                </h3>
      </div>
      </center>
    <!--modulos-->
      <div class="row" style="text-align: center;" id="cursos">
            <div class="col-md-3">
                <div class="panel panel-default" style="background-color: #7fa57b;border-radius: 10px;">
                    <div class="panel-body">
                    <CENTER>
                        <img class="img-responsive" src="{{asset('img/competencias_docentes.png')}}">
                    </CENTER>
                    </div>
                    <div class="panel-heading" style="background-color: #efeee5;">
                        <h5> Competencias Docentes</h5>
                        <a href="" class="btn btn-default"> Ver Curso </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default" style="background-color: #c1d188;border-radius: 10px;">
                    <div class="panel-body">
                    <CENTER>
                        <img class="img-responsive" src="{{asset('img/estrategias_docentes.png')}}">
                    </CENTER>
                    </div>
                    <div class="panel-heading">
                        <h5> Estrategias Docentes</h5>
                        <a href="" class="btn btn-default"> Ver Curso </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default" style="background-color: #7fa57b;border-radius: 10px;">
                    <div class="panel-body">
                    <CENTER>
                        <img class="img-responsive" src="{{asset('img/desarrollo_planeacion.png')}}">
                    </CENTER>
                    </div>
                    <div class="panel-heading">
                        <h5> Desarrollo y Planeación</h5>
                        <a href="" class="btn btn-default"> Ver Curso </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default" style="background-color: #c1d188;border-radius: 10px;">
                    <div class="panel-body">
                    <CENTER>
                        <img class="img-responsive" src="{{asset('img/capacitacion_examenes.png')}}">
                    </CENTER>
                    </div>
                    <div class="panel-heading">
                        <h5> Exámenes de Oposición</h5>
                        <a href="" class="btn btn-default"> Ver Curso </a>
                    </div>
                </div>
            </div>
        </div>
        <!--/.modulos-->
    </div>
    
    <div class="exp" id="experiencias">
    <center>
      <h4 style="color: #fff;">EXPERIENCIAS</h4>
    </center>
    </div>

    <div class="repeat">
    </div>

   <footer>

    <div class="container">
       <h3>INICIO</h3>
       <h5>- ¿Quienes Somos?</h5>
    </div>

   </footer>
    <!-- <input type="text" ng-model="nombre"> -->


@endsection

   