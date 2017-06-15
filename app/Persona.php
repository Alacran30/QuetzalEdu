<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //
    protected $table = 'persona';

    protected $fillable = ['nombre', 'paterno', 'materno', 'user_id'];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function direccion(){
    	return $this->hasOne('App\Direccion');
    }
}
