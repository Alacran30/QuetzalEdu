<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use Session;

use Redirect;

use App\User;

class UsersController extends Controller
{
    	

   	public function index(){

       
   	}

    
    public function create(){

    	

    }


    public function store(Request $request){



        



        $this->validate($request, [

           'name' => 'required|unique:users',
           'email' => 'email|required|unique:users',
           'password' => 'min:8|required',
           /*'mypassword' => 'min:8|confirmed:password',*/
           
        ]);


        if(($request->password)==($request->mypassword)){

                $user = new User($request->all());

                $user->password = bcrypt($request->password);

                $user->save();

                if(Auth::attempt(['email'=>$request['email'], 'password'=>$request['password']])){

                    flash()->overlay('Mensaje de Bienvenida al Sistema');

                    return Redirect::to('/inicio');
                }
        }

        else    {

                Session::flash('message-error', 'Las contraseñas no coinciden');
                return Redirect::to('/registro'); 
            }
        }

        



    public function show($id){


    }

    public function edit($id){


    }

    public function update(){



    }

    public function destroy(){


    }

}
