@extends('index.template.main')

@section('title', 'Plataforma de Capacitación Docente')

@section('section')

        <style type="text/css">
          .img1{
            width: 100%;
            height: auto;
          }

          #grad1 {
           height: 200px;
           background: black; 
           background: linear-gradient(rgba(162, 148, 148, 0.9),rgba(0,0,0,0));
          }
        </style>

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
                <img class="img-responsive img1" src="{{asset('img/slides/slide5.png')}}">
              </center> 
            </div>
            <div class="item">
              <center>
                <img class="img-responsive img1" src="{{asset('img/slides/slide2.png')}}">
              </center> 
            </div>
            <div class="item">
              <center>
                <img class="img-responsive img1" src="{{asset('img/slides/slide3.png')}}">
              </center> 
            </div>
            <div class="item">
              <center>
                <img class="img-responsive img1" src="{{asset('img/slides/slide4.png')}}">
              </center> 
            </div>
            <div class="item">
              <center>
                <img class="img-responsive img1" src="{{asset('img/slides/slide1.png')}}">
              </center> 
            </div>
          </div>
        </div>
        <!-- carousel-slide./ -->
        <div class="repeat" id="cursos">
        </div>
        <br>
        <div class="container">
          <div class="col-lg-12">
            <h3>
              <center>
                <img src="{{asset('img/NuestrosCursos.png')}}">
                <hr>
              </center>
            </h3>
          </div>
          <!-- /.modulos -->
          <div class="row" style="text-align: center;">
            <div class="col-md-3">
                <div class="panel panel-default" style="background-color: #fff;border-radius: 10px;">
                    <center>
                        <img class="img-responsive" src="{{asset('img/C1P.jpg')}}" width="263" style="border-radius: 10px 10px 0px 0px;">
                    </center>
                    <div class="panel-heading">
                        <h5> Competencias Docentes</h5>
                        <a href="{{url('/CursoCompetenciasDocentes')}}" class="btn btn-default" style="background-color: #638742;color: #fff;"> Ver Curso </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default" style="background-color: #fff;border-radius: 10px;">
                    <center>
                        <img class="img-responsive" src="{{asset('img/C2P.jpg')}}" width="263" style="border-radius: 10px 10px 0px 0px;">
                    </center>
                    <div class="panel-heading">
                        <h5> Estrategias Docentes</h5>
                        <a href="{{url('/CursoEstrategiasDocentes')}}" class="btn btn-default" style="background-color: #ebbf65;color: #fff;"> Ver Curso </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default" style="background-color: #fff;border-radius: 10px;">
                    <center>
                        <img class="img-responsive" src="{{asset('img/C3P.jpg')}}" width="263" style="border-radius: 10px 10px 0px 0px;">
                    </center>
                    <div class="panel-heading">
                        <h5> Desarrollo y Planeación</h5>
                        <a href="{{url('/CursoDesarrolloPlaneacion')}}" class="btn btn-default" style="background-color: #bfcf83;color: #fff;"> Ver Curso </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default" style="background-color: #fff;border-radius: 10px;">
                    <center>
                        <img class="img-responsive" src="{{asset('img/C4P.jpg')}}" width="263" style="border-radius: 10px 10px 0px 0px;">
                    </center>
                    <div class="panel-heading">
                        <h5> Exámenes de Oposición</h5>
                        <a href="{{url('/CursoExamenesOposicion')}}" class="btn btn-default" style="background-color: #92CBD5;color: #fff;"> Ver Curso </a>
                    </div>
                </div>
            </div>
          </div>
          <!-- modulos./ -->
          <div class="row" style="margin: 20px;" id="experiencias">
          </div>
        </div>
        <div class="exp">
          <center>
            <h4 style="color: #fff;">EXPERIENCIAS</h4>
          </center>
        </div>
        <div class="container">
          <div class="col-md-6">
            <center>
               <a class="twitter-timeline" data-width="350" data-height="400" href="https://twitter.com/QuetzalEdu_?ref_src=twsrc%5Etfw">Tweets by QuetzalEdu_</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            </center>
          </div>
          <div class="col-md-6" style="margin-top: 20px;"><br>
            <div class="embed-responsive embed-responsive-16by9" id="grad1">
                <video src="{{asset('img/Videos/VideoQuetzalEdu.mov')}}" controls> Tu navegador no implementa el elemento <code>video</code>.
                </video>
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
            <p style="font-size: 15px"> Envíanos tus sugerencias, preguntas y comentarios ó siguenos en redes sociales, estamos para atenderte.</p>
            @if(Session::has('message'))
                  <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <center><span class="glyphicon glyphicon-envelope"></span> &nbsp;{{Session::get('message')}}</center>
                  </div>
            @endif
            <p></p>
           
            <div class="form-group">
                  {!!Form::open(['route'=>'mail.store','method'=>'POST'])!!}
                  <!--<p style="padding-top: 5px;"><input type="text" class="form-control" name="nombre" placeholder=" Nombre" required /></p>-->
                  {!!Form::text('name',null,['placeholder' => 'Nombre', 'class' => 'form-control', 'required'])!!} <br>
               
                  <!--<p style="padding-top: 5px;"><input type="email" class="form-control" name="email" placeholder=" E-mail" required /></p>-->
                  {!!Form::email('email',null,['placeholder' => 'Email' , 'class' => 'form-control', 'required'])!!} <br>
               
                  <!--<p style="padding-top: 5px;"><input type="text" class="form-control" name="asunto" placeholder=" Asunto"/></p>-->
                  {!!Form::text('asunto',null,['placeholder' => 'Asunto' , 'class' => 'form-control', 'required'])!!} <br>
              
                  <!--<p style="padding-top: 5px;"><textarea  rows="8" class="form-control" name="mensaje" placeholder=" Mensaje" required /></textarea></p>-->
                   <textarea rows="5" class="form-control" name="mensaje" placeholder="Mensaje" required></textarea>
                    <br>

                   <input type="submit" value="ENVIAR" class="btn btn-success btn-block">
                   {!!Form::close()!!}
            </div>


          </div>
          <div class="col-md-6">
            <iframe width="100%" height="467" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3747.4567033302724!2d-98.69627157851757!3d20.07318688321902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1a7ad8d82d9b3%3A0x90fe08bec037b949!2sCalle+Reforma%2C+Apepelco%2C+Pachuquilla%2C+Hgo.!5e0!3m2!1ses!2smx!4v1479506919256" width="600" height="445" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="repeat">
        </div>
        <footer>
          <div class="col-lg-12" style="background-color: #668933;">
              <div class="col-md-3" style="text-align: center;" >
                <h4 style="color: #fff;">QuetzalEdu</h4>
                <h6 style="color: #fff;"><a href="#cursos" style="color: #fff;">Cursos</a></h6>
                <h6 style="color: #fff;"><a href="quienes_somos" style="color: #fff;">¿Quiénes somos?</a></h6>
                <h6 style="color: #fff;"><a href="#experiencias" style="color: #fff;">Experiencias</a></h6>
                <h6 style="color: #fff;"><a href="#contacto" style="color: #fff;">Contácto</a></h6>
              </div>
              <div class="col-md-3" style="text-align: center;">
                <h4 style="color: #fff;">CONTACTO</h4>
                <h6 style="color: #fff;">contacto@quetzaledu.com</h6>
                <h6 style="color: #fff;">www.quetzaledu.com.mx</h6>
                <h6 style="color: #fff;">7712088011</h6>
                <h6 style="color: #fff;">7712208870</h6>
              </div>
              <div class="col-md-3" style="text-align: center;">
                <h4 style="color: #fff;">USUARIOS</h4>
                <!--<a href="{{url('/Aviso')}}" style="color: #ffffff;"> <h6 style="color: #fff;">Aviso de Privacidad</h6></a>-->
                <a href="{{url('/Politicas')}}" style="color: #ffffff;"><h6 style="color: #fff;">Políticas de Uso</h6></a>
                <a href="{{url('/Terminos')}}" style="color: #ffffff;"><h6 style="color: #fff;">Términos y Condiciones</h6></a>
                <a href="{{url('/Proteccion')}}" style="color: #ffffff;"><h6 style="color: #fff;">Protección de Datos</h6></a>
              </div>
              <div class="col-md-3 ">
                <center>
                <ul class="social-network social-circle"><br><br>
                <li><a href="https://www.youtube.com/channel/UC1dpKZ8Os3XHXT8mV4GSlAQ?view_as=subscriber" target="_blank" class="icoYouTube" title="YouTube"><i class="fa fa-youtube"></i></a></li>
                <li><a href="https://www.instagram.com/quetzal.edu1/?hl=es" target="_blank" class="icoInstagram" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                <li><a href="https://www.facebook.com/quetzal.edu.7" target="_blank" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/QuetzalEdu_" target="_blank" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                </ul>
                </center>
              </div>
          </div>
        </footer>
@endsection

   