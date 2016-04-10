<div class="form-group">
    {!! Form::hidden('tipo_opcion_grado', 'epps', ['id' => 'id_opcion_grado']) !!}

    {!!Form::label('Titulo')!!}
    {!!Form::text('descripcion', null, ['class'=>'form-control', 'placeholder'=>'Digite Titulo','required'])!!}
      </br>

    {!!Form::label('Director Proyecto')!!}
    {!!Form::select('id_director',$nombre_profesor->toArray(), null, ['id' => 'select_profesor1', 'class' => 'form-control select', 'placeholder' => ' ']) !!}
      </br></br>

    {!!Form::label('Coordinador Externo')!!}
    {!!Form::select('id_externo',$nombre_persona->toArray(), null, ['id' => 'select_profesor1', 'class' => 'form-control select', 'placeholder' => ' ']) !!}
        </br></br>

    {!!Form::label('Entrega al Centro de Proyeccion Social')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_ci', null, ['id' => 'datepicker', 'class'=>'picker form-control', 'readonly'])!!}
     </div>
     </br>

    {!!Form::label('Entrega al Comité de Revisión y Aval')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_aprobacion', null, ['id' => 'datepicker3', 'class'=>'picker form-control', 'readonly'])!!}
     </div>
   </br>
    {!! Form::select('concepto_1', array('' => '', 'ap' => 'Aprobado', 'aa' => 'Aprobado con Ajustes', 'na' => 'No Aprobado'), null, [ 'id' => 'select1', 'class' => 'form-control']) !!}
    </br>

    {!!Form::label('Numero de Acta')!!}
    {!!Form::text('numero_acta', null, ['class'=>'form-control', 'placeholder'=>'Digite Numero de Acta'])!!}
       </br>

    {!!Form::label('Fecha Máxima de Entrega')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_max_proyecto', null, ['id' => 'datepicker', 'class'=>'picker form-control', 'readonly'])!!}
    </div>

    <hr><font size="4px"><b><center>SECCIÓN INFORME</center></b></font><hr>

    {!!Form::label('Entrega al Centro de Proyección Social')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_informe_final', null, ['id' => 'datepicker', 'class'=>'picker form-control', 'readonly'])!!}
    </div></br>

    {!!Form::label('Numero de Acta')!!}
    {!!Form::text('numero_acta_2', null, ['class'=>'form-control', 'placeholder'=>'Digite Numero de Acta'])!!}
       </br>

    {!! Form::select('concepto_2', array('' => '', 'ap' => 'Aprobado', 'aa' => 'Aprobado con Ajustes', 'na' => 'No Aprobado'), null, [ 'id' => 'select1', 'class' => 'form-control']) !!}
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
  </br></br>

    {!!Form::label('Finalizado')!!}
      </br>
    {!!Form::label('Si')!!}
    {!!Form::radio('finalizado', 'Si', false)!!} &nbsp
    {!!Form::label('No')!!}
    {!!Form::radio('finalizado', 'No', false)!!}

</div>
    </br>
