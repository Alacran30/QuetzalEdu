@extends('admin.template.main')

@section('title')

Inicio

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
    line-height: 45px;
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
                <li style="margin-top: 15px;margin-bottom: 0px;">
                        <a href="#">
                            <span class="sidebar-title"> <strong> <i class="fa fa-circle" style="color: #5cb85c;"></i> &nbsp;Administrador</strong> </span>
                        </a>
                    </li>
                <li>
                        <a href="#">
                            <a id="user-profile" href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('img/avatar2.png')}}" class="img-circle" style="border: solid 2px;"> &nbsp;<strong>{!!Auth::user()->username !!} </strong></a><br>
                        </a>
                    </li>
                  <!--<li>
                    </li>-->
                    <li> 
                            <a href="{{url('/Escritorio')}}">
                            <span class="sidebar-icon"><img class="padding" class="img-responsive" src="{{asset('img/AdminSide1.png')}}"></a></span>
                            <a href="{{url('/Escritorio')}}" class="aside"><font color="#94c160">Escritorio</font>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/AreasDelConocimiento')}}">
                            <span class="sidebar-icon"><img class="padding" class="img-responsive" src="{{asset('img/AdminSide2.png')}}"></a></span>
                            <a href="{{url('/AreasDelConocimiento')}}" class="aside"><span class="sidebar-title">Áreas del Conocimiento</span>
                        </a>
                        <ul id="submenu-3" class="panel-collapse collapse panel-switch" role="menu">
                        </ul>
                    </li>
                    <li>
                        <a class="accordion-toggle collapsed toggle-switch aside" data-toggle="collapse" href="#submenu-2">
                            <span class="sidebar-icon"><img class="padding" class="img-responsive" src="{{asset('img/AdminSide3.png')}}"></span>
                            <span class="sidebar-title">Crear Cursos</span>
                            <b class="caret"></b>
                        </a> 
                        <ul id="submenu-2" class="panel-collapse collapse panel-switch" role="menu" >
                            <li ><a href="{{url('/1CD')}}" class="aside"><i class="fa fa-circle-thin"></i>Competencias Docentes</a></li>
                            <li><a href="{{url('/2ED')}}" class="aside"><i class="fa fa-circle-thin"></i>Estrategias Docentes</a></li>
                            <li><a href="{{url('/3PD')}}" class="aside"><i class="fa fa-circle-thin"></i>Planeación Docente</a></li>
                            <li><a href="{{url('/4EO')}}" class="aside"><i class="fa fa-circle-thin"></i>Exámenes de Oposición</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{url('/GestionUsuarios')}}">
                            <span class="sidebar-icon"><img class="padding" class="img-responsive" src="{{asset('img/AdminSide4.png')}}"></a></span>
                            <a href="{{url('/GestionUsuarios')}}" class="aside"><span class="sidebar-title">Gestión de Usuarios</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/ControlPagos')}}"> 
                            <span class="sidebar-icon"><img class="padding" class="img-responsive" src="{{asset('img/AdminSide5.png')}}"></a></span>
                            <a href="{{url('/ControlPagos')}}" class="aside"><span class="sidebar-title">Control de pagos</span>
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
                <img class="img-responsive" src="{{asset('img/Admin1.png')}}">
                
                </div>
                <div class="col-lg-9">
                <h5>Bienvenido Omar Martínez</h5>
                <h5>Plataforma educativa para el desarrollo de competencias docentes en la 
educación básica y media superior.</h5>
                </div>
                <img class="img-responsive" src="{{asset('img/cintaAdmin2.png')}}"><br>


                 <div class="col-lg-10 col-lg-offset-1">
                 <h5>Usted a ingresado como administrador del sistema</h5>
                 <h5 class="text-justify">Como administrador usted podrá realizar la administración de usuarios, áreas del conocimiento, subir materiales de los cursos de cada área, así como gestionar el control de pagos de sus clientes y usuarios.</h5>
                 <h5 class="text-justify">Para obtener mas información le recomendamos revisar el manual de usuario dando clic en la parte superior derecha de su pantalla.</h5>
                  </div>

                  <div class="col-lg-2 col-lg-offset-2">
                  <center>
                <a href="{{url('/AreasDelConocimiento')}}"><img class="img-responsive" src="{{asset('img/AdminE1.jpg')}}"></a><br>
                <h5><a href="{{url('/AreasDelConocimiento')}}">Áreas de conocimiento</a></h5>
                
                    </center>
                  </div> 
                  <div class="col-lg-2">
                  <center>
                <a href="{{url('/1CD')}}"><img class="img-responsive" src="{{asset('img/AdminE2.jpg')}}"></a><br>
                <h5><a href="{{url('/1CD')}}">Gestión de Cursos</a></h5>
                    </center>
                  </div>
                  <div class="col-lg-2">
                  <center>
                <a href="{{url('/GestionUsuarios')}}"><img class="img-responsive" src="{{asset('img/AdminE3.jpg')}}"></a><br>
                <h5><a href="{{url('/GestionUsuarios')}}">Gestión de Usuarios</a></h5>
                    </center>
                  </div>
                  <div class="col-lg-2">
                  <center>
                <a href="{{url('/ControlPagos')}}"><img class="img-responsive" src="{{asset('img/AdminE4.jpg')}}"></a><br>
                <h5><a href="{{url('/ControlPagos')}}">Control de Pagos</a></h5>
                    </center>
                  </div><br>

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

                
                  <!--<div class="col-lg-5">
                    <img class="img-responsive" src="{{asset('img/YC.png')}}" style="width: 80px; height: 62px;">
                  </div>-->
</div>
</div>
</div>
</div><!-- FIN DIV12-->



@endsection