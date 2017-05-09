@extends('layout-admin')
@section('sidebar')
	<?php $menu_name = "normas"; ?>
	@parent
@endsection

@section('content')
	<h1 class="page-header">
		<span>Editar Norma</span>
	</h1>
	

	<form action="{{ url("/admin/productos/$product->id") }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
		{{ method_field('PUT') }}
		{{ csrf_field() }}
	  <div class="form-group">
	    <label for="codigo" class="col-sm-2 control-label">Código</label>
	    <div class="col-sm-10">
	      <input type="text" name="codigo" class="form-control" placeholder="Código" value="{{ $product->codigo }}">
	    </div>
	  </div>

	  <div class="form-group">
	    <label for="descripcion" class="col-sm-2 control-label">Descripción</label>
	    <div class="col-sm-10">
	      <input type="text" name="descripcion" class="form-control" placeholder="Descripción" value="{{ $product->descripcion }}">
	    </div>
	  </div>
	  
	  <div class="form-group">
	    <label for="unidad_medida" class="col-sm-2 control-label">Unidad de Medida</label>
	    <div class="col-sm-10">
	      <input type="text" name="unidad_medida" class="form-control" placeholder="Unidad" value="{{ $product->unidad_medida }}">
	    </div>
	  </div>
	  
	  <div class="form-group">
	    <label for="medida_empaque" class="col-sm-2 control-label">Medida de empaque</label>
	    <div class="col-sm-10">
	      <input type="text" name="medida_empaque" class="form-control" placeholder="Caja" value="{{ $product->medida_empaque }}">
	    </div>
	  </div>
	  
	  <div class="form-group">
	    <label for="cantidad_empaque" class="col-sm-2 control-label">Cantidad por empaque</label>
	    <div class="col-sm-10">
	      <input type="text" name="cantidad_empaque" class="form-control" placeholder="0" value="{{ $product->cantidad_empaque }}">
	    </div>
	  </div>
	  
	  <div class="form-group">
	    <label for="cantidad_apilamiento" class="col-sm-2 control-label">Cantidad por apilamiento</label>
	    <div class="col-sm-10">
	      <input type="text" name="cantidad_apilamiento" class="form-control" placeholder="0" value="{{ $product->cantidad_apilamiento }}">
	    </div>
	  </div>
	  
	  <div class="form-group">
	    <label for="precio_fabricante" class="col-sm-2 control-label">Precio para fabricante</label>
	    <div class="col-sm-10">
	      <input type="text" name="precio_fabricante" class="form-control" placeholder="0.00" value="{{ $product->precio_fabricante }}">
	    </div>
	  </div>
	  
	  <div class="form-group">
	    <label for="precio_distribuidor" class="col-sm-2 control-label">Precio para distribuidor</label>
	    <div class="col-sm-10">
	      <input type="text" name="precio_distribuidor" class="form-control" placeholder="0.00" value="{{ $product->precio_distribuidor }}">
	    </div>
	  </div>
	  
	  <div class="form-group">
	    <label for="precio_mayorista" class="col-sm-2 control-label">Precio para mayorista</label>
	    <div class="col-sm-10">
	      <input type="text" name="precio_mayorista" class="form-control" placeholder="0.00" value="{{ $product->precio_mayorista }}">
	    </div>
	  </div>
	  
	  <div class="form-group">
	    <label for="foto_frontal" class="col-sm-2 control-label">Foto frontal</label>
	    <div class="col-sm-10">
				<a href="#"><img class="foto-60-60" src="{{ url('/images/products/'.$product->foto_frontal) }}" alt=""></a>
	      <input type="file" accept="image/*" name="foto_frontal" placeholder="Foto frontal">
	    </div>
	  </div>
	  
	  <div class="form-group">
	    <label for="foto_lateral" class="col-sm-2 control-label">Foto lateral</label>
	    <div class="col-sm-10">
				<a href="#"><img class="foto-60-60" src="{{ url('/images/products/'.$product->foto_lateral) }}" alt=""></a>
	      <input type="file" accept="image/*" name="foto_lateral" placeholder="Foto lateral">
	    </div>
	  </div>
	  
	  <div class="form-group">
	    <label for="foto_aerea" class="col-sm-2 control-label">Foto aerea</label>
	    <div class="col-sm-10">
				<a href="#"><img class="foto-60-60" src="{{ url('/images/products/'.$product->foto_aerea) }}" alt=""></a>
	      <input type="file" accept="image/*" name="foto_aerea" placeholder="Foto aerea">
	    </div>
	  </div>

	  <div class="form-group">
	    <label for="nombre" class="col-sm-2 control-label">Gama</label>
	    <div class="col-sm-10">
	      <select name="gama_id" class="form-control">
	      	@foreach($gamas as $gama)
	      		<option value="{{ $gama->id }}" @if($gama->id = $product->gama_id) selected @endif>{{ $gama->nombre }}</option>
	      	@endforeach
	      </select>
	    </div>
	  </div>

	  <div class="form-group">
	    <label for="nombre" class="col-sm-2 control-label">Linea</label>
	    <div class="col-sm-10">
	      <select name="linea_id" class="form-control">
	      	@foreach($lineas as $linea)
	      		<option value="{{ $linea->id }}" @if($linea->id = $product->linea_id) selected @endif>{{ $linea->nombre }}</option>
	      	@endforeach
	      </select>
	    </div>
	  </div>

	  <div class="form-group">
	    <label for="nombre" class="col-sm-2 control-label">Norma</label>
	    <div class="col-sm-10">
	      <select name="normas[]" class="form-control" multiple="multiple">
	      	@foreach($normas as $norma)
	      		<option value="{{ $norma->id }}"
		      		@foreach($product->normas as $norma_temp)
		      			@if($norma->id == $norma_temp->id)
			      			selected
	      			 	@endif
		      		@endforeach
	      		>{{ $norma->nombre }}</option>
	      	@endforeach
	      </select>
	    </div>
	  </div>

	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default">Guardar</button>
	      <a href="{{ url('/admin/productos') }}" class="btn btn-danger">Cancelar</a>
	    </div>
	  </div>
	</form>

@endsection
