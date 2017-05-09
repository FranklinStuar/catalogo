@extends('layout-admin')
@section('sidebar')
	<?php $menu_name = "gamas"; ?>
	@parent
@endsection

@section('content')
	<h1 class="page-header">
		<span>Editar Gama</span>
	</h1>
	
	<form action="{{ url("/admin/gama/$gama->id") }}" method="POST" class="form-horizontal">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
	  <div class="form-group">
	    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
	    <div class="col-sm-10">
	      <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="{{ $gama->nombre }}">
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default">Guardar</button>
	      <a href="{{ url('/admin/gama') }}" class="btn btn-danger">Cancelar</a>
	    </div>
	  </div>
	</form>

@endsection
