<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Session;
use Redirect;
use App\User;
use App\Persona;
use App\Tipo;
use App\Direccion;


class UsersController extends Controller
{
    	
   	public function index(){ 

       $user = User::orderBy('id', 'ASC')->paginate(5);

       return view('admin.users.index')->with('user', $user);

   	}
    
    public function create(){

        return view('admin.users.create');
    }

    public function store(Request $request){

        $this->validate($request, [
           'username' => 'required|unique:users',
           'email' => 'email|required|unique:users',
           'password' => 'min:8|required', 
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

        else{
                Session::flash('message-error', 'Las contraseñas no coinciden');
                return Redirect::to('/registro'); 
            }
        }

    public function show($id){

    }

    public function edit($id){

        $user = User::find($id);

        return view('admin.users.edit')->with('user', $user);


    }

    public function update(Request $request, $id){

        

        $user = User::find($id);
        $user->username = $request->username;
        $user->email = $request->email;
        $user->persona->nombre = $request->nombre;
        $user->persona->paterno = $request->paterno;
        $user->persona->materno = $request->materno;

        $user->save();

        flash('El Usuario '. '<strong>'.$user->nombre.'</strong>'. ' ha sido editado exitosamente', 'warning');

        return redirect()->route('users.index');

    }

    public function destroy($id){

         $user = User::find($id);
        
         $user->delete();

         flash('El Usuario '. '<strong>'.$user->nombre.'</strong>'. ' ha sido eliminado de forma exitosa', 'danger');

         return redirect()->route('users.index');
    }

    public function crear(Request $request){

        $user = new User($request->all());

        $user->password = bcrypt($request->password);

        $user->tipo_id = 2;

        $user->save(); 

        $persona = new Persona($request->all());

        $persona->user_id = $user->id;

        $persona->save(); 

        $direccion = new Direccion($request->all());

        $direccion->persona_id = $persona->id;

        $direccion->save();

        Session::flash('message-info', 'El usuario ha sido creado exitosamente!');

        return redirect()->route('users.index');
    }
}
