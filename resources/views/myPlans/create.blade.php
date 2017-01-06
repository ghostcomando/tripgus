@extends('layouts.user')
@section('content')
<aside class="col-md-3 hidden-xs hidden-sm">
	<div class="list-group">
		<a href="/Myplans" class="list-group-item">Mis planes</a>
		<a href="/Myplans/create" class="list-group-item">Crear plan turístico</a>
	</div>
</aside>
<aside class="col-md-9">
{!!Form::open(['route'=>'Myplans.store', 'method'=>'POST', 'files'=>true])!!}
	@include('forms.user.myplan')
	<div class="form-group">
		{!!Form::submit('Crear',['class'=>'btn btn-danger'])!!}
	</div>
{!!Form::close()!!}
</aside>
@stop