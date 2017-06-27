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
use Hash;
use Validator;


class PasswordController extends Controller{

    function __construct(){

        $this->middleware('auth', ['only' => ['index','updatepassword']]);

        
    }

   public function index(Request $request){ 

        $users = User::orderBy('id', 'ASC')->paginate(5);

        $id = \Auth::user()->id;

        $user = User::find($id);

       return view('password.index')->with('user', $user);

    }

    public function updatepassword(request $request){


      	$rules = [
            'mypassword' => 'required',
            'password' => 'required|confirmed|min:6|max:18',
        ];
        
        $messages = [
            'mypassword.required' => '* El campo es requerido',
            'password.required' => '* El campo es requerido',
            'password.confirmed' => '* Las contraseñas no coinciden',
            'password.min' => '* El mínimo permitido son 6 caracteres',
            'password.max' => '* El máximo permitido son 10 caracteres',
        ];
        
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()){
            return redirect('contraseña')->withErrors($validator);
        }
        else{
            if (Hash::check($request->mypassword, Auth::user()->password)){
                $user = new User;
                $user->where('email', '=', Auth::user()->email)
                     ->update(['password' => bcrypt($request->password)]);
                     flash()->overlay('<h6>'.'Su contraseña fue modificada correctamente &nbsp;'.'<span class="fa fa-check">'.'<span>'.'</h6>', 'Cambio de Contraseña');
                         return redirect('contraseña');
            }
            else
            {
                return redirect('contraseña')->with('message-info', ' Credenciales incorrectas');
            }
        }

}
    
}
