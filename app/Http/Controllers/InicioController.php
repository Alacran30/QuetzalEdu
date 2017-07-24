<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Session;
use Redirect;
use App\Http\Requests;
use App\User;
use App\Persona;
use App\Tipo;

class InicioController extends Controller
{
    function __construct(){

        $this->middleware('auth', ['only' => ['index']]);
    }

    public function index(){ 

        $id = \Auth::user()->id;

        $user = User::find($id);

       if(Auth::user()->tipo_id==1){
                return view('admin.inicio')->with('user', $user);
            }

            if(Auth::user()->tipo_id==2){
                return view('instructor.inicio')->with('user', $user); 
            }

            if(Auth::user()->tipo_id==3){
                return view('alumno.inicio')->with('user', $user); 
            }
   	}

    public function inicio(){

            return Redirect::to('/ingresar');

        }
}
