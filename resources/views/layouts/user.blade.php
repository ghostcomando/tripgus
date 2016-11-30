<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Tripgus</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/front.css">
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="js/Moment.js"></script>
	<script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>
</head>
<body>
	<header>
		<nav class="navbar navbar-default" role="navigation" id="navbarPpal">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-Tripgus1">
					<span class="sr-only">Desplegar / Ocultar Menu</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="/" class="navbar-brand">
					<img alt="Brand" src="images/Tripgus.jpg">
				</a>
			</div>
			<div class="collapse navbar-collapse" id="navegacion-Tripgus1">
				<ul class="nav navbar-nav">
					<li><a href="#">Mensajes</a></li>
					<li><a href="#">Ayuda</a></li>
				</ul>
				<form action="" class="navbar-form navbar-right" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Busqueda Tripgus">
					</div>
					<button type="submit" class="btn btn-danger">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
	                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
	                       {!!Auth::user()->name!!}<i class="fa fa-user fa-fw"></i> 
	                    </a>
	                    <ul class="dropdown-menu dropdown-user">
	                        <li>
	                        	<a href="{!!URL::to('/logout')!!}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
	                        </li>
	                    </ul>
	            	</li>
				</ul>
			</div>
		</nav>
		<nav class="navbar navbar-inverse" role="navigation" id="navbarUser">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-Tripgus2">
						<span class="sr-only">Desplegar / Ocultar Menu</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="navegacion-Tripgus2">
					<ul class="nav navbar-nav">
						<li><a href="#">Escritorio</a></li>
						<li><a href="#">Bandeja de entrada </a></li>
						<li><a href="#">Tus anuncios</a></li>
						<li><a href="#">Perfil</a></li>
						<li><a href="#">Cuenta</a></li>
						<li><a href="#">Invitar a un amigo</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	@yield('content')
	<footer>		
		<div class="container-fluid">
			<div class="panel panel-default">		 	 
				<div class="panel-body">
					<div class="row">
						<aside class="col-xs-3">
							<div class="dropdown">
						 		<button class="btn btn-default dropdown-toggle" type="button" id="dropdownIdioma" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						    		Idioma
						    		<span class="caret"></span>
						  		</button>
						  		<ul class="dropdown-menu" aria-labelledby="dropdownIdioma">
								    <li><a href="#">Action</a></li>
								    <li><a href="#">Another action</a></li>
								    <li><a href="#">Something else here</a></li>
								    <li role="separator" class="divider"></li>
								    <li><a href="#">Separated link</a></li>
							  	</ul>
							</div>
							<br>
							<div class="dropdown">
						 		<button class="btn btn-default dropdown-toggle" type="button" id="dropdownCop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						    		Moneda
						    		<span class="caret"></span>
						  		</button>
						  		<ul class="dropdown-menu" aria-labelledby="dropdownCop">
								    <li><a href="#">Action</a></li>
								    <li><a href="#">Another action</a></li>
								    <li><a href="#">Something else here</a></li>
								    <li role="separator" class="divider"></li>
								    <li><a href="#">Separated link</a></li>
							  	</ul>
							</div>
						</aside>					
						<aside class="col-xs-3">
							<h4>Categorias</h4>
							<div class="list-group">
								<a href="#" class="list-group-item">Editar perfil</a>
								<a href="#" class="list-group-item">Fotos, s&iacute;mbolos y v&iacute;deos</a>
								<a href="#" class="list-group-item">Confianza y verificaci&oacute;n</a>
								<a href="#" class="list-group-item">Evaluaciones</a>
								<a href="#" class="list-group-item">Referencias</a>
							</div>
						</aside>
						<aside class="col-xs-3">
							<h4>Categorias</h4>
							<div class="list-group">
								<a href="#" class="list-group-item">Editar perfil</a>
								<a href="#" class="list-group-item">Fotos, s&iacute;mbolos y v&iacute;deos</a>
								<a href="#" class="list-group-item">Confianza y verificaci&oacute;n</a>
								<a href="#" class="list-group-item">Evaluaciones</a>
								<a href="#" class="list-group-item">Referencias</a>
							</div>
						</aside>
						<aside class="col-xs-3">
							<h4>Categorias</h4>
							<div class="list-group">
								<a href="#" class="list-group-item">Editar perfil</a>
								<a href="#" class="list-group-item">Fotos, s&iacute;mbolos y v&iacute;deos</a>
								<a href="#" class="list-group-item">Confianza y verificaci&oacute;n</a>
								<a href="#" class="list-group-item">Evaluaciones</a>
								<a href="#" class="list-group-item">Referencias</a>
							</div>
						</aside>
					</div>
					<div class="row">
						<div class="col-xs-6">
							<p>Tripgus Desarrolladores (R)</p>
						</div>
						<div class="col-xs-6">
							<ul class="list-inline text-right">
								<li><a href="#">Inicio</a></li>
								<li><a href="#">Categorias</a></li>
								<li><a href="#">Contacto</a></li>
							</ul>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</footer>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>