<div class="form-group">
	{!!Form::label('Nombre del Encuentro')!!}
	{!!Form::text('nombre_encuentro', null, ['class' => 'form-control'])!!}
	</br>

	{!!Form::label('Tipo de Grupo')!!}
	{!!Form::select('tipo_grupo', ['i' => 'Grupo Investigación', 'e' => 'Grupo Estudio', 'ps' => 'Grupo Proyección Social'], null, ['class' => 'form-control'])!!}
	</br>

	{!! Form::label('Ponente') !!}
    <div id="div_profesor">
            {!! Form::text('profesor', isset($encuentro->profesor) ? $encuentro->profesor->nombre : null,['class' => 'form-control', 'id' => 'nombre_profesor','placeholder'=>'Buscar por nombre o Cédula']) !!}
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

	{!!Form::label('Modalidad')!!}
	<div class="row text-center">
		<div class="col-xs-2">
		{!!Form::label('Oral')!!}
    	{!!Form::radio('modalidad', 'oral', false, ['class' => 'iradio_minimal-red'])!!}		
		</div>
		<div class="col-xs-2">
		{!!Form::label('Póster')!!}
    	{!!Form::radio('modalidad', 'poster', false, ['class' => 'iradio_minimal-red'])!!}		
		</div>
	</div>    
	</br>

	{!!Form::label('lugar de realización')!!}
    <div class="row">
       <div id="div_lugar_nacional">
         <div class="col-xs-5">
         {!!Form::label('departamento')!!}
         {!!Form::select('departamento', $departamentos, null, ['class' => 'form-control', 'id' => 'select_departamento', 'placeholder' => 'Seleccione Departamento'])!!}
       </div>
       <div class="col-xs-5">
       {!!Form::label('municipio')!!}
         {!!Form::select('municipio', isset($municipios) ? $municipios : ['' => ''], null, ['class' => 'form-control', 'id' => 'select_municipio'])!!}
       </div>
       </div>
    </div>
    <br>
</div>