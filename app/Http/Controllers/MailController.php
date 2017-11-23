<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;

class MailController extends Controller
{
	
    /**
     *store a new created resource in storage.
     * @return Response
     */
    public function store(Request $request)
    {
    	Mail::send('emails.contact',$request->all(), function($mjs) {
    		$mjs->subject('Correo de contacto');
    		$mjs->to('quetzaledu@gmail.com');

    	});
    	Session::flash('message','Mensaje enviado correctamente');
        return Redirect::to('/#contacto');
    }

    
}
 