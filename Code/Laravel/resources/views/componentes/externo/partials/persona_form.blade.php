<div class="form-group">
	{!!Form::label('nombre')!!}
    {!!Form::text('nombre_externo', null, ['class'=>'form-control', 'placeholder'=>''])!!}
	</br>
	{!!Form::hidden('tipo_externo', isset($tipo_externo) ? $tipo_externo : null )!!}
	{!!Form::hidden('id_externo', isset($externo) ? $externo->id : null )!!}
	{!!Form::hidden('componente', $componente)!!}

  {!!Form::label('Teléfono')!!}
	<div class="input-group">
		<div class="input-group-addon">
			<i class="fa fa-phone"></i>
		</div>
	{!!Form::text('telefono', null, ['class'=>'form-control', 'placeholder'=>''])!!}
	</div></br>

	{!!Form::label('Correo')!!}
	<div class="input-group">
		<div class="input-group-addon">
			<i class="fa fa-envelope"></i>
		</div>
	{!!Form::text('correo', null, ['class'=>'form-control', 'placeholder'=>''])!!}
	</div>
		</br>

	{!!Form::label('Dirección')!!}
	<div class="input-group">
		<div class="input-group-addon">
			<i class="fa fa-home"></i>
		</div>
	{!!Form::text('direccion', null, ['class'=>'form-control', 'placeholder'=>''])!!}
	</div></br>

	{!!Form::label('Area de Conocimiento')!!}
    {!!Form::text('area_conocimiento', null, ['class'=>'form-control', 'placeholder'=>''])!!}
    </br>
    
    {!!Form::label('Nivel de Estudio')!!}
  	{!!Form::text('nivel_estudio', null, ['class'=>'form-control', 'placeholder'=>''])!!}
  	</br>

	{!!Form::label('Años de Experiencia')!!}
  	{!!Form::text('experiencia', null, ['class'=>'form-control', 'placeholder'=>''])!!}
		</br>
</div>
