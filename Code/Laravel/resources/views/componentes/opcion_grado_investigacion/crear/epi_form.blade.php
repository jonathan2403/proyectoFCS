<div class="form-group">
    <font size="4px"><b><center>SECCIÓN PROYECTO</center></b></font><hr>

    {!!Form::hidden('tipo_opcion_grado', 'epi', ['id' => 'id_opcion_grado'])!!}

    {!!Form::label('Título del Proyecto')!!}
    {!!Form::text('descripcion', null, ['class'=>'form-control', 'placeholder'=>'Digite Titulo','required'])!!}
      </br>

    {!!Form::label('Director del Proyecto')!!}
    {!!Form::select('id_director',$nombre_profesor->toArray(), null, ['class' => 'select form-control', 'placeholder' => '']) !!}
      </br></br>


    {!!Form::label('Director 2 del Proyecto')!!}
    {!!Form::select('id_supervisor',$nombre_profesor->toArray(), null, ['class' => 'select form-control', 'placeholder' => '']) !!}
      </br></br>

    {!!Form::label('Proyecto al que Pertenece')!!}
    {!!Form::select('id_proyecto', $nombre_proyecto->toArray(), null, ['class' => 'select form-control', 'placeholder' => '']) !!}
        </br></br>

    {!!Form::label('Grupo')!!}
    {!!Form::select('id_grupo', $nombre_grupo->toArray(), null, ['class' => 'select form-control', 'placeholder' => '']) !!}
            </br></br>

    {!!Form::label('Línea de Investigación')!!}
    {!! Form::select('linea_investigacion', array(''=>'','cu' => 'Cuidado', 'sp' => 'Salud Pública'), null, [ 'id' => 'select1', 'class' => 'form-control']) !!}
      </br>

    {!!Form::label('Fecha de Entrega al Centro de Investigación')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_ci', null, ['id' => 'datepicker3', 'class'=>'picker form-control', 'readonly'])!!}
     </div>
     </br>

    {!!Form::label('Fecha de Entrega al Comité de Revisión')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_cr', null, ['id' => 'datepicker3', 'class'=>'picker form-control', 'readonly'])!!}
     </div>
    </br>

    {!!Form::label('Fecha de Entrega al Jurado')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_jurado', null, ['id' => 'datepicker3', 'class'=>'picker form-control', 'readonly'])!!}
     </div>
    </br>

    {!!Form::label('Fecha Máxima del Jurado')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_max_jurado', null, ['id' => 'datepicker3', 'class'=>'picker form-control', 'readonly'])!!}
      </div>
      </br>

    {!!Form::label('Fecha Real entrega del Jurado')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_real_jurado', null, ['id' => 'datepicker3', 'class'=>'picker form-control', 'readonly'])!!}
      </div>
      </br>
    {!! Form::select('concepto_1', array('' => '', 'ap' => 'Aprobado', 'aa' => 'Aprobado con Ajustes', 'na' => 'No Aprobado'), null, [ 'id' => 'select1', 'class' => 'form-control']) !!}
        </br>

    {!!Form::label('Fecha entrega 1')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_1', null, ['id' => 'datepicker3', 'class'=>'picker form-control', 'readonly'])!!}
      </div>
      </br>
    {!! Form::select('concepto_2', array('' => '', 'ap' => 'Aprobado', 'aa' => 'Aprobado con Ajustes', 'na' => 'No Aprobado'), null, [ 'id' => 'select1', 'class' => 'form-control']) !!}
        </br>

    {!!Form::label('Fecha entrega 2')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_2', null, ['id' => 'datepicker3', 'class'=>'picker form-control', 'readonly'])!!}
      </div>
      </br>
    {!! Form::select('concepto_3', array('' => '', 'ap' => 'Aprobado', 'aa' => 'Aprobado con Ajustes', 'na' => 'No Aprobado'), null, [ 'id' => 'select1', 'class' => 'form-control']) !!}


    {!!Form::label('Número de Acta')!!}
    {!!Form::text('numero_acta', null, ['class'=>'form-control', 'placeholder'=>'Digite Numero de Acta'])!!}
       </br>
    {!!Form::label('Fecha de Aprobación y Ejecución')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_aprobacion', null, ['id' => 'datepicker', 'class'=>'picker form-control', 'readonly'])!!}
    </div>
       </br>

    {!!Form::label('Fecha Máxima de Entrega')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_max_proyecto', null, ['id' => 'datepicker', 'class'=>'picker form-control', 'readonly'])!!}
    </div>

    <hr><font size="4px"><b><center>SECCIÓN INFORME</center></b></font><hr>

    {!!Form::label('Fecha Entrega del Informe Final')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_informe_final', null, ['id' => 'datepicker', 'class'=>'picker form-control', 'readonly'])!!}
    </div></br>

    {!!Form::label('Numero de Acta')!!}
    {!!Form::text('numero_acta_2', null, ['class'=>'form-control', 'placeholder'=>'Digite Numero de Acta'])!!}
       </br>

    {!! Form::select('concepto_4', array('' => '', 'ap' => 'Aprobado', 'aa' => 'Aprobado con Ajustes', 'na' => 'No Aprobado'), null, [ 'id' => 'select1', 'class' => 'form-control']) !!}
        </br>

    {!!Form::label('Fecha Segunda entrega Informe Final')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_informe_2', null, ['id' => 'datepicker3', 'class'=>'picker form-control', 'readonly'])!!}
      </div>
      </br>
    {!! Form::select('concepto_5', array('' => '', 'ap' => 'Aprobado', 'aa' => 'Aprobado con Ajustes', 'na' => 'No Aprobado'), null, [ 'id' => 'select1', 'class' => 'form-control']) !!}
        </br>

    {!!Form::label('Fecha Tercera entrega Informe Final')!!}
       <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
            </div>
    {!!Form::text('fecha_entrega_informe_3', null, ['id' => 'datepicker3', 'class'=>'picker form-control', 'readonly'])!!}
          </div>
          </br>
    {!! Form::select('concepto_6', array('' => '', 'ap' => 'Aprobado', 'aa' => 'Aprobado con Ajustes', 'na' => 'No Aprobado'), null, [ 'id' => 'select1', 'class' => 'form-control']) !!}
            </br>

    {!!Form::label('Fecha Entrega de Empaste')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_empaste', null, ['id' => 'datepicker', 'class'=>'picker form-control', 'readonly'])!!}
    </div></br>

    {!!Form::label('Fecha Entrega de Certificado')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_certificado', null, ['id' => 'datepicker', 'class'=>'picker form-control', 'readonly'])!!}
    </div>
    
    {!!Form::label('Escala de Evaluación')!!}
    </br>

    {!! Form::select('evaluacion', array('' => '', 'ap' => 'Aprobado', 'aa' => 'Aprobado con Ajustes', 'na' => 'No Aprobado', 'me' => 'Meritorio', 'la' => 'Laureado',), null, [ 'id' => 'select1', 'class' => 'form-control']) !!}
    </br>
      </br>
    {!!Form::label('Finalizado')!!}
      </br>
    {!!Form::label('Si')!!}
    {!!Form::radio('finalizado', 'Si', false)!!} &nbsp
    {!!Form::label('No')!!}
    {!!Form::radio('finalizado', 'No', false)!!}

</div>
    </br>
