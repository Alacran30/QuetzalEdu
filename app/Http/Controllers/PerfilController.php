<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Persona;

use App\Direccion;

use App\Profesional;

use Validator;

use Auth;

class PerfilController extends Controller
{
    
     public function index(Request $request){ 

     	$users = User::orderBy('id', 'ASC')->paginate(5);

     	$id = \Auth::user()->id;

     	$user = User::find($id);

     	$user->persona;

     	$user->persona->direccion;

        $user->persona->profesional;

        if(\Auth::user()->tipo_id==1){
        return view('admin.perfil.index')->with('user', $user);
        }
        else{
     	return view('instructor.perfil.index')->with('user', $user);
        }
     
   	}

   	public function store(Request $request){



        $id = \Auth::user()->id;

        $user = User::find($id);

     

        $id_persona = $user->persona->id;

        $persona = Persona::find($id_persona);

        $persona->nombre = $request->nombre;
        $persona->paterno = $request->paterno;
        $persona->materno = $request->materno;
        $persona->telcasa = $request->telcasa;
        $persona->telmovil = $request->telmovil;
        $persona->nacimiento = $request->nacimiento;
        $persona->genero = $request->genero;

        $id_direccion = $persona->direccion->id;

        $direccion = Direccion::find($id_direccion);

        $direccion->calle = $request->calle;
        $direccion->numeroint = $request->numeroint;
        $direccion->numeroext = $request->numeroext;
        $direccion->colonia = $request->colonia;
        $direccion->municipio = $request->municipio;
        $direccion->estado = $request->estado;
        $direccion->cp = $request->cp;

        $id_profesional = $persona->profesional->id;

        $profesional = Profesional::find($id_profesional);

        $profesional->nivel = $request->nivel;
        $profesional->especialidad = $request->especialidad;
        $profesional->experiencia = $request->experiencia;

        $profesional->save();

        $direccion->save();

        $persona->save();

        $user->save();

        flash()->overlay('<h6>'.'Su Perfil fue modificado correctamente &nbsp;'.'<span class="fa fa-check">'.'<span>'.'</h6>', 'Actualizar Perfil');

        if(\Auth::user()->tipo_id==1){
        return redirect()->route('perfil.index')->with('user', $user);
        }
        else{
        return view('instructor.inicio')->with('user', $user);
        }

        

   	}

    public function updateImage(Request $request){

        $this->validate($request, [
           'imagen' => 'required | image',
        ]);

        $id = \Auth::user()->id;

        $user = User::find($id);

        /*$id_persona = $user->persona->id;

        $persona = Persona::find($id_persona);*/

        $file = $request->file('imagen');

        $nombre = $file->getClientOriginalName();

        $path = public_path().'/img/perfil';

        $file->move($path, $nombre);

        $user->photo = $nombre;

        $user->save();

        return redirect()->route('perfil.index')->with('user', $user);

    }
}
