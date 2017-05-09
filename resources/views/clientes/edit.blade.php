@extends('layout-admin')
@section('sidebar')
	<?php $menu_name = "clientes"; ?>
	@parent
@endsection

@section('content')
	<h1 class="page-header">
		<span>Editar cliente</span>
	</h1>
	
	<form action="{{ url("/admin/clientes/$cliente->id") }}" method="POST" class="form-horizontal">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
	  <div class="form-group">
	    <label for="ruc" class="col-sm-2 control-label">Ruc</label>
	    <div class="col-sm-10">
	      <input type="text" name="ruc" class="form-control" placeholder="Ruc" value="{{ $cliente->ruc }}">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
	    <div class="col-sm-10">
	      <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="{{ $cliente->nombre }}">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="tipo" class="col-sm-2 control-label">Tipo de cliente</label>
	    <div class="col-sm-10">
	      <select name="tipo" class="form-control">

	      	<option value="fabricante" @if($cliente->tipo == "fabricante") selected @endif>Fabricante</option>
	      	<option value="distribuidor" @if($cliente->tipo == "distribuidor") selected @endif>Distribuidor</option>
	      	<option value="mayorista" @if($cliente->tipo == "mayorista") selected @endif>Mayorista</option>
	      </select>
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default">Guardar</button>
	      <a href="{{ url('/admin/clientes') }}" class="btn btn-danger">Cancelar</a>
	    </div>
	  </div>
	</form>

@endsection
