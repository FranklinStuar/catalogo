<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Norma extends Model
{
    protected $table = "normas";

    public function productos(){
    	return $this->belongsToMany('App\Models\Product', 'norma_producto', 'norma_id', 'product_id');
    }
}
