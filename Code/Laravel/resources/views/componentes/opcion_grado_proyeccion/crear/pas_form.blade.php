<div class="form-group">
    {!! Form::hidden('tipo_opcion_grado', 'pas', ['id' => 'id_opcion_grado']) !!}

    {!!Form::label('Título')!!}
    {!!Form::text('descripcion', null, ['class'=>'form-control', 'placeholder'=>'Digite Titulo','required'])!!}
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

    {!!Form::label('Entrega al Comité, Revisión y Aval')!!}
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

    {!!Form::label('Entrega Informe 1')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_1', null, ['id' => 'datepicker2', 'class'=>'picker form-control', 'readonly'])!!}
    </div>
  </br>
    {!!Form::label('N° de Acta')!!}
    {!!Form::text('numero_acta_2', null, ['class'=>'form-control', 'placeholder'=>''])!!}
       </br>
    </br>

    {!!Form::label('Entrega Informe Final')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_2', null, ['id' => 'datepicker3', 'class'=>'picker form-control', 'readonly'])!!}
    </div>
    </br>
    {!! Form::select('concepto_2', array('' => '', 'ap' => 'Aprobado', 'aa' => 'Aprobado con Ajustes', 'na' => 'No Aprobado'), null, [ 'id' => 'select1', 'class' => 'form-control']) !!}
    </br>

    {!!Form::label('N° de Acta')!!}
    {!!Form::text('numero_acta_3', null, ['class'=>'form-control', 'placeholder'=>''])!!}
       </br>


    {!!Form::label('Carta Cumplimiento del Director')!!}
             </br>
    {!!Form::label('Si')!!}
    {!!Form::radio('carta_director', 'Si', Null)!!} &nbsp
    {!!Form::label('No')!!}
    {!!Form::radio('carta_director', 'No', Null)!!}
            </br></br>

    {!!Form::label('Carta Cumplimiento del Coordinador Externo')!!}
             </br>
    {!!Form::label('Si')!!}
    {!!Form::radio('carta_coordinador', 'Si', Null)!!} &nbsp
    {!!Form::label('No')!!}
    {!!Form::radio('carta_coordinador', 'No', Null)!!}
            </br> </br>

    {!!Form::label('Finalizado')!!}
      </br>
    {!!Form::label('Si')!!}
    {!!Form::radio('finalizado', 'Si', false)!!} &nbsp
    {!!Form::label('No')!!}
    {!!Form::radio('finalizado', 'No', false)!!}
    </br>
</div>
    </br>
