<div class="form-group">
  {!!Form::label('titulo','Titulo*:', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12'])!!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!!Form::text('titulo',null, ['class' => 'form-control col-md-7 col-xs-12'])!!}
  </div>
</div>
<div class="form-group">
  {!!Form::label('descripcion','Descripción*:', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12'])!!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!!Form::textarea('descripcion',null, ['class' => 'resizable_textarea form-control', 'placeholder' =>'Descripción del campo'])!!}
  </div>
</div>
<div class="form-group">
  {!!Form::label('helppage_id','Vista*: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12'])!!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!!Form::select('helppage_id', $Vistas, null, ['class' => 'form-control', 'placeholder' => 'Seleccione una opcion'] )!!}
  </div>
</div>