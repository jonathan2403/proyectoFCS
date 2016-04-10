<div class="form-group">
	{!!Form::label('Titulo')!!}
  {!!Form::text('titulo_proyecto', null, ['class'=>'form-control', 'placeholder'=>'Digite Nombre del Proyecto','required'])!!}
	{!! Form::hidden('tipo', 'i') !!}
        </br>

	{!!Form::label('Tipo de Proyecto')!!}<br>
	{!! Form::select('tipo_proyecto', array('cp' => 'Convocatoria Planta', 'ccr' => 'Convocatoria con Recursos', 'cc' => 'Convocatoria Colciencias', 'cct' => 'Convocatoria con Tiempos', 'cre' => 'Convocatoria Recursos Externos'), null, [ 'id' => 'select1', 'class' => 'form-control']) !!}
        </br>

    {!!Form::label('Investigador Principal')!!}<br>
    {!!Form::select('id_investigador_principal',$nombre_profesor->toArray(), null, ['id' => 'select_profesor', 'class' => 'form-control select', 'placeholder' => ' ']) !!}
		</br></br>

		{!!Form::label('Tema Central De La Investigacion')!!}<br>
		{!!Form::text('tema_central', null, ['class'=>'form-control', 'placeholder'=>''])!!}
		</br>

		{!!Form::label('Red de Conocimiento')!!}<br>
    {!!Form::select('id_red_conocimiento',$nombre_red->toArray(), null, ['id' => 'select_profesor', 'class' => 'form-control select', 'placeholder' => ' ']) !!}
		</br></br>


    {!!Form::label('Fecha de Inicio')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_inicio', null, ['id' => 'datepicker2', 'class'=>'picker form-control', 'readonly'])!!}
    </div></br>

    {!!Form::label('Numero de Acta')!!}
    {!!Form::text('numero_acta', null, ['class'=>'form-control', 'placeholder'=>'Digite Numero de Acta'])!!}
        </br>

    {!!Form::label('Avance 1')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_avance1', null, ['id' => 'datepicker2', 'class'=>'picker form-control', 'readonly'])!!}
    </div></br>

    {!!Form::label('Avance 2')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_avance2', null, ['id' => 'datepicker2', 'class'=>'picker form-control', 'readonly'])!!}
    </div></br>

    {!!Form::label('Avance 3')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_avance3', null, ['id' => 'datepicker2', 'class'=>'picker form-control', 'readonly'])!!}
    </div></br>

    {!!Form::label('Fecha Informe Final')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_informe_final', null, ['id' => 'datepicker2', 'class'=>'picker form-control', 'readonly'])!!}
    </div></br>

    {!!Form::label('Fecha de Prorroga')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_prorroga', null, ['id' => 'datepicker2', 'class'=>'picker form-control', 'readonly'])!!}
    </div></br>

    {!!Form::label('Valor efectivo del Proyecto')!!}
    {!!Form::text('valor_efectivo', null, ['class'=>'form-control'])!!}
        </br>

	{!!Form::label('Ejecutado')!!}
			 </br>
    {!!Form::label('Si')!!}
    {!!Form::radio('ejecutado', 'Si', null)!!}&nbsp
    {!!Form::label('No')!!}
    {!!Form::radio('ejecutado', 'No', null)!!}
            </br> </br>
    {!!Form::label('Tipo de Beneficiados')!!}
    {!!Form::text('tipo_beneficiado', null, ['class'=>'form-control'])!!}
     </br>
	{!!Form::label('Beneficiados')!!}
    {!!Form::text('beneficiados', null, ['class'=>'form-control'])!!}
     </br>
    {!!Form::label('Poblacion Objeto de Estudio')!!}
    {!!Form::text('poblacion_estudio', null, ['class'=>'form-control'])!!}
     </br>
    {!!Form::label('Producto')!!}
    {!!Form::text('producto', null, ['class'=>'form-control'])!!}
</div>
