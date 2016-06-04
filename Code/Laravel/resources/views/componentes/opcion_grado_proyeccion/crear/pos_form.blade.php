<div class="form-group">
    {!! Form::hidden('tipo_opcion_grado', 'pos', ['id' => 'id_opcion_grado']) !!}

    {!!Form::label('Nombre del Posgrado')!!}
    {!!Form::text('descripcion', null, ['class'=>'form-control', 'placeholder'=>''])!!}
      </br>

    {!!Form::label('Director Proyecto')!!}
    {!!Form::select('id_director',$nombre_profesor->toArray(), null, ['id' => 'select_profesor1', 'class' => 'form-control select', 'placeholder' => ' ']) !!}
        </br></br>

    {!!Form::label('Entrega al Comité, Revisión y Aval - Posgrado')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_aprobacion', null, ['id' => 'datepicker', 'class'=>'picker form-control', 'readonly'])!!}
    </div>
  </br>
    {!! Form::select('concepto_1', array('' => '', 'ap' => 'Aprobado', 'aa' => 'Aprobado con Ajustes', 'na' => 'No Aprobado'), null, [ 'id' => 'select1', 'class' => 'form-control']) !!}
    </br>

    {!!Form::label('N° de Acta')!!}
    {!!Form::text('numero_acta', null, ['class'=>'form-control', 'placeholder'=>''])!!}
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
