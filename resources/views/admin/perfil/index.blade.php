@extends('admin.template.main')

@section('title')

Control de pagos

@endsection

@section('section')


<style>
  @import url('//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');

body {
    background: white;
}

.navbar-fixed-top {
    top: 0;
    border-width: 0 0 1px;
}

.navbar-default .navbar-nav #user-profile {
    height: 50px;
    padding-top: 15px;
    padding-left: 58px;
}

.navbar-default .navbar-nav #user-profile img {
    height: 45px;
    width: 45px;
    position: absolute;
    top: 2px;
    left: 8px;
    padding: 1px;
}

#wrapper {
    padding-top: 0px;
    padding-left: 0;
    -webkit-transition: all .5s ease;
    -moz-transition: all .5s ease;
    -o-transition: all .5s ease;
    transition: all .5s ease;
}

@media (min-width: 992px) {
    #wrapper {
        padding-left: 225px;
    }
}

@media (min-width: 992px) {
    #wrapper #sidebar-wrapper {
        width: 230px;
    }
}

#sidebar-wrapper {
    border-right: 1px solid #113d69;
}

#sidebar-wrapper {
    z-index: 1000;
    position: fixed;
    left: 225px;
    width: 0;
    height: 100%;
    margin-left: -225px;
    overflow-y: auto;
    background: #113d69;
    -webkit-transition: all .5s ease;
    -moz-transition: all .5s ease;
    -o-transition: all .5s ease;
    transition: all .5s ease;
}

#sidebar-wrapper .sidebar-nav {
    position: absolute;
    top: 0;
    width: 225px;
    font-size: 15px;
    margin: 0;
    padding: 0;
    list-style: none;
}

#sidebar-wrapper .sidebar-nav li {
    text-indent: 0;
    line-height: 55px;
    /*ojo*/
}

#sidebar-wrapper .sidebar-nav li a {
    display: block;
    text-decoration: none;
    color: #113d69;
}

.sidebar-nav li:first-child a {
    background: #113d69 !important;
    color: #fff !important;
}

#sidebar-wrapper .sidebar-nav li a .sidebar-icon {
    width: 45px;
    height: 45px;
    font-size: 19px;
    padding: 0 2px;
    display: inline-block;
    text-indent: 0px;
    margin-right: 5px;
    color: #fff;
    float: left;
}

#sidebar-wrapper .sidebar-nav li a .caret {
  position: absolute;
  right: 23px;
  top: auto;
  margin-top: 20px;
}

#sidebar-wrapper .sidebar-nav li ul.panel-collapse {
    list-style: none;
    -moz-padding-start: 0;
    -webkit-padding-start: 0;
    -khtml-padding-start: 0;
    -o-padding-start: 0;
    padding-start: 0;
    padding: 0;
}

#sidebar-wrapper .sidebar-nav li ul.panel-collapse li i {
    margin-right: 10px;
}

#sidebar-wrapper .sidebar-nav li ul.panel-collapse li {
    text-indent: 15px;
}

@media (max-width: 992px) {
    #wrapper #sidebar-wrapper {
        width: 45px;
    }
    #wrapper #sidebar-wrapper #sidebar #sidemenu li ul {
        position: fixed;
        left: 45px;
        margin-top: -45px;
        z-index: 1000;
        width: 200px;
        height: 0;
    }
}

.sidebar-nav li:first-child a {
    background: #113d69 !important;
    color: #fff !important;
}

.sidebar-nav li:nth-child(2) a {
    background: #113d69 !important;
    color: #fff !important;
}

.sidebar-nav li:nth-child(3) a {
    background: #113d69 !important;
    color: #fff !important;
}

.sidebar-nav li:nth-child(4) a {
    background: #113d69 !important;
    color: #fff !important;
}

.sidebar-nav li:nth-child(5) a {
    background: #113d69 !important;
    color: #fff !important;
}
.sidebar-nav li:nth-child(6) a {
    background: #113d69 !important;
    color: #fff !important;
}
.sidebar-nav li:nth-child(7) a {
    background: #113d69 !important;
    color: #fff !important;
}
/**** Luputa directivo ****/
#custom-search-input{
    padding: 3px;
    border: solid 1px #E4E4E4;
    border-radius: 6px;
    background-color: #fff;
}

#custom-search-input input{
    border: 0;
    box-shadow: none;
}

#custom-search-input button{
    margin: 2px 0 0 0;
    background: none;
    box-shadow: none;
    border: 0;
    color: #666666;
    padding: 0 8px 0 10px;
    border-left: solid 1px #ccc;
}

#custom-search-input button:hover{
    border: 0;
    box-shadow: none;
    border-left: solid 1px #ccc;
}

#custom-search-input .glyphicon-search{
    font-size: 23px;
}

/***FIN LUPITA***/

.pad {
    padding: 15px 15px 15px 15px;
}

.pb {
    border-bottom: 3px solid #c1d188;
}

<link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
.letra {
  font-family: 'ABeeZee';font-size: 22px;
}

/*.radi {
    border: 2px solid #162e21;
    padding: 10px 40px; 
    width: 1000px;
    border-radius: 10px;
}*/

.list {
    display: block;
    background-color: rgba(0,0,0,0);
    box-shadow: 0 1px 3px rgba(0,0,0,0),0 1px 2px rgba(0,0,0,0);
    border-radius: 2px;
    transition: all .2s ease-in-out;
}
p.padding {
    padding-left: 0.3cm;
}

#circulo { 
   width: 20px;
   height: 20px;
   background:#008040; 
   -moz-border-radius: 70px; 
   -webkit-border-radius: 70px; 
   border-radius: 70px;
}

.aside{

  text-align: left;
  font-size: 1em;
}

.opc{

    font-size: 16px;
    color: #000;
}



</style>

<script>
    $(document).ready(function(){
$("#mytable #checkall").click(function () {
        if ($("#mytable #checkall").is(':checked')) {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", true);
            });

        } else {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", false);
            });
        }
    });
    
    $("[data-toggle=tooltip]").tooltip();
});
</script>






<div class="col-md-12">

  <div class="col-md-3">
    <body>
                            <!--<li class="dropdown">
                                <a id="user-profile" href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="http://lorempixel.com/100/100/people/9/" class="img-responsive img-thumbnail img-circle"> Username</a>
                                <ul class="dropdown-menu dropdown-block" role="menu">
                                    <li><a href="#">Profil edition</a></li>
                                    <li><a href="#">Admin</a></li>
                                    <li><a href="#">Logout</a></li>
                                </ul>
                            </li>-->
                   
<center>
    <div id="wrapper" >
        <div id="sidebar-wrapper" >
            <aside id="sidebar" >
                <ul id="sidemenu" class="sidebar-nav">
                    <li style="margin-top: 15px;margin-bottom: 0px;color: #fff;">
                        <span class="sidebar-title"><strong><i class="fa fa-circle" style="color: #5cb85c;"></i> &nbsp;Administrador</strong></span>
                    </li>
                    <li style="margin-bottom: 25px;">
                        <span id="user-profile" href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:#fff;"><img src='{{url('img/perfil/'.Auth::user()->photo)}}' class="img-circle" style="border: solid 2px;" width=70px;> &nbsp;<strong>{!!Auth::user()->username !!}</strong></span><br>
                    </li>
                    <li> 
                            <a href="{{url('/Escritorio')}}">
                            <span class="sidebar-icon"><img class="padding" class="img-responsive" src="{{asset('img/AdminSide1.png')}}"></a></span>
                            <a href="{{url('/inicio')}}" class="aside">Escritorio
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/areas_conocimiento')}}">
                            <span class="sidebar-icon"><img class="padding" class="img-responsive" src="{{asset('img/AdminSide2.png')}}"></a></span>
                            <a href="{{url('/areas_conocimiento')}}" class="aside"><span class="sidebar-title">Áreas de conocimiento</span>
                        </a>
                        <ul id="submenu-3" class="panel-collapse collapse panel-switch" role="menu">
                        </ul>
                    </li>

                    <li>
                        <a href="{{url('/areas_conocimiento')}}">
                            <span class="sidebar-icon"><img class="padding" class="img-responsive" src="{{asset('img/AdminSide3.png')}}"></a></span>
                            <a href="{{route('competencia.index')}}" class="aside"><span class="sidebar-title">Gestion de cursos</span>
                        </a>
                        <ul id="submenu-3" class="panel-collapse collapse panel-switch" role="menu">
                        </ul>
                    </li>
                    <!-- <li>
                        <a class="accordion-toggle collapsed toggle-switch aside" data-toggle="collapse" href="#submenu-2">
                            <span class="sidebar-icon"><img class="padding" class="img-responsive" src="{{asset('img/AdminSide3.png')}}"></span>
                            <span class="sidebar-title">Crear cursos</span>
                            <b class="caret"></b>
                        </a> 
                        <ul id="submenu-2" class="panel-collapse collapse panel-switch" role="menu">
                            <li ><a href="{{url('/1CD')}}" class="aside"><i class="fa fa-circle"></i>Competencias Docentes</a></li>
                            <li><a href="{{url('/2ED')}}" class="aside"><i class="fa fa-circle"></i>Estrategias Docentes</a></li>
                            <li><a href="{{url('/3PD')}}" class="aside"><i class="fa fa-circle"></i>Planeación Docente</a></li>
                            <li><a href="{{url('/4EO')}}" class="aside"><i class="fa fa-circle"></i>Exámenes de Oposición</a></li>
                        </ul>
                    </li> -->
                    <li>
                        <a href="{{url('/users')}}">
                            <span class="sidebar-icon"><img class="padding" class="img-responsive" src="{{asset('img/AdminSide4.png')}}"></a></span>
                            <a href="{{url('/users')}}" class="aside"><span class="sidebar-title">Gestión de usuarios</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/ControlPagos')}}"> 
                            <span class="sidebar-icon"><img class="padding" class="img-responsive" src="{{asset('img/AdminSide5.png')}}"></a></span>
                            <a href="{{url('/pagos')}}" class="aside"><span class="sidebar-title">Control de pagos</span>
                        </a>
                    </li>
                </ul>
            </aside>            
        </div>
        <main id="page-content-wrapper" role="main">

          </div>
        </main>
    </div> 

    </center>
</body>


  </div><!-- FIN DIV 3-->

  
  <br><div class="col-md-10 col-md-offset-2"><br>
  
<!--
<div style="border: solid 2px #162e21;margin-top: -5px;padding: 535px;padding-top: 0px;">
  
<center>
    <div class="col-lg-3">
        <center>
            <img class="img-responsive" src="{{asset('img/avatar2.png')}}">
        </center>
    </div>

    <div class="col-lg-9">

        <h3 class="letra">Bienvenido</h3><h4>Omar Martínez</h4>
        <h4>Plataforma educativa para el desarrollo de competencias docentes en la 
educación básica y media superior.</h4>
    </div> <br>
     
  </div>

</center>-->

<div class="list" style="background-color:#ffffff;">
                

     <div class="row">
  <div class="col-lg-3 col-md-offset-1">
    <form method="post" action='{{url("perfil/updateImage")}}' enctype="multipart/form-data">
    <center>
    {{csrf_field()}}
    <img style="width: 235px; height: 235px;margin-right: 10px;margin-top: -10px;border: solid 5px #c1d188;" src='{{url('img/perfil/'.Auth::user()->photo)}}'>
   <!-- <img src='{{url('img/perfil/'.$user->persona->image)}}' class="w3-circle" style="height:106px;width:106px" alt="Avatar"> -->
       <hr>
        <input type="file" name="imagen">
        <div class="text-danger">{{ $errors->first('imagen')}}</div>
        <br>
        <button type="submit" name="imagen" class="btn btn-success"> Actualizar Imagen </button>
        <br>
    <br>
    <img src="{{asset('img/Q_Quetzal.png')}}">
    </center>
    </form>
  </div>




  <div class="col-lg-6" style="margin-top: -30px;">



<br>
 <ul class="nav nav-tabs" style="margin-top: -15px;">
                  <li class="active"><a href="#info-tab" data-toggle="tab">DATOS PERSONALES <i class="fa"></i></a></li>
                  <li><a href="#adress-tab" data-toggle="tab">DIRECCIÓN <i class="fa"></i></a></li>
                  <li><a href="#profesional-tab" data-toggle="tab">INFORMACIÓN PROFESIONAL <i class="fa"></i></a></li>
              </ul>
              <br>
  <div class="tab-content">
    <div class="tab-pane active" id="info-tab">


  {!! Form::open(['route' => 'perfil.store', 'method' => 'POST']) !!}
   
  <label>Nombre(s) *</label>
  {!! Form::text('nombre', $user->persona->nombre, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required']) !!}

  <label>Apellido Paterno *</label>
  {!! Form::text('paterno', $user->persona->paterno, ['class' => 'form-control', 'placeholder' => 'Apellido Paterno', 'required']) !!}

  <label>Apellido Materno *</label>
  {!! Form::text('materno', $user->persona->materno, ['class' => 'form-control', 'placeholder' => 'Apellido Materno', 'required']) !!}

  {!! Form::label('genero', 'Género *') !!}
  {!! Form::select('genero', ['Hombre' => 'Hombre', 'Mujer' => 'Mujer'], $user->persona->genero, ['class' => 'form-control']) !!}

  <label>Fecha de Nacimiento *</label>
  {!! Form::date('nacimiento', $user->persona->nacimiento, ['class' => 'form-control', 'required']) !!}

  <label>Teléfono Oficina</label>
  {!! Form::text('telcasa', $user->persona->telcasa, ['class' => 'form-control', 'placeholder' => 'Teléfono de Oficina', 'required']) !!}

  <label>Teléfono Móvil</label>
  {!! Form::text('telmovil', $user->persona->telmovil, ['class' => 'form-control', 'placeholder' => 'Teléfono Móvil', 'required']) !!}

  </div>

  <div class="tab-pane" id="adress-tab">
     <label>Calle *</label>
  {!! Form::text('calle', $user->persona->direccion->calle, ['class' => 'form-control', 'placeholder' => 'Calle']) !!}

     <label>Número Interior *</label>
  {!! Form::text('numeroint', $user->persona->direccion->numeroint, ['class' => 'form-control', 'placeholder' => 'Número interior']) !!}
  
     <label>Número Exterior *</label>
  {!! Form::text('numeroext', $user->persona->direccion->numeroext, ['class' => 'form-control', 'placeholder' => 'Número exterior']) !!}

      <label>Colonia *</label>
  {!! Form::text('colonia', $user->persona->direccion->colonia, ['class' => 'form-control', 'placeholder' => 'Colonia']) !!}
  
     <label>Municipio *</label>
  {!! Form::text('municipio', $user->persona->direccion->municipio, ['class' => 'form-control', 'placeholder' => 'Municipio']) !!}

      <label>Estado *</label>
  {!! Form::text('estado', $user->persona->direccion->estado, ['class' => 'form-control', 'placeholder' => 'Estado']) !!}

      <label>Código Postal *</label>
  {!! Form::text('cp', $user->persona->direccion->cp, ['class' => 'form-control', 'placeholder' => 'Código postal']) !!}

  </div>


   <div class="tab-pane" id="profesional-tab">
      <label>Nivel de Estudios *</label>
  {!! Form::text('nivel', $user->persona->profesional->nivel, ['class' => 'form-control', 'placeholder' => 'Nivel de Estudios']) !!}
      <label>Especialidad *</label>
  {!! Form::text('especialidad', $user->persona->profesional->especialidad, ['class' => 'form-control', 'placeholder' => 'Especialidad']) !!}
      <label>Experiencia Docente</label>
  {!! Form::textarea('experiencia', $user->persona->profesional->experiencia, ['class' => 'form-control', 'placeholder' => 'Experiencia']) !!}
   </div>

  </div>

  <br>
  <a class="btn btn-danger" href="{{url('/inicio')}}"> Cancelar</a>

  <input type="submit" value="Guardar" class="btn btn-success">

  {!! Form::close() !!}
  
  <!--<div style="border: solid 2px #c1d188;margin-top: -5px;padding: 10px;padding-top: 0px;">
  <div class="col-lg-6">
    <a class="btn btn-success btn-block" style="background-color:#7fa57b;"> Mensajes </a>
  </div>
  <div class="col-lg-6">
    <a class="btn btn-warning btn-block" style="background-color:#c1d188;"> Asignar Actividad </a>
  </div>
  <hr>
  <textarea class="form-control" placeholder="Escriba su mensaje aquí..."></textarea>
  <hr>
  <i class="fa fa-book fa-2x" style="padding: 4px;"></i>&nbsp;
  <i class="fa fa-clipboard fa-2x" style="padding: 4px;"></i>&nbsp;
  <i class="fa fa-chain fa-2x" style="padding: 4px;"></i>&nbsp;
  <a class="btn btn-warning">Cancelar</a> <a class="btn btn-success" >Enviar</a>
  <br>
  <br>
  </div>
  <div style="border: solid 2px #7fa57b;margin-top: -5px;padding: 10px;padding-top: 0px;margin-top: 10px;">
    <h5 style="color:#7fa57b">Publicaciones</h5>
    <hr>
    <h6 style="color:#7fa57b">Sé el primero en publicar...Comienza la Conversación</h6>
  </div>-->
  </div>



  <!-- <div class="col-lg-3">
  <center>
    <h5 style="border: solid 5px #c1d188;padding: 5px;margin-right: 20px;color:#7fa57b;margin-top: -5px;">GESTIÓN DE GRUPOS</h5>

    <h5 style="border: solid 5px #c1d188;background-color:#c1d188;padding: 5px;margin-right: 20px;margin-top: -5px;color: #fff;">ADMINISTRAR GRUPOS</h5>

    <h5 style="border: solid 5px #c1d188;background-color:#c1d188;padding: 5px;margin-right: 20px;margin-top: -5px;color: #fff;">CREAR GRUPO</h5>

    <h5 style="border: solid 5px #c1d188;background-color:#c1d188;padding: 5px;margin-right: 20px;margin-top: -5px;color: #fff;">UNIRSE A UN GRUPO</h5>

    <h5 style="border: solid 5px #c1d188;padding: 5px;color:#7fa57b;margin-right: 20px;margin-top: -5px;">MIS GRUPOS</h5>

    <h6 style="border: solid 5px #7fa57b;background-color:#7fa57b;padding: 5px;margin-right: 20px;margin-top: -5px;color: #fff;">Competencias Docentes</h6>
    <h6 style="border: solid 5px #7fa57b;background-color:#7fa57b;padding: 5px;margin-right: 20px;margin-top: -5px;color: #fff;">Estrategias Docentes</h6>
    <h6 style="border: solid 5px #7fa57b;background-color:#7fa57b;padding: 5px;margin-right: 20px;margin-top: -5px;color: #fff;">Planeación y Desarrollo</h6>
    <h6 style="border: solid 5px #7fa57b;background-color:#7fa57b;padding: 5px;margin-right: 20px;margin-top: -5px;color: #fff;">Exámenes de Oposición</h6>
    </center>
  </div> -->
</div>

            
</div>
</div>
</div>
</div><!-- FIN DIV12-->



@endsection