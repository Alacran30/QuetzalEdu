<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use Session;

use Redirect;

use App\Http\Requests;



class LogController extends Controller
{
    public function index(){

       /* return Redirect::to('/');*/

    }

    
    public function create(){

    }

    

    public function store(Request $request){

       $this->validate($request, [
           'password' => 'required',
           'email' => 'email | required',
        ]);


        if(Auth::attempt(['email'=>$request['email'], 'password'=>$request['password']])){

            return Redirect::to('/inicio');
        }
       
        else{

        Session::flash('message-error', 'Estas credenciales no coinciden con nuestros registros');
        return Redirect::to('/ingresar'); }

    }

    public function show($id){


    }

    public function edit($id){


    }

    public function update(){



    }

    public function destroy(){


    }

    public function logout(){
        Auth::logout();
        return Redirect::to('/');
    }
}
