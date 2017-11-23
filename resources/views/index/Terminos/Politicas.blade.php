@extends('index.template.main')

@section('title', 'Plataforma de Capacitación Docente')

@section('section')

<style>

html,body 
  p {
    line-height: 2em; 
    font-size: 12pt;
  }

  .imgn1 {
    width: 100%;
    height: auto; 
}
</style>

<!-- <img class="imgn1" class="img-responsive" src="{{asset('img/333.png')}}"> -->
<img class="imgn1" class="img-responsive" src="{{asset('img/derechos2.png')}}">
<div class="col-md-12">
  <div class="col-md-10 col-md-offset-1">
    <center>
    <br><h3>POLÍTICAS DE PRIVACIDAD DE SICIPAED <i class="fa fa-balance-scale"></i></h3><br>
    </center>
     <h6><p class="text-justify">
    Aviso dirigido a los titulares de datos personales que obran en posesión de SICIPAED. 
    </p></h6>

    <h6><p class="text-justify">
    Centro de Investigación Capacitación e Innovación en Tecnologías para la Educación S. de R. L. de C. V.  (en lo sucesivo la SICIPAED), con domicilio en Privada de los Andes, Villas de Pachuca, 42083 Pachuca de Soto, Hgo., hace de su conocimiento que los datos personales de usted, incluyendo los sensibles, que actualmente o en el futuro obren en nuestras bases de datos serán tratados y/o utilizados por SICIPAED y/o por aquellos terceros que, por la naturaleza de sus trabajos o funciones tengan la necesidad de tratar y/o utilizar sus datos personales; con el propósito de i) cumplir con aquellas obligaciones que se derivan de la relación jurídica que existente entre usted como titular de los datos personales y SICIPAED ii) utilizar y/o tratar sus datos personales con fines estadísticos, iii) utilizar y/o tratar sus datos personales con fines publicitarios y de fomento, promoción y difusión de acciones sociales, iv) difundir, comunicar y/o publicar sus datos personales en cualquier medio de comunicación electrónico, v) utilizar sus datos personales como base de referencia, y vi) enviarle a su domicilio invitaciones a eventos organizados por SICIPAED. SICIPAED podrá transferir los datos personales que obren en sus bases de datos a terceras personas, nacionales o extranjeras, como pudieran ser de manera enunciativa: Asociaciones Civiles, Instituciones de Asistencia Privada, Organismos Descentralizados, Instituciones de Crédito y Hospitales Públicos y/o Privados, salvo que los titulares respectivos manifiesten expresamente su oposición, en términos de lo dispuesto por la Ley Federal de Protección de Datos Personales en Posesión de los Particulares (la Ley).
    </p></h6>

    <h6 style="margin-bottom: 50px;"><p class="text-justify">
    SICIPAED se reserva el derecho de cambiar, modificar, complementar y/o alterar el presente aviso, en cualquier momento, en cuyo caso se hará de su conocimiento a través de su publicación en las siguientes páginas web: http://quetzaledu.com.mx/ http://sicipaed.com.mx/
    </p></h6>

  </div>
</div>


        <footer>
          <div class="col-lg-12" style="background-color: #668933;">
            <div class="repeat">
            </div>
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

   