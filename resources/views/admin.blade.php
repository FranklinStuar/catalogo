@extends('layout-admin')
@section('sidebar')
	<?php $menu_name = "inicio"; ?>
	@parent
@endsection



@section('content')
	<div class="row placeholders">
    <div class="col-xs-4 col-sm-2 placeholder">
      <a href="{{ url('/admin/gama') }}">
	      <img src="http://4.bp.blogspot.com/-zI5LKkOqdxw/UYh2HZ827fI/AAAAAAAAAsU/JLCA21bVJ4U/s1600/list.png" class="img-responsive img-link" alt="link to">
	      <h4>Gamas</h4>
      </a>
    </div>
    <div class="col-xs-4 col-sm-2 placeholder">
      <a href="{{ url('/admin/lineas') }}">
	      <img src="https://cdn3.iconfinder.com/data/icons/inficons-set-2/512/648927-star-ratings-512.png" class="img-responsive" alt="Generic placeholder thumbnail" width="200" height="200">
	      <h4>Lineas</h4>
      </a>
    </div>
    <div class="col-xs-4 col-sm-2 placeholder">
      <a href="{{ url('/admin/productos') }}">
	      <img src="https://www.2checkout.com/upload/images/graphic_product_tangible.png" class="img-responsive" alt="Generic placeholder thumbnail" width="200" height="200">
	      <h4>Productos</h4>
      </a>
    </div>
    <div class="col-xs-4 col-sm-2 placeholder">
      <a href="{{ url('/admin/clientes') }}">
	      <img src="http://www.facsa.ulg.ac.be/upload/docs/image/jpeg/2016-12/user.jpg" class="img-responsive" alt="Generic placeholder thumbnail" width="200" height="200">
	      <h4>Clientes</h4>
      </a>
    </div>
  </div>
@endsection
