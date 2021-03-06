<?php

namespace App\Http\Controllers;
use App\User;
use App\Persona;
use App\Profesional;
use App\Direccion;
use Illuminate\Http\Request;
use Socialite; 
use Auth;
use Redirect;

class FacebookController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();

    }

    public function handleProviderCallback(Request $request)
    {

       // conecion al token de  Facebook 
        $facebook_user = Socialite::driver('facebook')->user();
        
        //busca si esiste el usuario en la base 
       $user = User::where('facebook_id',$facebook_user->getId())->first();
        if(!$user)//si no esta, lo crea en la bd
        {
            User::create([
                'facebook_id' => $facebook_user->getId(),
                'username' => $facebook_user->getName(),
                'email' => $facebook_user->getEmail(),
                'password' => 1234567889,
                'tipo_id' => 3,

                /*$user->password = bcrypt($request->password);*/
            ]);

            $user = User::where('facebook_id',$facebook_user->getId())->first();

            $persona = new Persona();
            $persona->user_id = $user->id;
            $persona->save();

            $profesional = new Profesional();
            $profesional->persona_id = $persona->id;
            $profesional->save();

            $direccion = new Direccion();
            $direccion->persona_id = $persona->id;
            $direccion->save();


            auth()->login($user); //selecciona la informacion del usuario 
            flash()->overlay('Mensaje de Bienvenida al Sistema');
            return Redirect::to('/inicio'); 
           
        }




        
        auth()->login($user); //selecciona la informacion del usuario 
       
        return Redirect::to('/inicio'); 
        
      
    }
}