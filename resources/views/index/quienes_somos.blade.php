@extends('index.template.main')

@section('title', 'Quienes somos')

@section('section')
		
	<div class="container">
    <div class="page-header">
      <center>
        <img class="img-responsive" src="{{asset('img/QSomos.png')}}">
      </center>
    </div>
    <ul class="timeline">
    <li>
      <div class="timeline-badge quetzal"><img src="{{asset('img/QSQ.png')}}"></div><br><br>
    </li>
        <li>
          <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">¿Quiénes Somos?</h4>
            </div>
            <div class="timeline-body">
              <h6><p class="text-justify">SICIPAED es una empresa de investigción y desarrollo de software desde su funcion en 2010, SICIPAED se encuentra en un continuo proceso de crecimiento a base de proveer a sus clientes con soluciones y servicios de Tecnologías de la Información de la más alta calidad y rentabilidad.<p>
              <p class="text-justify">Nuestra misión es establecer alianzas estratégicas con nuestros clientes para el desarrollo de sus proyectos tecnológicos. El éxito de nuestros clientes es nuestro éxito, y ayudar a mejorar su posición competitiva y hacer que ésta evoluvione en el futuro es la finalidad principal de nuestro trabajo. Un dinámico y joven equipo de profesionales, con una sólida formación académica y avanzado perfil, nos permite ser el socio tecnológico fiable que su empresa necesita. 
          </div></h5>
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
          <div class="timeline-panel">
            <!--<div class="timeline-heading">
              <h4 class="timeline-title">¿Quiénes Somos?</h4>
            </div>-->
            <div class="timeline-body">
             <center><h5><p class="text-justify">La plataforma educativa para el desarrollo de competencias docentes en la educación básica y media superior, es un proyecto apoyado por el Consejo Nacional de Ciencia y Tecnología de México.<p><br>
           Bajo la iniciativa de la empresa SICIPAED, S. de R.L. de C.V.</h5></center>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-badge danger"><i class="glyphicon glyphicon-credit-card"></i></div>
          <div class="timeline-panel">
          <center>
            <img class="img-responsive" src="{{asset('img/logoSICIPAED.png')}}" style="max-width: 50%;">
        </center>
            <!--<div class="timeline-heading">
              <h4 class="timeline-title">¿Quiénes Somos?</h4>
            </div>-->
            <!--<div class="timeline-body">
              <h6><p class="text-justify">SICIPAED es una empresa de investigción y desarrollo de software desde su funcion en 2010, SICIPAED se encuentra en un continuo proceso de crecimiento a base de proveer a sus clientes con soluciones y servicios de Tecnologías de la Información de la más alta calidad y rentabilidad.<p>
            </div>-->
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">¿Quiénes Somos?</h4>
            </div>
            <div class="timeline-body">
              <h6><p class="text-justify">SICIPAED es una empresa de investigción y desarrollo de software desde su funcion en 2010, SICIPAED se encuentra en un continuo proceso de crecimiento a base de proveer a sus clientes con soluciones y servicios de Tecnologías de la Información de la más alta calidad y rentabilidad.<p>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-badge info"><i class="glyphicon glyphicon-floppy-disk"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">¿Quiénes Somos?</h4>
            </div>
            <div class="timeline-body">
              <h6><p class="text-justify">SICIPAED es una empresa de investigción y desarrollo de software desde su funcion en 2010, SICIPAED se encuentra en un continuo proceso de crecimiento a base de proveer a sus clientes con soluciones y servicios de Tecnologías de la Información de la más alta calidad y rentabilidad.<p>
              <!--<hr>
              <div class="btn-group">
                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                  <i class="glyphicon glyphicon-cog"></i> <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div>-->
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">¿Quiénes Somos?</h4>
            </div>
            <div class="timeline-body">
              <h6><p class="text-justify">SICIPAED es una empresa de investigción y desarrollo de software desde su funcion en 2010, SICIPAED se encuentra en un continuo proceso de crecimiento a base de proveer a sus clientes con soluciones y servicios de Tecnologías de la Información de la más alta calidad y rentabilidad.<p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">¿Quiénes Somos?</h4>
            </div>
            <div class="timeline-body">
              <h6><p class="text-justify">SICIPAED es una empresa de investigción y desarrollo de software desde su funcion en 2010, SICIPAED se encuentra en un continuo proceso de crecimiento a base de proveer a sus clientes con soluciones y servicios de Tecnologías de la Información de la más alta calidad y rentabilidad.<p>
            </div>
          </div>
        </li>
    </ul>
</div>





@endsection