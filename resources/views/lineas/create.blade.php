@extends('layout-admin')
@section('sidebar')
	<?php $menu_name = "lineas"; ?>
	@parent
@endsection

@section('content')
	<h1 class="page-header">
		<span>Nueva Linea</span>
	</h1>
	
	<form action="{{ url('/admin/lineas') }}" method="POST" class="form-horizontal">
		{{ csrf_field() }}
	  <div class="form-group">
	    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
	    <div class="col-sm-10">
	      <input type="text" name="nombre" class="form-control" placeholder="Nombre">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="nombre" class="col-sm-2 control-label">Gama</label>
	    <div class="col-sm-10">
	      <select name="gama_id" class="form-control">
	      	@foreach($gamas as $gama)
	      		<option value="{{ $gama->id }}">{{ $gama->nombre }}</option>
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
