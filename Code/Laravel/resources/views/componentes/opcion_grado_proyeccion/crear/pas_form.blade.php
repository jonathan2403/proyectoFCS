<div class="form-group">
    {!! Form::hidden('tipo_opcion_grado', 'pas', ['id' => 'id_opcion_grado']) !!}
    {!!Form::label('Título')!!}
    {!!Form::text('descripcion', null, ['class'=>'form-control', 'placeholder'=>'Digite Titulo'])!!}
      </br>
    
    {!! Form::hidden('id_director', null, ['id' => 'id_profesor']) !!}
    {!!Form::label('Director de la Pasantía')!!}
    {!!Form::text('profesor', isset($opciongrado) ? $opciongrado->director->nombre : null , ['class'=>'form-control', 'placeholder'=>'Buscar por Nombre o Cédula', 'id' => 'nombre_profesor'])!!}
    <div id="label_oculto_profesor"></div>                     
      </br>

    {!! Form::hidden('id_externo', null, ['id' => 'id_externo']) !!}
    {!!Form::label('Coordinador de la Entidad')!!}
    {!!Form::text('persona_externa', isset($opciongrado->coordinadorExterno) ? $opciongrado->coordinadorExterno->nombre_externo : null , ['class'=>'form-control', 'placeholder'=>'Buscar por Nombre', 'id' => 'nombre_persona_externa'])!!}
    <div id="label_persona"></div>                     
        </br>

    {!!Form::label('Entidad')!!}
    {!! Form::select('id_entidad', $nombre_entidad->toArray(), null, ['class' => 'form-control', 'placeholder' => '']) !!}
  </br></br>

    <!--inicio entrega al comite-->
    <div class="box box-danger">
    <div class="box-header with-border">
            <h3 class="box-title">Entrega al Comité, Revisión y Aval</h3>
    </div>
      <div class="box-body text-center">
      <div class="row">
        <div class="col-xs-4">
          {!!Form::label('fecha de entrega')!!}<br>
          <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
          </div>
          {!!Form::text('fecha_aprobacion', null, ['class'=>'picker form-control', 'readonly'])!!}
          </div>
        </div>
        <div class="col-xs-4">
          {!!Form::label('concepto')!!}<br>
          {!! Form::select('concepto_1', array('' => '', 'ap' => 'Aprobado', 'aa' => 'Aprobado con Ajustes', 'na' => 'No Aprobado'), null, [ 'id' => 'select1', 'class' => 'form-control']) !!}
        </div>
        <div class="col-xs-4">
          {!!Form::label('n° de acta')!!}<br>
          {!!Form::text('numero_acta', null, ['class'=>'form-control', 'placeholder'=>''])!!}
        </div>
      </div>
      </div>
    </div><!--fin entrega al comité-->

    <!--inicio entrega informe 1-->
    <div class="box box-danger">
    <div class="box-header with-border">
            <h3 class="box-title">Entrega Informe N° 1</h3>
    </div>
      <div class="box-body text-center">
      <div class="row">
        <div class="col-xs-6">
          {!!Form::label('fecha de entrega')!!}<br>
          <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
          </div>
          {!!Form::text('fecha_entrega_1', null, ['class'=>'picker form-control', 'readonly'])!!}
          </div>
        </div>
        <div class="col-xs-6">
          {!!Form::label('N° de Acta')!!}<br>
          {!!Form::text('numero_acta_2', null, ['class'=>'form-control', 'placeholder'=>''])!!}
        </div>
      </div>
      </div>
    </div><!--fin entrega informe 1-->
    </br>

    <!--inicio entrega informe final-->
    <div class="box box-danger">
    <div class="box-header with-border">
            <h3 class="box-title">Entrega Informe Final</h3>
    </div>
      <div class="box-body text-center">
      <div class="row">
        <div class="col-xs-4">
          {!!Form::label('fecha de entrega')!!}<br>
          <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
          </div>
          {!!Form::text('fecha_entrega_2', null, ['class'=>'picker form-control', 'readonly'])!!}
          </div>
        </div>
        <div class="col-xs-4">
          {!!Form::label('Concepto')!!}<br>
          {!! Form::select('concepto_2', array('' => '', 'ap' => 'Aprobado', 'aa' => 'Aprobado con Ajustes', 'na' => 'No Aprobado'), null, [ 'id' => 'select1', 'class' => 'form-control']) !!}
        </div>
        <div class="col-xs-4">
          {!!Form::label('n° de acta')!!}<br>
          {!!Form::text('numero_acta_3', null, ['class'=>'form-control', 'placeholder'=>''])!!}
        </div>
      </div>
      </div>
    </div><!--fin entrega informe final-->
    </br>

    <!--inicio cartas de cumplimuento-->
    <div class="box box-danger">
    <div class="box-header with-border">
            <h3 class="box-title">Cartas de Cumplimiento / Finalizado</h3>
    </div>
      <div class="box-body">
      <div class="row text-center">
        <div class="col-xs-3">
          {!!Form::label('Director')!!}<br>
          {!!Form::label('Si')!!}
          {!!Form::radio('carta_director', 's', null, ['class' => 'iradio_minimal-red'])!!} &nbsp
          {!!Form::label('No')!!}
          {!!Form::radio('carta_director', 'n', null, ['class' => 'iradio_minimal-red'])!!}
        </div>
        <div class="col-xs-3">
          {!!Form::label('Coordinador externo')!!}<br>
          {!!Form::label('Si')!!}
          {!!Form::radio('carta_coordinador', 's', null, ['class' => 'iradio_minimal-red'])!!} &nbsp
          {!!Form::label('No')!!}
          {!!Form::radio('carta_coordinador', 'n', null, ['class' => 'iradio_minimal-red'])!!}
        </div>
        <div class="col-xs-3">
          {!!Form::label('Finalizado')!!}
          {!!Form::select('finalizado', ['' => '', 's' => 'Si', 'n' => 'No'], null, ['class' => 'form-control'])!!}  
        </div>
      </div>
    </div><!--fin cartas de cumplimuento-->
</div>
<br>
    
