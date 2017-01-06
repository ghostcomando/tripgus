@extends('layouts.user')
@section('content')
<aside class="col-md-3 hidden-xs hidden-sm">
	<div class="list-group">
		<a href="/Myplans" class="list-group-item">Mis planes</a>
		<a href="/Myplans/create" class="list-group-item">Crear plan turístico</a>
	</div>
</aside>
<aside class="col-md-9">
{!!Form::model($plan, ['route'=>['Myplans.update', $plan->id], 'method'=>'PUT', 'files'=>true])!!}
	@include('forms.user.myplan')
	<div class="form-group">
		{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	</div>
	{!!Form::open(['route'=>['Myplans.destroy', $plan->id], 'method'=>'DELETE'])!!}
	{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
{!!Form::close()!!}
</aside>
@stop