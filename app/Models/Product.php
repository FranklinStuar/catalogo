<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Product extends Model
{
    protected $table = "products";
    
    protected $fillable = [
    	'codigo','descripcion','unidad_medida','medida_empaque','cantidad_empaque','cantidad_apilamiento','foto_frontal','foto_lateral','foto_aerea','precio_fabricante','precio_distribuidor','precio_mayorista', 'gama_id', 'linea_id'
    ];
    
    public function setFotoAereaAttribute($foto_aerea){
    	$this->attributes['foto_aerea'] = Carbon::now()->second.$foto_aerea->getClientOriginalName();
    	$name = Carbon::now()->second.$foto_aerea->getClientOriginalName();
    	\Storage::disk('local')->put($name,\File::get($foto_aerea));
    }

    public function setFotoFrontalAttribute($foto_frontal){
    	$this->attributes['foto_frontal'] = Carbon::now()->second.$foto_frontal->getClientOriginalName();
    	$name = Carbon::now()->second.$foto_frontal->getClientOriginalName();
    	\Storage::disk('local')->put($name,\File::get($foto_frontal));
    }

    public function setFotoLateralAttribute($foto_lateral){
    	$this->attributes['foto_lateral'] = Carbon::now()->second.$foto_lateral->getClientOriginalName();
    	$name = Carbon::now()->second.$foto_lateral->getClientOriginalName();
    	\Storage::disk('local')->put($name,\File::get($foto_lateral));
    }


    public function serie(){
    	return $this->belongsTo('App\Models\Serie', 'gama_id');
    }

    public function linea(){
    	return $this->belongsTo('App\Models\Linea');
    }

    public function normas(){
    	return $this->belongsToMany('App\Models\Norma', 'norma_producto');
    }
}
