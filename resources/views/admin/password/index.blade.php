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
  
    <div class="col-lg-10 col-md-offset-1"> 
    @if(Session::has('message-info'))
       <div class="alert alert-danger alert-dismissible"  role="alert" style="font-size: 14px;">
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
           <center>
           {{Session::get('message-info')}}
         </center>
       </div>
    @endif
       {!! Form::open(['url' => 'updatecontraseña', 'method' => 'POST']) !!}
       <hr />
       <div class="form-group">
        <label for="mypassword">Contraseña Actual</label>
        <input type="password" name="mypassword" class="form-control" placeholder="Contraseña actual">
        <div class="text-danger">{{ $errors->first('mypassword') }}</div>
       </div>
       <div class="form-group">
        <label for="password">Nueva Contraseña</label>
        <input type="password" name="password" class="form-control" placeholder="Nueva Contraseña">
        <div class="text-danger">{{$errors->first('password')}}</div>
       </div>
       <div class="form-group">
        <label for="mypassword">Repetir Nueva Contraseña</label>
        <input type="password" name="password_confirmation" class="form-control" placeholder="Repite Nueva Contraseña">
       </div>
       <br>
       <a href="{{url('/inicio')}}" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span>&nbsp;Cancelar</a>
       <button type="submit" class="btn btn-success" style="box-shadow: none;">Guardar Cambios</button>
       {!! Form::close() !!}
      <hr>
    </div>
               

                
            
</div>
</div>
</div>
</div><!-- FIN DIV12-->



@endsection