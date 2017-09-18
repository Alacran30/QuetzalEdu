<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mochila extends Model
{
    //
    protected $table = 'mochila';

	protected $fillable = ['mochila','competencia_id'];

	public function competencia(){

    	return $this->belongsTo('App\Competencia');

    }
}
