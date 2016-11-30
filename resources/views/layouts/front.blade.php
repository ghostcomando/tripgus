<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Tripgus</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/front.css">
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.css">
	<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="js/Moment.js"></script>
	<script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>
</head>
<body>
	<header>
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbarPpal">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-Tripgus">
					<span class="sr-only">Desplegar / Ocultar Menu</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="/" class="navbar-brand">
					<img alt="Brand" src="images/Tripgus.jpg">
				</a>
			</div>
			<div class="collapse navbar-collapse" id="navegacion-Tripgus">
				<ul class="nav navbar-nav">
					<li><a href="#modalInicioSesion" data-toggle="modal">Inicia sesi&oacute;n</a></li>
					<li><a href="#modalRegistro" data-toggle="modal">Reg&iacute;strate </a></li>
					<li><a href="/Help">Ayuda</a></li>
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
	<section class="jumbotron">
		<div class="container">
			<h1>Tripgus</h1>
			<p>Guias turisticos universitarios!</p>
		</div>
	</section>
	<div class="container">
		<div class="col-md-12">
			<div id="slide1" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#slide1" data-slide-to="0" class="active"></li>
					<li data-target="#slide1" data-slide-to="1"></li>
					<li data-target="#slide1" data-slide-to="2"></li>
					<li data-target="#slide1" data-slide-to="3"></li>
					<li data-target="#slide1" data-slide-to="4"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="images/slider1.jpg" alt="" class="img-responsive">
						<div class="carousel-caption">
							<h4>Slide 1</h4>
							<p>Somos es una red de guías o informadores turísticos conformada por estudiantes universitarios activos de diferentes nacionalidades, que te guiarán y asesorarán en cada una de sus ciudades de residencia estudiantil para que tus viajes de turismo o negocios, sean una experiencia segura, placentera y ante todo económica.</p>	
						</div>						
					</div>
					<div class="item">
						<img src="images/slider2.jpg" alt="" class="img-responsive">
						<div class="carousel-caption">
							<h4>Slide 2</h4>
							<p>Lorem ipsum dolor sit amet.</p>	
						</div>						
					</div>
					<div class="item">
						<img src="images/slider3.jpg" alt="" class="img-responsive">
						<div class="carousel-caption">
							<h4>Slide 3</h4>
							<p>Lorem ipsum dolor sit amet.</p>	
						</div>						
					</div>
					<div class="item">
						<img src="images/slider4.jpg" alt="" class="img-responsive">
						<div class="carousel-caption">
							<h4>Slide 4</h4>
							<p>Lorem ipsum dolor sit amet.</p>	
						</div>						
					</div>
					<div class="item">
						<img src="images/slider5.jpg" alt="" class="img-responsive">
						<div class="carousel-caption">
							<h4>Slide 5</h4>
							<p>Lorem ipsum dolor sit amet.</p>	
						</div>						
					</div>
				</div>
				<a href="#slide1" class="left carousel-control" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Anterior</span>
				</a>
				<a href="#slide1" class="right carousel-control" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Siguiente</span>
				</a>					
			</div>
		</div>
	</div>
	<section class="main container">
		<div class="row">
			<section class="posts col-md-9">
				<div class="miga-de-pan">
					<ol class="breadcrumb">
						<li><a href="#">Inicio</a></li>
						<li><a href="#">Categorias</a></li>
						<li><a href="#">Contacto </a></li>
					</ol>
				</div>
				<aside class="col-md-3 hidden-xs hidden-sm">
					<h4>Categorias</h4>
					<div class="list-group">
						<a href="#" class="list-group-item active">Opcion1</a>
						<a href="#" class="list-group-item">Opcion2</a>
						<a href="#" class="list-group-item">Opcion3</a>
						<a href="#" class="list-group-item">Opcion4</a>
						<a href="#" class="list-group-item">Opcion5</a>
						<a href="#" class="list-group-item">Opcion6</a>
						<a href="#" class="list-group-item">Opcion7</a>
					</div>
					<h4>Articulos recientes</h4>
					<a href="#" class="list-group-item">
						<h4 class="list-group-item-heading">Titulo articulo 1</h4>
						<p class="list-group-item-text">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo fugiat, explicabo laboriosam assumenda ratione commodi nisi repudiandae necessitatibus totam distinctio at, suscipit provident voluptates. Iusto minus nam corporis architecto quam.
						</p>
					</a>
					<a href="#" class="list-group-item">
						<h4 class="list-group-item-heading">Titulo articulo 2</h4>
						<p class="list-group-item-text">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo fugiat, explicabo laboriosam assumenda ratione commodi nisi repudiandae necessitatibus totam distinctio at, suscipit provident voluptates. Iusto minus nam corporis architecto quam.
						</p>
					</a>
				</aside>
				@yield('content')
			</section>
		</div>
	</section>	
	<footer>
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
	</footer>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>