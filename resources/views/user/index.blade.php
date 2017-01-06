@extends('layouts.user')
@section('content')	
<aside class="col-md-3 hidden-xs hidden-sm">
	<div class="list-group">
		<a href="#" class="list-group-item">Editar perfil</a>
		<a href="#" class="list-group-item">Fotos, s&iacute;mbolos y v&iacute;deos</a>
		<a href="#" class="list-group-item">Confianza y verificaci&oacute;n</a>
		<a href="#" class="list-group-item">Evaluaciones</a>
		<a href="#" class="list-group-item">Referencias</a>
	</div>
</aside>
<aside class="col-md-9">
{!!Form::open(['route'=>'User.store', 'method'=>'POST'])!!}
	@include('forms.user.user')
	<div class="form-group">
		{!!Form::submit('Guardar',['class'=>'btn btn-danger'])!!}
	</div>
{!!Form::close()!!}
</aside>
@stop