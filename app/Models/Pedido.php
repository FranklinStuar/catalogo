<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = "pedidos";

    public function cliente(){
    	return $this->belongsTo('App\Models\Client');
    }

    public function productos(){
    	return $this->belongsToMany('App\Models\Product', 'pedido_producto', 'pedido_id', 'product_id')->withPivot('cantidad');
    }
}
