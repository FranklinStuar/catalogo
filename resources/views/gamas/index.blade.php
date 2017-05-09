@extends('layout-admin')
@section('sidebar')
	<?php $menu_name = "gamas"; ?>
	@parent
@endsection

@section('content')
	<h1 class="page-header">
		<span>Lista de Gamas</span>
	</h1>
	<a href="{{ url('/admin/gama/create') }}" class="btn btn-primary btn-lg">Nueva Gama</a>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Nombre</th>
				<th># Lineas</th>
				<th># Productos</th>
				<th>Accion</th>
			</tr>
		</thead>
		<tbody>
			@foreach($gamas as $gama)
				<tr>
					<td> {{ $gama->nombre }} </td>
					<td> <a href="{{ url('admin/gama/'.$gama->id.'/lineas') }}">{{ $gama->lineas->count() }} lineas</a>
					<td> <a href="{{ url('admin/gama/'.$gama->id.'/productos') }}">{{ $gama->productos->count() }} productos</a>
					<td> 
						<a href="{{ url("/admin/gama/$gama->id/edit") }}">Editar</a>
						<form action="{{ url("/admin/gama/$gama->id") }}" method="POST" >
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
