<div class="panel panel-default">
	<div class="panel-heading">
    	<h3 class="panel-title">Obligatorio</h3>
 	 </div>				 	 
	<div class="panel-body">
        <div class="form-group">
		  {!!Form::label('pais','Pais*: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12'])!!}
		  <div class="col-md-9 col-sm-6 col-xs-12">
		    {!!Form::select('pais', $Pais, null, ['id'=>'pais', 'class' => 'form-control', 'placeholder' => 'Seleccione una opcion'] )!!}
		  </div>
		</div>	
		<div class="form-group">
		  {!!Form::label('estado','Estado / Departamento*: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12'])!!}
		  <div class="col-md-9 col-sm-6 col-xs-12">
		    {!!Form::select('estado', [], null, ['id'=>'estado', 'class' => 'form-control', 'placeholder' => 'Seleccione una opcion'] )!!}
		  </div>
		</div>	
		<div class="form-group">
		  {!!Form::label('ciudad','Ciudad / Municipio*: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12'])!!}
		  <div class="col-md-9 col-sm-6 col-xs-12">
		    {!!Form::select('ciudad', [], null, ['id'=>'ciudad', 'class' => 'form-control', 'placeholder' => 'Seleccione una opcion'] )!!}
		  </div>
		</div>
		<div class="form-group">
		  {!!Form::label('descripcion','Descripción*:', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12'])!!}
		  <div class="col-md-9 col-sm-6 col-xs-12">
		    {!!Form::textarea('descripcion',null, ['class' => 'resizable_textarea form-control', 'placeholder' =>'Descripción del plan turístico'])!!}
		  </div>
		</div>
		<div class="form-group">
		  {!!Form::label('precio','Precio*: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12'])!!}
		  <div class="col-md-9 col-sm-6 col-xs-12">
		    {!!Form::text('precio',null, ['class' => 'form-control col-md-7 col-xs-12', 'placeholder' =>'$'])!!}
		  </div>
		</div>	
	</div>				 
</div>
<div class="panel panel-default">
	<div class="panel-heading">
    	<h3 class="panel-title">Opcional</h3>
 	 </div>				 	 
	<div class="panel-body">
		
	</div>	
</div>
<div class="panel panel-default">
	<div class="panel-heading">
    	<h3 class="panel-title">Otro</h3>
 	 </div>				 	 
	<div class="panel-body">
		
	</div>	
</div>
<script type="text/javascript">
	$('#pais').on('change', function(e)
	{
		var pais_id = e.target.value;
		$.get('/states?pais_id='+pais_id, function(data)
		{
			$('#estado').empty();
			$.each(data, function(index, stateObj)
			{
				$('#estado').attr('placeholder', 'Seleccioneeee una opcion');
				$.each(stateObj, function(index, state)
				{
				console.log(state);
				$('#estado').append('<option value="'+state.id+'">'+state.state+'</option>');
				});
			});
		});
	});

	$('#estado').on('change', function(e)
	{
		var estado_id = e.target.value;
		$.get('/cities?estado_id='+estado_id, function(data)
		{
			$('#ciudad').empty();
			$('#ciudad').placeholder = "Seleccione una opcion";
			$.each(data, function(index, cityObj)
			{
				$.each(cityObj, function(index, city)
				{
				console.log(city);
				$('#ciudad').append('<option value="'+city.id+'">'+city.city+'</option>');
				});
			});
		});
	});
</script>