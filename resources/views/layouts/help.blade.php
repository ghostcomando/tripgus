<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Tripgus</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/front.css">
	<link rel="stylesheet" href="../css/bootstrap-datetimepicker.css">
	<link rel="stylesheet" href="../css/font-awesome.css">
	<script type="text/javascript" src="../js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="../js/Moment.js"></script>
	<script type="text/javascript" src="../js/bootstrap-datetimepicker.js"></script>
</head>
<body>
	<header>
		<section class="jumbotron">
		<div class="container">
			<h1>Tripgus</h1>
			<p>Guias turisticos universitarios!</p>
		</div>
		</section>
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbarPpal">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-Tripgus">
					<span class="sr-only">Desplegar / Ocultar Menu</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="/" class="navbar-brand">
					<img alt="Brand" src="../images/Tripgus.jpg">
				</a>
			</div>
			<div class="collapse navbar-collapse" id="navegacion-Tripgus">
				<ul class="nav navbar-nav">
					<li><a href="#modalInicioSesion" data-toggle="modal">Inicia sesi&oacute;n</a></li>
					<li><a href="#modalRegistro" data-toggle="modal">Reg&iacute;strate </a></li>
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
			</div>
		</nav>
		<div class="modal fade" id="modalRegistro" tabindex='-1'>
			<div class="modal-dialog" role="document">
			    <div class="modal-content">
			      	<div class="modal-header">
			        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			       		<h4 class="modal-title">Registro</h4>
			      	</div>
			      	<div class="modal-body">
			        	<div class="container-fluid">
					        {!!Form::open(['route'=>'User.store', 'method'=>'POST'])!!}
					            <div class="form-group">
						            {!!Form::label('Nombres: ')!!}
						            {!!Form::text('name',null, ['class'=>'form-control', 'placeholder'=>'Nombres'])!!}
					            </div>
					            <div class="form-group">
						            {!!Form::label('Apellidos: ')!!}
						            {!!Form::text('lastname',null, ['class'=>'form-control', 'placeholder'=>'Apellidos'])!!}
					            </div>
					            <div class="form-group">
					            {!!Form::label('Fecha de nacimiento: ')!!}
					                <div class='input-group date' id='datetimepicker'>
					                    {!!Form::text('birthdate',null, ['class'=>'form-control', 'placeholder'=>'YYYY-MM-DD'])!!}
					                    <span class="input-group-addon">
					                        <span class="glyphicon glyphicon-calendar"></span>
					                    </span>
					                </div>
					            </div>
						        <script type="text/javascript">
						            $(function () {
						                $('#datetimepicker').datetimepicker({
						                    viewMode: 'years',
						                	format: 'YYYY-MM-DD',
						                });
						            });
						        </script>
					            <div class="form-group">
						            {!!Form::label('Correo: ')!!}
						            {!!Form::text('email',null, ['class'=>'form-control', 'placeholder'=>'Correo electrónico'])!!}
					            </div>
					            <div class="form-group">
						            {!!form::label('Contrase&ntilde;a: ')!!}
						            {!!form::password('password', ['class'=>'form-control', 'placeholder'=>'Ingresa la contrase&ntilde;a'])!!}
					            </div>
						            <p>
						      			Al registrarme, acepto las Condiciones del servicio, la Pol&iacute;tica contra la discriminaci&oacute;n, las Condiciones sobre pagos, la Pol&iacute;tica de Privacidad y de Cookies, la Pol&iacute;tica de reembolso al hu&eacute;sped y la Condiciones de la Garant&iacute;a al anfitri&oacute;n de Tripgus. 
						      		</p>
					            <div class="form-group">
					        		{!!Form::submit('Registrarse',['class'=>'btn btn-danger'])!!}
			            		</div>
			            		<p>Ya estas registrado?</p>
			            		<a href="#modalInicioSesion" data-toggle="modal" data-dismiss="modal">Inicia sesi&oacute;n</a>
        					{!!Form::close()!!} 
   						</div>
			      	</div>
			      	<div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			      	</div>
			    </div>
			</div>
		</div>
		<div class="modal fade" id="modalInicioSesion" tabindex='-1'>
			<div class="modal-dialog" role="document">
			    <div class="modal-content">
			      	<div class="modal-header">
			        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			       		<h4 class="modal-title">Inicio de sesi&oacute;n</h4>
			      	</div>
			      	<div class="modal-body">
			        	<div class="container-fluid">
					        {!!Form::open(['route'=>'log.store', 'method'=>'POST'])!!}
					            <div class="form-group">
					            {!!Form::label('Correo: ')!!}
					            {!!Form::text('email',null, ['class'=>'form-control', 'placeholder'=>'Correo electrónico'])!!}
					            </div>
					            <div class="form-group">
					            {!!form::label('Contrase&ntilde;a: ')!!}
					            {!!form::password('password', ['class'=>'form-control', 'placeholder'=>'Ingresa la contrase&ntilde;a'])!!}
					            </div>
					            <div class="form-group">
					        		{!!Form::submit('Iniciar sesi&oacute;n',['class'=>'btn btn-danger'])!!}
			            		</div>
			            		<p>No te has registrado?</p>
			            		<a href="#modalRegistro" data-toggle="modal" data-dismiss="modal">Reg&iacute;strate </a>
        					{!!Form::close()!!} 
   						</div>
			      	</div>
			      	<div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			      	</div>
			    </div>
			</div>
		</div>
	</header>
	<section class="main container">
		<div class="row">
			<aside class="col-md-3 hidden-xs hidden-sm">
				<div class="list-group">
					<a href="/Help/HowDoesItWork" class="list-group-item">Como funciona</a>
					<a href="/Help/HowToTravel" class="list-group-item">Como viajar</a>
					<a href="/Help/HowToBeAGuide" class="list-group-item">Como ser un guia</a>
					<a href="/Help/Questions" class="list-group-item">Preguntas frecuentes</a>
				</div>
			</aside>
			@yield('content')
		</div>	
	</section>
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