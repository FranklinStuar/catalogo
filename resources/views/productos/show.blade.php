@extends('layout-admin')
@section('sidebar')
	<?php $menu_name = "productos"; ?>
	@parent
@endsection

@section('content')
	<h1 class="page-header">
		<span>{{ $product->codigo }}</span>
	</h1>
	<div class="row">
		<div class="col-sm-6">
			<div class="col-sm-6">
				<a href="#"><img class="foto-all" src="{{ url('/images/products/'.$product->foto_frontal) }}" alt=""></a>
			</div>
			<div class="col-sm-6">
				<a href="#"><img class="foto-all" src="{{ url('/images/products/'.$product->foto_lateral) }}" alt=""></a>
			</div>
			<div class="col-sm-6">
				<a href="#"><img class="foto-all" src="{{ url('/images/products/'.$product->foto_aerea) }}" alt=""></a>
			</div>
		</div>
		<div class="col-sm-6">
			<p>
				<b>Descripcion: </b> {{ $product->descripcion }}
			</p>
			<p>
				<b>Medida: </b> {{ $product->unidad_medida }}
			</p>
			<p>
				<b>Empaquetado: </b> {{ $product->medida_empaque }} ({{ $product->cantidad_empaque }} {{ $product->unidad_medida }}) 
				<br>
				<small>Los empaques significa la cantidad de productos en conjunto</small>
			</p>
			<p>
				<b>Apilamiento: </b> ({{ $product->cantidad_apilamiento }} {{ $product->medida_empaque }})
				<br>
				<small>El apilamiento es la cantidad de empaques que pueden estar en filas verticales</small>
			</p>
			<p>
				<b>Gama: </b> {{ $product->serie->nombre }}
				<br>
				<small>El conjunto general al cual pertenece el producto</small>
			</p>
			<p>
				<b>Linea: </b> {{ $product->linea->nombre }}
				<br>
				<small>Pertenece a una parte especifica</small>
			</p>
			<p>
				<b>Precios fabricante:</b> $ {{ $product->precio_fabricante}}
			</p>
			<p>
				<b>Precios distribuidor:</b> $ {{ $product->precio_distribuidor }}
			</p>
			<p>
				<b>Precios mayorista:</b> $ {{ $product->precio_mayorista }}
			</p>
			<p>
				<b>Normas de calidad: </b> 
					@foreach($product->normas as $norma)
						{{ $norma->nombre }} , 
					@endforeach
			</p>
		</div>
	</div>
@endsection
