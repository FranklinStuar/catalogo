@extends('layout')
@section('sidebar')
	<li class="active"><a href="{{ url('/') }}">Inicio</a></li>
	<li><a href="{{ url('/catalogo') }}">Catalogo</a></li>
@endsection
@section('content')
	<h1 class="page-header ayres-font home-page">
		<span>Equiplast</span>
		<img id="background" src="https://newevolutiondesigns.com/images/freebies/galaxy-facebook-cover-35.jpg" alt="background">
	</h1>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<h1 class="page-header">
		Catálogo de productos
	</h1>
	<div class="row">
	@foreach($products as $product)
		<div class="col-sm-4 product-catalogo">
			<a href="{{ url('/producto/'.$product->id) }}">
				<img src="{{ url('/images/products/'.$product->foto_frontal) }}" class="foto-all img-rounded" alt="">
			</a>
			<div class="row">
				<div class="col-sm-6">
					<h2>{{ $product->codigo }}</h2>
				</div>
				<div class="col-sm-6"><br>
					@if(Auth::user()!=null)
						<a href="{{ url('/shopping/add?product='.$product->id.'&client='.Auth::user()->client_id) }}" class="btn btn-primary">Comprar</a>
					@endif
				</div>
			</div>
			<span>{{ $product->descripcion }}</span>
		</div>
	@endforeach
	</div>


@endsection
