<div class="form-group">
    {!! Form::hidden('tipo_opcion_grado', 'pos', ['id' => 'id_opcion_grado']) !!}

    {!!Form::label('Nombre del Posgrado')!!}
    {!!Form::text('descripcion', null, ['class'=>'form-control', 'placeholder'=>''])!!}
      </br>

    {!!Form::label('Director Proyecto')!!}
    {!!Form::text('profesor', null, ['class'=>'form-control', 'placeholder'=>'Buscar por Nombre o Cédula', 'id' => 'nombre_profesor'])!!}
    <div id="label_oculto_profesor"></div>                     
    {!! Form::hidden('id_profesor', null, ['id' => 'id_profesor']) !!}
    <br>

    <!--inicio entrega al comité de revisión-->
    <div class="box box-danger">
    <div class="box-header with-border">
            <h3 class="box-title">Entrega al comité de revisión y aval</h3>
    </div>
      <div class="box-body text-center">
      <div class="row">
        <div class="col-xs-4">
        {!!Form::label('fecha')!!} 
          <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
            {!!Form::text('fecha_aprobacion', null, ['id' => 'datepicker', 'class'=>'picker form-control', 'readonly'])!!}
            </div>
        </div>
        <div class="col-xs-4">
          {!!Form::label('concepto')!!} 
          {!! Form::select('concepto_1', array('' => '', 'ap' => 'Aprobado', 'aa' => 'Aprobado con Ajustes', 'na' => 'No Aprobado'), null, [ 'id' => 'select1', 'class' => 'form-control']) !!}
        </div>
        <div class="col-xs-4">
          {!!Form::label('N° de Acta')!!}
          {!!Form::text('numero_acta', null, ['class'=>'form-control', 'placeholder'=>''])!!}  
        </div>
      </div>
    </div><!--fin entrega al comité de revisión-->
    
    </br>

    {!!Form::label('Inicio Posgrado')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_1', null, ['id' => 'datepicker2', 'class'=>'picker form-control', 'readonly'])!!}
    </div>
  </br>

    {!!Form::label('Fin de Posgrado')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_2', null, ['id' => 'datepicker3', 'class'=>'picker form-control', 'readonly'])!!}
    </div>
    </br>

    {!!Form::label('Nota Mínima')!!}
    {!!Form::text('numero_acta_2', null, ['class'=>'form-control', 'placeholder'=>''])!!}
       </br>
</div>
    </br>
