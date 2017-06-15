<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    //
    protected $table = 'direccion';

    protected $fillable = ['calle', 'numeroint', 'numeroext', 'colonia', 'localidad', 'municipio', 'estado', 'cp', 'persona_id'];

    public function persona(){
    	return $this->belongsTo('App\Persona');
    }
}
