@extends('layouts.help')
@section('content')
	@foreach($infos as $info)
	<aside class="col-md-offset-3">
		<h4>{{$info->titulo}}</h4>
		<p>
			{{$info->descripcion}}
		</p>
	</aside>
	@endforeach
@stop