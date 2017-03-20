<!DOCTYPE html>
<html>
<head>
    <title>SICIPAED - Plataforma Web </title>
    <link rel="icon"  href="{{asset('img/icon.png')}}" />
    <link rel="stylesheet"  href="{{asset('bootstrap-3.3.7/css/bootstrap.min.css')}}" />
    <link rel="stylesheet"  href="{{asset('css/main.css')}}" />
    <link rel="stylesheet"  href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}" />
</head>
<body>

    

  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}">SICIPAED</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <!--<ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>-->
      <ul class="nav navbar-nav navbar-right">
        <li><a href=""> Quienes somos</a></li>
        <li><a href=""> Cursos</a></li>
        <li><a href=""> Contacto</a></li>
        <li><a href=""> Experiencias</a></li>
        <li><a href="{{ url('/registro') }}"><span class="glyphicon glyphicon-edit"></span> &nbsp;Regístrate</a></li>
        <li><a href="{{ url('/ingresar') }}"><span class="glyphicon glyphicon-log-in"></span> &nbsp;Ingresar</a></li>
        <!--<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>-->
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

        <!-- /.carousel -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
               
                </ol>
                      <div class="carousel-inner">
                        <div class="item active">
                          <img class="img-responsive" src="img/slide1.png">
                        </div>
                        <div class="item">
                          <img class="img-responsive" src="img/slide1.png">
                        </div>
                      </div>
                      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
        <!-- /.fincarousel -->



    <script src="{{asset('jquery-3.1.1/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('bootstrap-3.3.7/js/bootstrap.min.js')}}"></script>
</body>
</html>