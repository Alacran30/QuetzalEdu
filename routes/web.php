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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/registro', function(){

	return view('/register');

});


Route::resource('users','UsersController');



Route::get('/ingresar', function(){

	return view('/login');

});

Route::resource('log','LogController');

Route::get('logout', 'LogController@logout');





Route::get('/inicio', function(){

	return view('/inicio');

});



