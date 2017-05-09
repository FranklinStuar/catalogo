@extends('layout-admin')
@section('sidebar')
	<?php $menu_name = "lineas"; ?>
	@parent
@endsection

@section('content')
	<h1 class="page-header">
		<span>Lista de Lineas</span>
	</h1>
	<a href="{{ url('/admin/lineas/create') }}" class="btn btn-primary btn-lg">Nueva Linea</a>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Gama</th>
				<th># Productos</th>
				<th>Accion</th>
			</tr>
		</thead>
		<tbody>
			@foreach($lineas as $linea)
				<tr>
					<td> {{ $linea->nombre }} </td>
					<td> <a href="{{ url("admin/gama/".$linea->serie->id."/lineas") }}">{{ $linea->serie->nombre }}</a> </td>
					<td> <a href="{{ url('admin/lineas/'.$linea->id.'/productos') }}">{{ $linea->productos->count() }} productos</a>
					<td> 
						<a href="{{ url("/admin/lineas/$linea->id/edit") }}">Editar</a>
						<form action="{{ url("/admin/lineas/$linea->id") }}" method="POST" >
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
