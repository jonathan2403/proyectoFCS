<div class="form-group">

    {!!Form::hidden('tipo_opcion_grado', 'mi', ['id' => 'id_opcion_grado'])!!}
    {!!Form::label('Título')!!}
    {!!Form::text('descripcion', null, ['class'=>'form-control', 'placeholder'=>'Digite Titulo','required'])!!}
      </br>

    {!!Form::label('Director del Proyecto')!!}
    {!!Form::select('id_director',$nombre_profesor->toArray(), null, ['class' => 'select form-control', 'placeholder' => ' ']) !!}
      </br></br>

    {!!Form::label('Jurado del Proyecto')!!}
    {!!Form::select('id_supervisor',$nombre_profesor->toArray(), null, ['class' => 'select form-control', 'placeholder' => ' ']) !!}
      </br></br>

    {!!Form::label('Entidad')!!}
    {!!Form::select('id_entidad', $nombre_entidad->toArray(), null, ['id' => 'select_entidad', 'class' => 'select form-control', 'placeholder' => ' ']) !!}
    </br> </br>

    {!!Form::label('Fecha de Entrega al Centro de Investigacion')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_ci', null, ['id' => 'datepicker3', 'class'=>'form-control picker', 'readonly'])!!}
     </div>
     </br>

    {!!Form::label('Fecha de Entrega al Comite de Revision')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_cr', null, ['id' => 'datepicker3', 'class'=>'form-control picker', 'readonly'])!!}
     </div>
    </br>

    {!!Form::label('Fecha de Entrega al Jurado')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_jurado', null, ['id' => 'datepicker3', 'class'=>'form-control picker', 'readonly'])!!}
     </div>
    </br>

    {!!Form::label('Fecha Maxima del Jurado')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_max_jurado', null, ['id' => 'datepicker3', 'class'=>'form-control picker', 'readonly'])!!}
      </div>
      </br>



    {!!Form::label('Fecha Real de entrega del Jurado')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_real_jurado', null, ['id' => 'datepicker3', 'class'=>'form-control picker', 'readonly'])!!}
      </div>
      </br>
    {!! Form::select('concepto_1', array('' => '', 'ap' => 'Aprobado', 'aa' => 'Aprobado con Ajustes', 'na' => 'No Aprobado'), null, [ 'id' => 'select1', 'class' => 'form-control']) !!}
        </br>

    {!!Form::label('Fecha entrega 1')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_1', null, ['id' => 'datepicker3', 'class'=>'form-control picker', 'readonly'])!!}
      </div>
      </br>
    {!! Form::select('concepto_2', array('' => '', 'ap' => 'Aprobado', 'aa' => 'Aprobado con Ajustes', 'na' => 'No Aprobado'), null, [ 'id' => 'select1', 'class' => 'form-control']) !!}
        </br>

    {!!Form::label('Fecha entrega 2')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_2', null, ['id' => 'datepicker3', 'class'=>'form-control picker', 'readonly'])!!}
      </div>
      </br>
    {!! Form::select('concepto_3', array('' => '', 'ap' => 'Aprobado', 'aa' => 'Aprobado con Ajustes', 'na' => 'No Aprobado'), null, [ 'id' => 'select1', 'class' => 'form-control']) !!}


    {!!Form::label('Fecha de Aprobacion')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_aprobacion', null, ['id' => 'datepicker', 'class'=>'form-control picker', 'readonly'])!!}
    </div>
       </br>
    {!!Form::label('Numero de Acta')!!}
    {!!Form::text('numero_acta', null, ['class'=>'form-control', 'placeholder'=>'Digite Numero de Acta'])!!}
          </br>

    {!!Form::label('Fecha Maxima de Entrega')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_max_proyecto', null, ['id' => 'datepicker', 'class'=>'form-control picker', 'readonly'])!!}
    </div>

  <hr><font size="4px"><b><center>SECCIÓN INFORME</center></b></font><hr>

    {!!Form::label('Fecha Entrega del Informe Final')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_informe_final', null, ['id' => 'datepicker', 'class'=>'form-control picker', 'readonly'])!!}
    </div></br>

    {!!Form::label('Numero de Acta')!!}
    {!!Form::text('numero_acta_2', null, ['class'=>'form-control', 'placeholder'=>'Digite Numero de Acta','required'])!!}
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


    {!!Form::label('Fecha Entrega de empaste')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_empaste', null, ['id' => 'datepicker', 'class'=>'form-control picker', 'readonly'])!!}
    </div></br>

    {!!Form::label('Fecha Entrega de Certificado')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_certificado', null, ['id' => 'datepicker', 'class'=>'form-control picker', 'readonly'])!!}
  </div></br>

    {!!Form::label('Escala de Evaluación')!!}
    </br>

    {!! Form::select('evaluacion', array('' => '', 'ap' => 'Aprobado', 'aa' => 'Aprobado con Ajustes', 'na' => 'No Aprobado', 'me' => 'Meritorio', 'la' => 'Laureado',), null, [ 'id' => 'select1', 'class' => 'form-control']) !!}
    </br>

    {!!Form::label('Finalizado')!!}
      </br>
    {!!Form::label('Si')!!}
    {!!Form::radio('finalizado', 'Si', false)!!}
    {!!Form::label('No')!!}
    {!!Form::radio('finalizado', 'No', false)!!}

</div>
    </br>
