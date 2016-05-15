<div class="form-group">
	{!!Form::label('Nombre del Encuentro')!!}
	{!!Form::text('nombre_encuentro', null, ['class' => 'form-control'])!!}
	</br>

	{!!Form::label('Tipo de Grupo')!!}
	{!!Form::select('tipo_grupo', ['i' => 'Grupo Investigación', 'e' => 'Grupo Estudio', 'ps' => 'Grupo Proyección Social'], null, ['class' => 'form-control'])!!}
	</br>

	{!!Form::label('Ponente')!!}
	{!!Form::select('id_profesor', $nombre_profesor->toArray(), null,['class' => 'form-control select', 'placeholder' => ''])!!}
	</br></br>

	{!!Form::label('Fecha de Realización')!!}
	 <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_realizacion', null, ['id' => 'datepicker2', 'class'=>'picker form-control', 'readonly'])!!}
	</div></br>

	{!!Form::label('Modalidad')!!}</br>
    {!!Form::label('Oral')!!}
    {!!Form::radio('modalidad', 'oral', false)!!} &nbsp
    {!!Form::label('Póster')!!}
    {!!Form::radio('modalidad', 'poster', false)!!}
	</br></br>

	{!!Form::label('Lugar')!!}
	{!!Form::text('lugar', null, ['class' => 'form-control'])!!}
</div>