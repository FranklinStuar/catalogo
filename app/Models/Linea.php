<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Linea extends Model
{
    protected $table = "lineas";
    //

    public function productos(){
    	return $this->hasMany('App\Models\Product');
    }

    public function serie(){
    	return $this->belongsTo('App\Models\Serie', 'gama_id');
    }
}
