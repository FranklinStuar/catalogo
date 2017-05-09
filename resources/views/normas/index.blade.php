@extends('layout-admin')
@section('sidebar')
	<?php $menu_name = "normas"; ?>
	@parent
@endsection

@section('content')
	<h1 class="page-header">
		<span>Lista de Normas</span>
	</h1>
	<a href="{{ url('/admin/normas/create') }}" class="btn btn-primary btn-lg">Nueva Norma</a>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Descripción</th>
				<th>Tipo</th>
				<th>Accion</th>
			</tr>
		</thead>
		<tbody>
			@foreach($normas as $norma)
				<tr>
					<td> {{ $norma->nombre }} </td>
					<td> {{ $norma->descripcion }} </td>
					<td> 
						@if($norma->tipo=="iso")
							ISO
						@elseif($norma->tipo=="inen")
							INEN
						@elseif($norma->tipo=="europeo")
							Europeo
						@endif
					</td>
					<td> 
						<a href="{{ url("/admin/normas/$norma->id/edit") }}">Editar</a>
						<form action="{{ url("/admin/normas/$norma->id") }}" method="POST" >
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
