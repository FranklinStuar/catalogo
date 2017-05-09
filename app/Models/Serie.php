<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    //
    protected $table = "gamas";

    public function productos(){
    	return $this->hasMany('App\Models\Product', 'gama_id');
    }
    public function lineas(){
    	return $this->hasMany('App\Models\Linea', 'gama_id');
    }
}
