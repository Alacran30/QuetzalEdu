<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competencia extends Model
{
    //
    protected $table = 'competencia';

	protected $fillable = ['titulo', 'descripcion', 'informacion', 'video', 'area_id'];

	public function area(){

    	return $this->belongsTo('App\Area');

    }

    public function actividades(){

    	return $this->hasMany('App\Actividad');
    }

    public function contenidos(){

    	return $this->hasMany('App\Mochila');
    }
}
