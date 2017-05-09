<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = "clientes";

    public function pedidoActivo(){
    	return \App\Models\Pedido::where('cliente_id',$this->id)->where('status','active')->first();
    }

    public function pedidos(){
    	return \App\Models\Pedido::where('cliente_id',$this->id)->get();
    }
}
