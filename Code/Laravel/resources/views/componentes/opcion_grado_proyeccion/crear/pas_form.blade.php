<div class="form-group">
    {!! Form::hidden('tipo_opcion_grado', 'pas', ['id' => 'id_opcion_grado']) !!}

    {!!Form::label('Título')!!}
    {!!Form::text('descripcion', null, ['class'=>'form-control', 'placeholder'=>'Digite Titulo'])!!}
      </br>

    {!!Form::label('Director de la Pasantía')!!}
    {!!Form::select('id_director', $nombre_profesor->toArray(), null, ['id' => 'select_profesor1', 'class' => 'select form-control', 'placeholder' => ' ']) !!}
      </br></br>

    {!!Form::label('Coordinador de la Entidad')!!}
    {!!Form::select('id_externo', $nombre_persona->toArray(), null, ['id' => 'select_profesor2', 'class' => 'select form-control', 'placeholder' => ' ']) !!}
      </br></br>

    {!!Form::label('Entidad')!!}
    {!!Form::select('id_entidad', $nombre_entidad->toArray(), null, ['id' => 'select_entidad', 'class' => 'select form-control', 'placeholder' => ' ']) !!}
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
      <div class="box-body text-center">
      <div class="row">
        <div class="col-xs-3">
          {!!Form::label('Director')!!}<br>
          {!!Form::label('Si')!!}
          {!!Form::radio('carta_director', 'Si', Null)!!} &nbsp
          {!!Form::label('No')!!}
          {!!Form::radio('carta_director', 'No', Null)!!}
        </div>
        <div class="col-xs-3">
          {!!Form::label('Coordinador externo')!!}<br>
          {!!Form::label('Si')!!}
          {!!Form::radio('carta_coordinador', 'Si', Null)!!} &nbsp
          {!!Form::label('No')!!}
          {!!Form::radio('carta_coordinador', 'No', Null)!!}
        </div>
        <div class="col-xs-3">
          {!!Form::label('Finalizado')!!}
            </br>
          {!!Form::label('Si')!!}
          {!!Form::radio('finalizado', 'Si', false)!!} &nbsp
          {!!Form::label('No')!!}
          {!!Form::radio('finalizado', 'No', false)!!}
        </div>
      </div>
    </div><!--fin cartas de cumplimuento-->
</div>
<br>
    
