<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
|--------------------------------------------------------------------------
| SICIPAED, S. de R.L de C.V.
|--------------------------------------------------------------------------
|
| Plataforma educativa para el desarrollo de competencias docentes
| en la educación básica y media superior (etapa 1).
|
|
*/



// Rutas Front-End de Plataforma Educativa

Route::get('/', function(){
    return view('index.welcome');
});

Route::get('/registro', function(){
	return view('index.register');
});

Route::get('/ingresar', function(){
	return view('index.login');
});

Route::get('quienes_somos', function(){
    return view('index.quienes_somos');
});

// Login con Facebook

Route::get('/redirect', 'FacebookController@redirectToProvider')->name('facebook.login');

Route::get('login/facebook/callback', 'FacebookController@handleProviderCallback');

// Rutas Back-End de Plataforma Educativa

Route::post('log',[
	'as'=>'log',
	'uses'=>'LogController@login']
);

Route::get('logout', 'LogController@logout');

Route::get('login', 'InicioController@inicio');

Route::get('inicio',[
	'as'=>'inicio',
	'uses'=>'InicioController@index']
);

// Rutas Administrador de Plataforma Educativa

Route::resource('users','UsersController');

Route::get('users/{id}/destroy', [
	'uses' => 'UsersController@destroy',
		'as' => 'users.destroy'
	]);

Route::post('agregar',[
	'as'=>'agregar',
	'uses'=>'UsersController@crear']
);

Route::resource('areas_conocimiento', 'AreaController');

Route::get('area/{id}/destroy', [
	'uses' => 'AreaController@destroy',
		'as' => 'area.destroy'
	]);

Route::resource('competencia', 'CompetenciaController');

Route::get('competencia/{id}/destroy', [
	'uses' => 'CompetenciaController@destroy',
	'as' => 'competencia.destroy'
	]);

Route::get('/pagos', function(){
    return view('admin.pagos.index');
});

// Rutas Instructor de Plataforma Educativa

Route::resource('perfil','PerfilController');

Route::post('perfil/updateImage', 'PerfilController@updateImage' );

Route::resource('contraseña','PasswordController');

Route::post('updatecontraseña','PasswordController@updatepassword');

// Rutas Alumno de Plataforma Educativa

Route::get('competencias', 'CompetenciaController@lista');

Route::get('competencian', 'CompetenciaController@competencian');






Route::get('/CursoCompetenciasDocentes', function(){
	return view('index.CursoCompetenciasDocentes');
});

Route::get('/CursoEstrategiasDocentes', function(){
	return view('index.CursoEstrategiasDocentes');
});

Route::get('/CursoDesarrolloPlaneacion', function(){
	return view('index.CursoDesarrolloPlaneacion');
});

Route::get('/CursoExamenesOposicion', function(){
	return view('index.CursoExamenesOposicion');
});

Route::get('Aviso', function(){
	return view('index.Terminos.Aviso');
});

Route::get('Politicas', function(){
	return view('index.Terminos.Politicas');
});

Route::get('Proteccion', function(){
	return view('index.Terminos.Proteccion');
});

Route::get('Terminos', function(){
	return view('index.Terminos.Terminos');
});

Route::resource('mail','MailController');