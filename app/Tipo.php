<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{

	protected $table = 'tipo';

    protected $fillable = ['tipo'];

    public function user(){
        return $this->hasOne('App\User');
    }
}
