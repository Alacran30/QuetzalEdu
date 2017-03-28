<!DOCTYPE html>
<html lang="es" ng-app>
  <head>
      <title>QuetzalEdu - Plataforma Web</title>
      <meta name="viewport" content="width=device-width, initial-scale=1"/>
      <meta charset="utf-8"/>
      <link rel="icon" href="{{asset('img/favicon.png')}}"/>
      <link rel="stylesheet" href="{{asset('bootstrap-3.3.7/css/bootstrap.min.css')}}"/>
      <link rel="stylesheet" href="{{asset('css/main.css')}}"/>
      <link rel="stylesheet" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}"/>
      <link rel="stylesheet" href="{{asset('css/carousel.css')}}"/>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster+Two:400,700i"/>
  </head>
  <body>
  <!-- /.navbar-default -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('img/logotipo.png')}}" title="QuetzalEdu"></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="">QUIENES SOMOS</a></li>
            <li><a href="">CURSOS</a></li>
            <li><a href="">CONTACTO</a></li>
            <li><a href="">EXPERIENCIAS</a></li>
          </ul>
        </div>
      </div>
    </nav>
  <!-- navbar-default./ -->
  <!-- /.carousel-slide -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <ol class="carousel-indicators">
          <li data-target="#main-slider" data-slide-to="0" class="active"></li>
          <li data-target="#main-slider" data-slide-to="1"></li>
          <li data-target="#main-slider" data-slide-to="2"></li>
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
      </div>
    </div>
  <!-- carousel-slide./ -->         
    <div class="caption col-md-3">
      <center>
        <h4 class="text pacifico">Capacitate con</h4>
        <h4 class="text pacifico">nosotros y mejoremos</h4>
        <h4 class="text pacifico">juntos la</h4>
        <h4 class="text pacifico">educación.</h4>
      </center>
      <br>
      <center>
        <a href="{{url('/registro')}}" class="btn btn-danger register" href="">
          REGISTRARSE
        </a> 
      </center>
    </div>
    <div class="log">
      <a style="font-size: 14px; background-color: #fdc958;" href="{{ url('/ingresar') }}" class="btn btn-warning"> 
        INICIAR SESIÓN
      </a>
    </div>
      <script src="{{asset('jquery-3.1.1/jquery-3.1.1.min.js')}}"></script>
      <script src="{{asset('bootstrap-3.3.7/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('angularjs/angular.min.js')}}"></script>
  </body>
</html>