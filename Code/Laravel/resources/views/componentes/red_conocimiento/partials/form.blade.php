<div class="form-group">
	{!!Form::label('Nombre de la Red')!!}
    {!!Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Digite Nombre de la Red'])!!}
    </br>
		{!!Form::label('Responsable')!!}
    {!!Form::select('id_responsable',$nombre_profesor->toArray(), null, ['class' => 'select form-control', 'placeholder' => '']) !!}
      </br></br>

    {!!Form::label('Propósito')!!}
    {!!Form::text('proposito', null, ['class'=>'form-control', 'placeholder'=>''])!!}
    </br>

	{!!Form::label('Compromiso')!!}
    {!!Form::text('compromiso', null, ['class'=>'form-control', 'placeholder'=>''])!!}
    </br>

		{!!Form::label('Teléfono')!!}
		<div class="input-group">
			<div class="input-group-addon">
				<i class="fa fa-phone"></i>
			</div>
		{!!Form::text('telefono', null, ['class'=>'form-control', 'placeholder'=>''])!!}
		</div>
        </br>

		{!!Form::label('Dirección')!!}
    {!!Form::text('direccion', null, ['class'=>'form-control', 'placeholder'=>''])!!}
</br>

	{!!Form::label('Email')!!}
    {!!Form::text('email', null, ['class'=>'form-control', 'placeholder'=>''])!!}
</br>

		{!!Form::label('Fecha de Última Reunión')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_ultima_reunion', null, ['id' => 'datepicker2', 'class'=>'picker form-control', 'readonly'])!!}
    </div></br>

		{!!Form::label('Asistentes')!!}
    {!!Form::text('asistentes', null, ['class'=>'form-control', 'placeholder'=>''])!!}

</div>
