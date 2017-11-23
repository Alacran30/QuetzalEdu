@extends('admin.template.main')

@section('title')

Lista de cursos

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

.button1 {
    position: relative;
    background-color: #4caf50;
    border: none;
    font-size: 12px;
    color: #FFFFFF;
    padding: 8px;
    width: 220px;
    border-radius: 3px;
    text-align: center;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    text-decoration: none;
    overflow: hidden;
    cursor: pointer;
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
                            <a href="{{route('competencia.index')}}" class="aside"><span class="sidebar-title"><font color="#94c160">Gestion de cursos</font></span>
                        </a>
                        <ul id="submenu-3" class="panel-collapse collapse panel-switch" role="menu">
                        </ul>
                    </li>
                    
                    <!--<li>
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
                        <a href="{{url('/pagos')}}"> 
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
                <div class="col-lg-2 col-lg-offset-1">
                <img class="img-responsive" src="{{asset('img/Admin5.png')}}">
                </div>

                <div class="col-lg-9">
                <h5><strong>Lista de cursos.</strong></h5>
                <h5>Plataforma educativa para el desarrollo de competencias docentes en la 
educación básica y media superior (etapa 1).</h5><br>
                </div>
                <img class="img-responsive" src="{{asset('img/cintaAdmin2.png')}}"><br>
                 <div class="col-lg-10 col-lg-offset-1">
                 <a href="{{ route('competencia.create') }}"><button class="button1" class="btn btn-success"> <i class="fa fa-plus"></i> &nbsp;Registrar Curso</button></a>

                 <form class="navbar-form pull-right" style="margin-top: 0px;margin-right: -15px;">
  <div class="input-group">
    {!! Form::text('area_conocimiento',null, ['class' => 'form-control', 'aria-describedby' => 'search', 'placeholder' => ' Buscar | Título de curso']) !!}
    <span class="input-group-addon" id="search" style="background-color:#dff0d8;"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
  </div>
</form>

                <br>
                <br>



                 @if(Session::has('message-info'))
  <div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
      <center>
    <span class="fa fa-user"></span> 
      {{Session::get('message-info')}}
    </center>
  </div>
@endif

@if(count($errors) > 0)
    <div class="alert alert-danger" role="alert">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error}}</li>
        @endforeach
      </ul>
    </div>
@endif

@include('flash::message')


               
                 
                 <table class="table table-striped table-responsive">

   <thead style="background-color: #113d69;color: #fff;">
                <th>ID</th>
                <th>Título de curso</th>
                <th>Área de conocimiento</th>
                <th>Contenido</th>
                <th>Editar</th>
                <th style="text-align: center;">Eliminar</th> 
              </thead>

  
  <tbody>
    @foreach($competencia as $competencias)
      <tr>
                    <td>
                        @if($competencias->id < 10)
                          <span class="label label-default" style="background-color: #777;">0{{$competencias->id}}</span>
                        @else
                          <span class="label label-default" style="background-color: #777;">{{$competencias->id}}</span>
                        @endif
                    </td>
                    <td>
                        {{$competencias->titulo}}
                    </td>
                    <td>
                        {{$competencias->area->area_conocimiento}}
                    </td>
                    <td>
                        <a href="" class="btn btn-warning action"> <i class="fa fa-briefcase"></i></a>
                    </td>
                    <td>
                        <a href="" class="btn btn-warning action"> <span class="glyphicon glyphicon-pencil"></span></a>
                    </td>
                    <td>
                        <a href="{{ route('competencia.destroy', $competencias->id) }}" onclick="return confirm('¿Está seguro de eliminar el curso definitivamente?')" class="btn btn-danger action"> <span class="glyphicon glyphicon-trash"></span></a>
                    </td>
                </tr>
    @endforeach
  </tbody>
</table>
<center>

</center>
        
                  </div>


                  <!-- line modal -->
<div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="margin-top: 50px;">
  <div class="modal-dialog" >
  <div class="modal-content" >
    <div class="modal-header" style="background-color: #113D69;">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" style="color: gray;">×</span><span class="sr-only">Close</span></button>
      <br>
      <h4 class="modal-title" id="lineModalLabel" style="color: #fff;"> <span class="glyphicon glyphicon-plus"></span> Agregar área de conocimiento</h4>
     
    </div>
    <div class="modal-body">
      {!! Form::open(['route' => 'areas_conocimiento.store', 'method' => 'POST']) !!}
        <div class="form-group">
          <label> Nombre del área de conocimiento </label>
          <input type="text" name="area_conocimiento" class="form-control"  autofocus required  placeholder="Ejemplo: Competencias Docentes" />
        </div>
    </div>
    <div class="modal-footer">
      <div class="btn-group btn-group-justified" role="group" aria-label="group button">
        <div class="btn-group" role="group">
          <button type="button" class="btn btn-danger" data-dismiss="modal"  role="button" style="box-shadow: none;"">Cancelar</button>
        </div>
        <div class="btn-group" role="group">
          <input type="submit" name="agregar" value="Agregar" class="btn btn-success" style="box-shadow: none;">
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
  </div>
</div>

                  <!-- <div class="col-lg-2">
                  <center>
                <a href="{{url('/AreasDelConocimiento')}}"><img class="img-responsive" src="{{asset('img/AdminE1.jpg')}}"></a><br>
                <h5><a href="{{url('/AreasDelConocimiento')}}" class="btn btn-success">Áreas de conocimiento</a></h5>
                
                    </center>
                  </div>  -->


                 <!--  <div class="col-lg-2">
                  <center>
                <a href="{{url('/1CD')}}"><img class="img-responsive" src="{{asset('img/AdminE2.jpg')}}"></a><br>
                <h5><a href="{{url('/1CD')}}" class="btn btn-success" >Gestión de Cursos</a></h5>
                    </center>
                  </div> -->

                  




                 



                  <div class="col-lg-2 col-lg-offset-2">
                  <center>
                
                
                    </center>
                  </div> 
                  <div class="col-lg-2">
                  <center>
                    </center>
                  </div>
                  <div class="col-lg-2">
                  <center>
                    </center>
                  </div>
                  <div class="col-lg-2">
                  <center>
                    </center>
                  </div>

                
            
</div>
</div>
</div>
</div><!-- FIN DIV12-->



@endsection