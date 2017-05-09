@extends('layout-admin')
@section('sidebar')
	<?php $menu_name = "lineas"; ?>
	@parent
@endsection

@section('content')
	<h1 class="page-header">
		<span>Editar Linea</span>
	</h1>
	
	<form action="{{ url("/admin/lineas/$linea->id") }}" method="POST" class="form-horizontal">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
	  <div class="form-group">
	    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
	    <div class="col-sm-10">
	      <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="{{ $linea->nombre }}">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="nombre" class="col-sm-2 control-label">Gama</label>
	    <div class="col-sm-10">
	      <select name="gama_id" class="form-control">
	      	@foreach($gamas as $gama)
	      		<option value="{{ $gama->id }}"  @if($gama->id == $linea->gama_id) selected @endif  >{{ $gama->nombre }}</option>
	      	@endforeach
	      </select>
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default">Guardar</button>
	      <a href="{{ url('/admin/lineas') }}" class="btn btn-danger">Cancelar</a>
	    </div>
	  </div>
	</form>

@endsection
