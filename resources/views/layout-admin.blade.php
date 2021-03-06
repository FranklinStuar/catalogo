<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Bootstrap 101 Template</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


	<link rel="stylesheet" href="{{ url('css/app.css') }}">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
  </head>
  <body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="{{ url('/') }}">Equisplast</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
		  <ul class="nav navbar-nav navbar-right">
				@if (Auth::guest())
					<li><a href="{{ url('/login') }}">Login</a></li>
					<li><a href="{{ url('/register') }}">Register</a></li>
				@else
					<li><a href="">Hola {{Auth::user()->name}}</a></li>
					<li><a href="{{ url('/logout') }}">Cerrar Sesion</a></li>
				@endif
		  </ul>
		  
		</div>
	  </div>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3 col-md-2 sidebar">
				<ul class="nav nav-sidebar">
					@section('sidebar')
						<li @if($menu_name == "inicio") class="active" @endif ><a href="{{ url('/admin') }}">Inicio</a></li>
						<li @if($menu_name == "gamas") class="active" @endif ><a href="{{ url('/admin/gama') }}">Gamas</a></li>
						<li @if($menu_name == "lineas") class="active" @endif ><a href="{{ url('/admin/lineas') }}">Lineas</a></li>
						<li @if($menu_name == "normas") class="active" @endif ><a href="{{ url('/admin/normas') }}">Normas</a></li>
						<li @if($menu_name == "productos") class="active" @endif ><a href="{{ url('/admin/productos') }}">Productos</a></li>
						<li @if($menu_name == "clientes") class="active" @endif ><a href="{{ url('/admin/clientes') }}">Clientes</a></li>
						{{-- <li @if($menu_name == "pedidos") class="active" @endif ><a href="{{ url('/admin/pedidos') }}">Pedidos</a></li> --}}
					@show
				</ul>
			</div>
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				@yield('content')
			</div>
		</div>
	</div>









	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>