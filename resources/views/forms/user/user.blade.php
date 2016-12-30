<?php
	$name = Auth::user()->name;
	$lastname = Auth::user()->lastname;
	$birthdate = Auth::user()->birthdate;
	$email = Auth::user()->email;
?>
<div class="panel panel-default">
	<div class="panel-heading">
    	<h3 class="panel-title">Obligatorio</h3>
 	 </div>				 	 
	<div class="panel-body">
        <div class="form-group">
            {!!Form::label('Nombres: ')!!}
            {!!Form::text('name', $name, ['class'=>'form-control', 'placeholder'=>'Nombres'])!!}
        </div>
        <div class="form-group">
            {!!Form::label('Apellidos: ')!!}
            {!!Form::text('lastname',$lastname, ['class'=>'form-control', 'placeholder'=>'Apellidos'])!!}
        </div>
        <div class="form-group">
        {!!Form::label('Fecha de nacimiento: ')!!}
            <div class='input-group date' id='datetimepicker'>
                {!!Form::text('birthdate', $birthdate, ['class'=>'form-control', 'placeholder'=>'YYYY-MM-DD'])!!}
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
            {!!Form::text('email',$email, ['class'=>'form-control', 'placeholder'=>'Correo electrónico'])!!}
        </div>
        <div class="form-group">
            {!!Form::label('Descr&iacute;bete: ')!!}
            {!!Form::textarea('description',null, ['class'=>'form-control', 'rows'=>'3', 'placeholder'=>'Descr&iacute;bete'])!!}
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