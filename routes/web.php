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



Route::get('/', function(){
    return view('index.welcome');
});

Route::get('contacto', function(){
	return view('index.contacto');
});

Route::get('/registro', function(){
	return view('index.register');
});

Route::get('/ingresar', function(){
	return view('index.login');
});

Route::get('/instructores', function(){
	return view('admin.users.index');
});



Route::post('log',[
	'as'=>'log',
	'uses'=>'LogController@login']
);

Route::get('login', 'LogController@index');

Route::get('logout', 'LogController@logout');

Route::get('inicio',[
	'as'=>'inicio',
	'uses'=>'InicioController@index']
);



Route::resource('perfil','PerfilController');

Route::post('perfil/updateImage', 'PerfilController@updateImage' );

/* Route::Resource('perfil', 'PerfilController@index'); */


/*Route::post('perfilUpdate', 'PerfilController@store');*/

/* Route::get('perfilUpdate',[
	'as'=>'perfilUpdate',
	'uses'=>'PerfilController@store']
); */





Route::resource('users','UsersController');


Route::get('users/{id}/destroy', [
	'uses' => 'UsersController@destroy',
		'as' => 'users.destroy'
	]);


Route::post('agregar',[
	'as'=>'agregar',
	'uses'=>'UsersController@crear']
);




Route::resource('contraseña','PasswordController');

Route::post('updatecontraseña','PasswordController@updatepassword');


