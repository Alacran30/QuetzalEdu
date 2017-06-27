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

     	return view('instructor.perfil.index')->with('user', $user);
     
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

        return view('instructor.inicio')->with('user', $user);

   	}

    public function updateImage(Request $request){


        $id = \Auth::user()->id;

        $user = User::find($id);

        $id_persona = $user->persona->id;

        $persona = Persona::find($id_persona);

        $file = $request->file('image');

        $nombre = 'quetzaledu_'.$file->getClientOriginalName();

        $path = public_path().'/img/perfil';

        $file->move($path, $nombre);

        $persona->image = $nombre;

        $persona->save();

        return redirect()->route('perfil.index')->with('user', $user);

    }
}
