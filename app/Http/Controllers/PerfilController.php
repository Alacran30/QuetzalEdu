<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Persona;

use Validator;

use Auth;

class PerfilController extends Controller
{
    //
     public function index(Request $request){ 

     	$users = User::orderBy('id', 'ASC')->paginate(5);

     	$id = \Auth::user()->id;

     	$user = User::find($id);

     	$user->persona;

     	$user->persona->direccion;

     	return view('instructor.perfil.index')->with('user', $user);
     
   	}

   	public function store(Request $request){

   			/* dd('hola'); */

        /* $persona = new Persona($request->all());

        $id = \Auth::user()->id;

        $persona->user_id = $id;

        $persona->save();

        flash('¡El Perfil ha sido editado exitosamente!', 'success');

        return view('instructor.inicio'); */



        $id = \Auth::user()->id;

        $user = User::find($id);

     

        $id_persona = $user->persona->id;

         /*$persona = new Persona($request->all());

         $persona->nombre;*/



        $persona = Persona::find($id_persona);

        $persona->nombre = $request->nombre;
        $persona->paterno = $request->paterno;
        $persona->materno = $request->materno;
        $persona->telcasa = $request->telcasa;
        $persona->telmovil = $request->telmovil;
        $persona->nacimiento = $request->nacimiento;
        $persona->genero = $request->genero;

        $user->persona->direccion->calle = $request->nombre;




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


        /* $rules = ['image' => 'required|image|max:1024*1024*1',];
        $messages = [
            'image.required' => 'La imagen es requerida',
            'image.image' => 'Formato no permitido',
            'image.max' => 'El máximo permitido es 1MB',

        ];

        /*$validator = Validator::make($request->all(), $rules, $messages);*/

        /*if($validator->fails()){
            
            return redirect('perfil')->withErrors($validator);
        }*/

        /*else{*/

            /*$name = str_random(30).'-'.$request->file('image')->getClientOriginalName();
            $path = public_path().'/img/perfil';
            $request->file('image')->move($path, $name);
            $persona = new Persona;

            $persona->nombre = "hola";
            $persona->image = $name;
            $persona->save();*/


        /*}*/
    }
}
