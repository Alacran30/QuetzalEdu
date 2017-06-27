<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //
    protected $table = 'persona';

    protected $fillable = ['nombre', 'paterno', 'materno', 'genero', 'nacimiento', 'rfc', 'curp', 'telcasa', 'telmovil', 'image', 'user_id'];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function direccion(){
    	return $this->hasOne('App\Direccion');
    }

    public function profesional(){
    	return $this->hasOne('App\Profesional');
    }
}
