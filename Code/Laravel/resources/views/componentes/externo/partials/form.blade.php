<div class="form-group">
	{!!Form::label('Nombre')!!}
  {!!Form::text('nombre_entidad', null, ['class'=>'form-control', 'placeholder'=>''])!!}
		</br>

	{!!Form::label('Tipo Externo')!!}
		 </br>
	{!!Form::label('Persona')!!}
	{!!Form::radio('tipo_entidad', 'p', false)!!} &nbsp
	{!!Form::label('Entidad')!!}
	{!!Form::radio('tipo_entidad', 'e', false)!!}
	</br></br>

  {!!Form::label('Teléfono')!!}
	<div class="input-group">
		<div class="input-group-addon">
			<i class="fa fa-phone"></i>
		</div>
	{!!Form::text('telefono', null, ['class'=>'form-control', 'placeholder'=>''])!!}
	</div></br>

	{!!Form::label('Email')!!}
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