@extends('layouts.user')
@section('content')	
<aside class="col-md-9">
{!!Form::open(['route'=>'User.store', 'method'=>'POST'])!!}
	@include('forms.user.user')
	<div class="form-group">
		{!!Form::submit('Guardar',['class'=>'btn btn-danger'])!!}
	</div>
{!!Form::close()!!}
</aside>
@stop