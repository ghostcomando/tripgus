@extends('layouts.user')
@section('content')
<aside class="col-md-9">
{!!Form::open(['route'=>'User.store', 'method'=>'POST'])!!}
	@include('forms.user.myplan')
	<div class="form-group">
		{!!Form::submit('Crear',['class'=>'btn btn-danger'])!!}
	</div>
{!!Form::close()!!}
</aside>
@stop