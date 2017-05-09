@extends('layout-admin')
@section('sidebar')
	<?php $menu_name = "clientes"; ?>
	@parent
@endsection

@section('content')
	<h1 class="page-header">
		<span>Lista de clientes</span>
	</h1>
	<a href="{{ url('/admin/clientes/create') }}" class="btn btn-primary btn-lg">Nuevo Cliente</a>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>RUC</th>
				<th>Nombre</th>
				<th>Tipo de cliente</th>
				<th>Accion</th>
			</tr>
		</thead>
		<tbody>
			@foreach($clientes as $cliente)
				<tr>
					<td> {{ $cliente->ruc }} </td>
					<td> {{ $cliente->nombre }} </td>
					<td> {{ $cliente->tipo }} </td>
					<td> 
						<a href="{{ url("/admin/clientes/$cliente->id/edit") }}">Editar</a>
						<form action="{{ url("/admin/clientes/$cliente->id") }}" method="POST" >
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
