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
    <br><h3> PROTECCIÓN DE DATOS SICIPAED <i class="fa fa-balance-scale"></i></h3><br>
    </center>
      <h6><p class="text-justify">


        SICIPAED en su condición de titular y responsable de la presente página Web, en cumplimiento de lo establecido en el artículo 10 de la Ley 34/2002, de 11 de julio, de servicios de la sociedad de la información y de comercio electrónico, pone a disposición de los usuarios la siguiente información de contacto : <br>
        
        www.quetzaledu.com.mx<br>
        7712088011<br>
        7712208870<br>

        En cumplimiento de lo que se dispone en el artículo 5 de la Ley Orgánica 15/1999, de 13 de diciembre, de Protección de Datos de Carácter Personal (LOPD), le informamos que los datos de carácter personal que nos proporcione rellenando cualquier formulario de contacto electrónico que aparece en el sitio Web se recogerán en ficheros cuyo responsable es SICIPAED.<br>

        En virtud de lo dispuesto en el artículo 15 y siguientes de la LOPD y en los términos que indica su Reglamento de desarrollo aprobado por Real Decreto 1720/2007, de 21 de diciembre (RLOPD), en cualquier momento usted podrá ejercer sus derechos de acceso, rectificación, cancelación y oposición, dirigiéndose por escrito a la dirección postal o electrónica anteriormente descrita.<br>

        SICIPAED se compromete a garantizar la confidencialidad de los datos solicitados en su sitio web conforme a la normativa legal vigente.<br>

        SICIPAED ha adoptado el Nivel de Seguridad de Protección de Datos Personales legalmente requerido y ha implantado todos los medios y medidas técnicas para evitar la pérdida, mal uso, alteración y acceso no autorizado de los datos personales facilitados.<br>

        SICIPAED se reserva el derecho de modificar la presente política para adaptarla cuando sea necesario a las novedades legislativas.<br>

        Mediante la aceptación de la presente política de privacidad, usted declara que los datos que proporciona para su tratamiento son exactos y veraces, responsabilizándose de cualquier perjuicio que puediera provocar la inexactitud de los mismos.<br>

        El hecho de que no introduzca los datos solicitados o de manera incorrecta tendrá como consecuencia que no podamos atender debídamente su solicitud.<br>

        SICIPAED se compromete a tratar de una manera absolutamente confidencial los datos proporcionados y los utilizará sólo para mantener al usuario informado de nuestros servicios.<br>

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

   