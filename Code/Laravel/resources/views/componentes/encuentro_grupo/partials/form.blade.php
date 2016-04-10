<div class="form-group">
	{!!Form::label('Nombre del Encuentro')!!}
	{!!Form::text('nombre_encuentro', null, ['class' => 'form-control','required'])!!}
	</br>

	{!!Form::label('Tipo de Grupo')!!}
	{!!Form::select('tipo_grupo', ['i' => 'Grupo Investigación', 'e' => 'Grupo Estudio', 'ps' => 'Grupo Proyección Social'], null, ['class' => 'form-control','required'])!!}
	</br>

	{!!Form::label('Ponente')!!}
	{!!Form::select('id_profesor', $nombre_profesor->toArray(), null,['class' => 'form-control select', 'placeholder' => '','required'])!!}
	</br></br>

	{!!Form::label('Fecha del Encuentro')!!}
	 <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_realizacion', null, ['id' => 'datepicker2', 'class'=>'picker form-control', 'readonly'])!!}
	</div></br>

	{!!Form::label('Modalidad')!!}
	{!!Form::select('modalidad', ['oral' => 'Oral', 'poster' => 'Póster'], null, ['class' => 'form-control'])!!}
	</br>

	{!!Form::label('Lugar')!!}
	{!!Form::text('lugar', null, ['class' => 'form-control'])!!}
</div>