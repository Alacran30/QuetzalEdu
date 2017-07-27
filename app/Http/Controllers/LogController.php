<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Cache;
use Session;
use Redirect;
use App\Http\Requests;
use App\User;
use App\Persona;
use App\Tipo;

class LogController extends Controller{


        public function login(Request $request){

           $this->validate($request, [
           'password' => 'required',
           'email' => 'email | required',
        ]);

        if(Auth::attempt(['email'=>$request['email'], 'password'=>$request['password']])){

            return Redirect::to('/inicio'); 

             }
          
        else {

        Session::flash('message-error', 'Correo electrónico o contraseña incorrectos');
        return Redirect::to('/ingresar'); 

        }
    }


    public function logout(){
        
        Cache::flush();
        Auth::logout();
        return Redirect::to('/');



    }
    
}
