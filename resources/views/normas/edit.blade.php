@extends('layout-admin')
@section('sidebar')
	<?php $menu_name = "normas"; ?>
	@parent
@endsection

@section('content')
	<h1 class="page-header">
		<span>Editar Norma</span>
	</h1>
	
	<form action="{{ url("/admin/normas/$norma->id") }}" method="POST" class="form-horizontal">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
	  <div class="form-group">
	    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
	    <div class="col-sm-10">
	      <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="{{ $norma->nombre }}">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="descripcion" class="col-sm-2 control-label">Descripcion</label>
	    <div class="col-sm-10">
	      <input type="text" name="descripcion" class="form-control" placeholder="Descripción" value="{{ $norma->descripcion }}">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="tipo" class="col-sm-2 control-label">Tipo</label>
	    <div class="col-sm-10">
	      <select name="tipo" class="form-control">
	      		<option value="iso"  @if($norma->tipo == "iso") selected @endif  >ISO</option>
	      		<option value="inen"  @if($norma->tipo == "inen") selected @endif  >INEN</option>
	      		<option value="europeo"  @if($norma->tipo == "europeo") selected @endif  >Europeo</option>
	      </select>
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default">Guardar</button>
	      <a href="{{ url('/admin/normas') }}" class="btn btn-danger">Cancelar</a>
	    </div>
	  </div>
	</form>

@endsection
