<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    //
    protected $table = 'actividad';

	protected $fillable = ['actividad','competencia_id'];

	public function competencia(){

    	return $this->belongsTo('App\Competencia');

    }
}
