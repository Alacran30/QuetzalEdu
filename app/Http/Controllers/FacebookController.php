<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Socialite; 
use Auth; 

class FacebookController extends Controller
{
    public function redirectToProvider()
    {
      
        dd('hola');

    }

    public function handleProviderCallback(Request $request)
    {
        
    	dd('hola1');

    }
      
}

