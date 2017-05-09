<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Register</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


</head>
<body>
	<div class="container">
		<div class="row">
			<h1 class="page-header">
				<span>Registrarse</span>
			</h1>
			<form action="{{ url('/register') }}" method="POST">
		{{ csrf_field() }}
			  <div class="form-group">
			    <label for="ruc">RUC</label>
			    <input type="text" class="form-control" name="ruc" placeholder="RUC">
			  </div>
			  <div class="form-group">
			    <label for="nombre">Nombre</label>
			    <input type="text" class="form-control" name="nombre" placeholder="Nombre">
			  </div>
			  <div class="form-group">
			    <label for="email">Email address</label>
			    <input type="email" class="form-control" name="email" placeholder="Email">
			  </div>
			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" class="form-control" name="password" placeholder="Password">
			  </div>
			  <div class="form-group">
			    <label for="tipo" class="control-label">Tipo de cliente</label>
			      <select name="tipo" class="form-control">
			      	<option value="fabricante">Fabricante</option>
			      	<option value="distribuidor">Distribuidor</option>
			      	<option value="mayorista">Mayorista</option>
			      </select>
			  </div>
			  <button type="submit" class="btn btn-primary">Registrarse</button>
			</form>
		</div>
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>