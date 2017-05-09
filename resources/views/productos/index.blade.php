@extends('layout-admin')
@section('sidebar')
	<?php $menu_name = "productos"; ?>
	@parent
@endsection

@section('content')
	<h1 class="page-header">
		<span>Lista de productos</span>
	</h1>
	<a href="{{ url('/admin/productos/create') }}" class="btn btn-primary btn-lg">Nuevo producto</a>
	<table class="table table-hover table-bordered">
		<thead>
			<tr>
				<th>Código</th>
				<th>Descripción</th>
				<th>Unidad de Medida</th>
				<th>Empaque</th>
				<th>Cantidad por empaque</th>
				<th>Cantidad de apilamiento</th>
				<th>Precio Fabricante</th>
				<th>Precio Distribuidor</th>
				<th>Precio Mayorista</th>
				<th>Gama</th>
				<th>Linea</th>
				<th>Normas</th>
				<th>Accion</th>
			</tr>
		</thead>
		<tbody>
			@foreach($productos as $producto)
				<tr>
					<td> {{ $producto->codigo }} </td>
					<td> {{ $producto->descripcion }} </td>
					<td> {{ $producto->unidad_medida }} </td>
					<td> {{ $producto->medida_empaque }} </td>
					<td> {{ $producto->cantidad_empaque }} </td>
					<td> {{ $producto->cantidad_apilamiento }} </td>
					<td> ${{ $producto->precio_fabricante }} </td>
					<td> ${{ $producto->precio_distribuidor }} </td>
					<td> ${{ $producto->precio_mayorista }} </td>
					<td> {{ $producto->serie->nombre }} </td>
					<td> {{ $producto->linea->nombre }} </td>
					<td> 
						@foreach($producto->normas as $norma)
							<a href="{{ url('admin/normas/'.$norma->id) }}">{{ $norma->nombre }}</a> <br>
						@endforeach
					</td>
					<td> 
						<a href="{{ url("/admin/productos/$producto->id") }}">Ver</a>
						<a href="{{ url("/admin/productos/$producto->id/edit") }}">Editar</a>
						<form action="{{ url("/admin/productos/$producto->id") }}" method="POST" >
							{{ csrf_field() }}
							{{ method_field('DELETE') }}
			      	<button type="submit" class="btn btn-link btn-delete">Eliminar</button>
			      </form>
					 </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection
