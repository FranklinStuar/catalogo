@extends('layout')
@section('sidebar')
	<li><a href="{{ url('/') }}">Inicio</a></li>
	<li><a href="{{ url('/catalogo') }}">Catalogo</a></li>
@endsection
@section('content')
	<h1 class="page-header">
		<span>Pedido</span>
	</h1>
	<div class="row">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th></th>
					<th>Cantidad</th>
					<th>Código</th>
					<th>Descripcion</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
			@if($pedidos!=null)
			@foreach($pedidos->productos as $producto)
				<tr>
					<td>
						<a href="{{ url('/producto/'.$producto->id) }}"><img class="foto-60-60" src="{{ url('/images/products/'.$producto->foto_frontal) }}" alt=""></a>
					</td>
					<td>
						<form action="{{ url('shopping/'.$producto->id.'/cambiar-cantidad') }}" method="POST">
							{{ csrf_field() }}
							<input name="cantidad" type="text" value="{{ $pedidos->productos()->wherePivot('product_id',$producto->id)->first()->pivot->cantidad }}">
							{{ $producto->unidad_medida }}
						</form>
					</td>
					<td>{{ $producto->codigo }}</td>
					<td>{{ $producto->descripcion }}</td>
					<td>
						<a href="{{ url('shopping/remove?product='.$producto->id.'&client='.Auth::user()->client_id) }}" class="btn btn-danger">Eliminar</a>
					</td>
				</tr>
				@endforeach
				@endif
			</tbody>
		</table>
	</div>
@endsection
