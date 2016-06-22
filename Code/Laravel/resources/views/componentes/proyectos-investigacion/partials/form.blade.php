<div class="form-group">
	{!!Form::label('título')!!}
  {!!Form::text('titulo_proyecto', null, ['class'=>'form-control', 'placeholder'=>'Digite Nombre del Proyecto'])!!}
	{!! Form::hidden('tipo', 'i') !!}
        </br>

	{!!Form::label('tipo de proyecto')!!}<br>
	{!! Form::select('tipo_proyecto', array('cp' => 'Convocatoria Planta', 'ccr' => 'Convocatoria con Recursos', 'cc' => 'Convocatoria Colciencias', 'cct' => 'Convocatoria con Tiempos', 'cre' => 'Convocatoria Recursos Externos'), null, [ 'id' => 'select1', 'class' => 'form-control']) !!}
        </br>

    {!! Form::label('Investigador Principal') !!}
    {!! Form::text('profesor', null,['class' => 'form-control', 'id' => 'nombre_profesor','placeholder'=>'Buscar por nombre o Cédula']) !!}
     <div id="label_oculto_profesor"></div>
    {!! Form::hidden('id_investigador_principal', null, ['id' => 'id_profesor']) !!}
    </br>

	{!!Form::label('tema central')!!}<br>
	{!!Form::text('tema_central', null, ['class'=>'form-control', 'placeholder'=>''])!!}
		</br>

	<div class="box">
		<h4 class="box-title">Inicio</h4>
		<div class="row">
			<div class="col-xs-6">
				{!!Form::label('Fecha')!!}<br>
				<div class="input-group">
				<div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    		{!!Form::text('fecha_inicio', null, ['class'=>'picker form-control', 'readonly'])!!}
				</div>
			</div>
			<div class="col-xs-6">
				{!!Form::label('N° de acta')!!}<br>
				{!!Form::text('numero_acta', null, ['class'=>'form-control', 'placeholder'=>'Digite Numero de Acta'])!!}
			</div>
		</div>
	</div>

	{!!Form::label('red de conocimiento')!!}<br>
    {!!Form::select('id_red_conocimiento',$nombre_red->toArray(), null, ['class' => 'form-control', 'placeholder' => ' ']) !!}
		</br>

    <!--Avances-->
    <h4 class="box-title text-center">Avances</h4>
    <div class="box">
        <div class="box-body">
            <div class="row">
                <div class="col-xs-4">
                {!!Form::label('avance n° 1')!!}
                <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                {!!Form::text('fecha_avance1', null, ['class'=>'picker form-control', 'readonly'])!!}
                </div>
                </div>
                <div class="col-xs-4">
                {!!Form::label('avance n° 2')!!}
                <div class="input-group">
                       <div class="input-group-addon">
                         <i class="fa fa-calendar"></i>
                       </div>
                 {!!Form::text('fecha_avance2', null, ['class'=>'picker form-control', 'readonly'])!!}
                    </div>
                </div>
                <div class="col-xs-4">
                {!!Form::label('avance n° 3')!!}
                <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                {!!Form::text('fecha_avance3', null, ['class'=>'picker form-control', 'readonly'])!!}
                </div>
                </div>
            </div>
        </div>
    </div><!--Fin Avances-->


    {!!Form::label('fecha informe final')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_informe_final', null, ['class'=>'picker form-control', 'readonly'])!!}
    </div></br>

    {!!Form::label('fecha de prórroga')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_prorroga', null, ['class'=>'picker form-control', 'readonly'])!!}
    </div></br>

    {!!Form::label('valor efectivo del proyecto')!!}
    {!!Form::text('valor_efectivo', null, ['class'=>'form-control'])!!}
        </br>

	{!!Form::label('ejecutado')!!}
			 </br>
    {!!Form::label('si')!!}
    {!!Form::radio('ejecutado', 'Si', null)!!}&nbsp
    {!!Form::label('no')!!}
    {!!Form::radio('ejecutado', 'No', null)!!}
            </br> </br>
    {!!Form::label('tipo de beneficiados')!!}
    {!!Form::text('tipo_beneficiado', null, ['class'=>'form-control'])!!}
     </br>
	{!!Form::label('beneficiados')!!}
    {!!Form::text('beneficiados', null, ['class'=>'form-control'])!!}
     </br>
    {!!Form::label('población objeto de estudio')!!}
    {!!Form::text('poblacion_estudio', null, ['class'=>'form-control'])!!}
     </br>
    {!!Form::label('producto')!!}
    {!!Form::text('producto', null, ['class'=>'form-control'])!!}
</div>
