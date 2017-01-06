@extends('layouts.user')
@section('content')	
<aside class="col-md-3 hidden-xs hidden-sm">
	<div class="list-group">
		<a href="/Myplans" class="list-group-item">Mis planes</a>
		<a href="/Myplans/create" class="list-group-item">Crear plan turístico</a>
	</div>
</aside>
<aside class="col-md-9 hidden-xs hidden-sm">
	<table class="table">
		<thead>
			<th>Descripcion</th>
			<th>Precio</th>
			<th>Ciudad</th>
			<th>Imagen</th>
			<th>Operacion</th>
		</thead>
		@foreach($plans as $plan)
		<tbody>
			<td>{{$plan->description}}</td>
			<td>{{$plan->price}}</td>
			<td>{{$plan->city->city}}</td>
			<td>
				<img src="plans/{{$plan->image}}" alt="" class="img-thumbnail img-circle" style="width:100px; height: 100px">
			</td>
			<td>
				{!!link_to_route('Myplans.edit', $title = 'Editar', $parameters =$plan->id, $attributes = ['class'=>'btn btn-primary'])!!}
			</td>
		</tbody>
		@endforeach
	</table>
	{!!$plans->render()!!}
</aside>
@stop