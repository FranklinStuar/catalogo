@extends('layout-admin')
@section('sidebar')
	<?php $menu_name = "gamas"; ?>
	@parent
@endsection

@section('content')
	<h1 class="page-header">
		<span>{{ $gama->nombre }}</span>
		<small>(Lista de lineas en gama)</small>
	</h1>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Accion</th>
			</tr>
		</thead>
		<tbody>
			@foreach($gama->lineas as $linea)
				<tr>
					<td> {{ $linea->nombre }} </td>
					<td> 
						<a href="{{ url("/admin/linea/$linea->id/edit") }}">Editar</a>
						<form action="{{ url("/admin/linea/$linea->id") }}" method="POST" >
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
