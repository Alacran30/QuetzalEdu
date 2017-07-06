@extends('index.template.main')

@section('title', 'Plataforma de Capacitación Docente')

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
        <div class="repeat" id="cursos">
        </div>
        <br>
        <div class="container">
          <div class="col-lg-12">
            <h3>
              <center>
                ¿En qué desea capacitarse?
                <hr>
              </center>
            </h3>
          </div>
        <!--modulos-->
          <div class="row" style="text-align: center;">
            <div class="col-md-3">
                <div class="panel panel-default" style="background-color: #7fa57b;border-radius: 10px;">
                    <div class="panel-body">
                    <center>
                        <img class="img-responsive" src="{{asset('img/competencias_docentes.png')}}">
                    </center>
                    </div>
                    <div class="panel-heading">
                        <h5> Competencias Docentes</h5>
                        <a href="" class="btn btn-default"> Ver Curso </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default" style="background-color: #c1d188;border-radius: 10px;">
                    <div class="panel-body">
                    <center>
                        <img class="img-responsive" src="{{asset('img/estrategias_docentes.png')}}">
                    </center>
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
                    <center>
                        <img class="img-responsive" src="{{asset('img/desarrollo_planeacion.png')}}">
                    </center>
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
                    <center>
                        <img class="img-responsive" src="{{asset('img/capacitacion_examenes.png')}}">
                    </center>
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
        <div id="experiencias"></div>
        <div class="exp">
          <center>
            <h4 style="color: #fff;">EXPERIENCIAS</h4>
          </center>
        </div>
        <div class="container">
          <div class="col-md-6">
            <center>
               <a class="twitter-timeline" data-width="450" data-height="450" href="https://twitter.com/AdWordsES">Tweets by AdWordsES</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            </center>
          </div>
          <div class="col-md-6" style="margin-top: 20px;">
            <div class="embed-responsive embed-responsive-4by3">
               <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Y12j9r55aUc"></iframe>
            </div>
          </div>
        </div>
        <div class="exp" id="contacto">
          <center>
            <h4 style="color: #fff;">CONTÁCTANOS</h4>
          </center>
        </div>
        <div class="container">
          <div class="col-md-6">
            <span style="text-align: justify;">Envíanos tus sugerencias, preguntas y comentarios o siguenos en redes sociales, estamos para atenderte. </span>
            <hr>
            <form class="form-group">
              <div class="form-group">
                <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
              </div>
              <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Email" required>
              </div>
              <div class="form-group">
                <input type="text" name="asunto" class="form-control" placeholder="Asunto" required>
              </div>
              <div class="form-group">
                <textarea rows="5" class="form-control" name="mensaje" placeholder="Mensaje" required /></textarea>
              </div>
                <input type="submit" class="btn btn-success btn-block" value="Enviar">
            </form>
          </div>
          <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3747.4567033302724!2d-98.69627157851757!3d20.07318688321902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1a7ad8d82d9b3%3A0x90fe08bec037b949!2sCalle+Reforma%2C+Apepelco%2C+Pachuquilla%2C+Hgo.!5e0!3m2!1ses!2smx!4v1479506919256" width="600" height="445" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="repeat">
        </div>
        <footer>
          <div class="col-lg-12" style="background-color: #668933;">
              <div class="col-md-3" style="text-align: center;" >
                <h4 style="color: #fff;">INICIO</h4>
                <h6 style="color: #fff;">¿Quiénes somos?</h6>
                <h6 style="color: #fff;">Cursos</h6>
                <h6 style="color: #fff;">Experiencias</h6>
                <h6 style="color: #fff;">Contácto</h6>
              </div>
              <div class="col-md-3" style="text-align: center;">
                <h4 style="color: #fff;">CONTACTO</h4>
                <h6 style="color: #fff;">correo@quetzaledu.com</h6>
                <h6 style="color: #fff;">correo@gmail.com</h6>
                <h6 style="color: #fff;">www.página.com</h6>
                <h6 style="color: #fff;">5529324256</h6>
              </div>
              <div class="col-md-3" style="text-align: center;">
                <h4 style="color: #fff;">USUARIOS</h4>
                <h6 style="color: #fff;">Docentes Participantes</h6>
                <h6 style="color: #fff;">Docentes Capacitadores</h6>
                <h6 style="color: #fff;">Noticias</h6>
                <h6 style="color: #fff;">Blog</h6>
              </div>
              <div class="col-md-3 ">
                <ul class="social-network social-circle"><br><br>
                <li><a href="#" class="icoYouTube" title="YouTube"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#" class="icoInstagram" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                </ul>
              </div>
          </div>
        </footer>
@endsection

   