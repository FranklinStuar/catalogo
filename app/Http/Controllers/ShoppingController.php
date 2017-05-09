<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use Auth;
class ShoppingController extends Controller
{
    public function add(Request $request){
    	// 
    	
    	$product = \App\Models\Product::find($request['product']);
    	$client = \App\Models\Client::find($request['client']);
    	if($client->pedidoActivo()->productos()->wherePivot('product_id',$product->id)->first() !=null){
	    	$cant_pedido = $client->pedidoActivo()->productos()->wherePivot('product_id',$product->id)->first()->pivot->cantidad;
	    	$cant_pedido ++;
	    	
	    	$client->pedidoActivo()->productos()->updateExistingPivot($product->id,['cantidad'=>$cant_pedido]);
	    	$cant_pedido = $client->pedidoActivo()->productos()->wherePivot('product_id',$product->id)->first()->pivot->cantidad;
    	}else{
    		$client->pedidoActivo()->productos()->save($product,['cantidad'=>1]);
    	}
    	return redirect('/shopping');
    }

    public function remove(Request $request){
    	// ->first()
    	$client = \App\Models\Client::find($request['client']);
    	$client->pedidoActivo()->productos()->detach($request['product']);
    	return redirect()->back();
    }

    public function show(){
			$pedidos = null;
    	if(Auth::user()!=null)
    		$pedidos = Pedido::
					where("cliente_id",Auth::user()->client_id)
					->where('status',"active")
					->first();
			return view('shopping')->with('pedidos',$pedidos);
    }

    public function cambiar_cantidad(Request $request,$product_id){
        $product = \App\Models\Product::find($product_id);
        $client = \App\Models\Client::find(Auth::user()->client_id);
        $client->pedidoActivo()->productos()->updateExistingPivot($product->id,['cantidad'=>$request['cantidad']]);
        return redirect()->back();
    }
}
