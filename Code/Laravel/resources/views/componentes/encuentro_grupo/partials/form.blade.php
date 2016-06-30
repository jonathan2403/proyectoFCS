<div class="form-group">
	{!!Form::label('Nombre del Encuentro')!!}
	{!!Form::text('nombre_encuentro', null, ['class' => 'form-control'])!!}
	</br>

	{!!Form::label('Tipo de Grupo')!!}
	{!!Form::select('tipo_grupo', ['i' => 'Grupo Investigación', 'e' => 'Grupo Estudio', 'ps' => 'Grupo Proyección Social'], null, ['class' => 'form-control'])!!}
	</br>

	{!! Form::label('Ponente') !!}
    <div id="div_profesor">
            {!! Form::text('profesor', null,['class' => 'form-control', 'id' => 'nombre_profesor','placeholder'=>'Buscar por nombre o Cédula']) !!}
            <div id="label_oculto_profesor"></div>                     
            {!! Form::hidden('id_profesor', null, ['id' => 'id_profesor']) !!}
    </div>
    </br>


	{!!Form::label('Fecha de Realización')!!}
	 <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_realizacion', null, ['id' => 'datepicker2', 'class'=>'picker form-control', 'readonly'])!!}
	</div></br>

	{!!Form::label('Modalidad')!!}</br>
    {!!Form::label('Oral')!!}
    {!!Form::radio('modalidad', 'oral', false, ['class' => 'iradio_minimal-red'])!!} &nbsp
    {!!Form::label('Póster')!!}
    {!!Form::radio('modalidad', 'poster', false, ['class' => 'iradio_minimal-red'])!!}
	</br></br>

	{!!Form::label('Lugar')!!}
	{!!Form::text('lugar', null, ['class' => 'form-control'])!!}
</div>