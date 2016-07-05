<div class="form-group">
    <h4 class="text-center">
      <strong>SECCIÓN PROYECTO</strong>
    </h4>

    {!!Form::hidden('tipo_opcion_grado', 'epi', ['id' => 'id_opcion_grado'])!!}

    {!!Form::label('título del proyecto')!!}
    {!!Form::text('descripcion', null, ['class'=>'form-control', 'placeholder'=>'Digite Titulo'])!!}
      </br>

    {!! Form::label('Director Del Proyecto') !!}
            {!! Form::text('profesor', isset($opciongrado->director) ? $opciongrado->director->nombre : null,['class' => 'form-control', 'id' => 'nombre_profesor','placeholder'=>'Buscar por nombre o Cédula']) !!}
            <div id="label_oculto_profesor"></div>                     
            {!! Form::hidden('id_director', null, ['id' => 'id_profesor']) !!}
    </br>

    {!! Form::label('director n° 2 del proyecto') !!}
    <div id="div_profesor">
            {!! Form::text('jurado', isset($opciongrado->jurado) ? $opciongrado->jurado->nombre : null,['class' => 'form-control', 'id' => 'nombre_jurado','placeholder'=>'Buscar por nombre o Cédula']) !!}
            <div id="label_oculto_jurado"></div>                     
            {!! Form::hidden('id_jurado', null, ['id' => 'id_jurado']) !!}
    </div>
   </br>

    {!!Form::label('proyecto al que pertenece')!!}
    {!!Form::select('id_proyecto', $nombre_proyecto->toArray(), null, ['class' => 'form-control', 'placeholder' => '']) !!}
        </br>

    {!!Form::label('grupo')!!}
    {!!Form::select('id_grupo', $nombre_grupo->toArray(), null, ['class' => 'form-control', 'placeholder' => '']) !!}
        </br>

    {!!Form::label('línea de investigación')!!}
    {!! Form::select('linea_investigacion', array(''=>'','cu' => 'Cuidado', 'sp' => 'Salud Pública'), null, [ 'id' => 'select1', 'class' => 'form-control']) !!}
      </br>

    {!!Form::label('fecha de entrega al centro de investigación')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_ci', null, ['class'=>'picker form-control', 'readonly'])!!}
     </div>
     </br>

    {!!Form::label('fecha de entrega al comité de revisión')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_cr', null, ['class'=>'picker form-control', 'readonly'])!!}
     </div>
    </br>

    <!--Entrega al jurado-->
    <h4 class="box-title text-center">Entrega del jurado</h4>
    <div class="box">
      <div class="box-body">
        <div class="row">
          <div class="col-xs-4">
                  {!!Form::label('fecha de entrega')!!}
                  <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  {!!Form::text('fecha_entrega_jurado', null, ['class'=>'picker form-control', 'readonly'])!!}
               </div>
          </div>      
          <div class="col-xs-4">
                {!!Form::label('fecha máxima de entrega')!!}
                <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                {!!Form::text('fecha_entrega_max_jurado', null, ['class'=>'picker form-control', 'readonly'])!!}
              </div>
          </div>      
          <div class="col-xs-4">
                {!!Form::label('fecha de entrega real')!!}
                <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                {!!Form::text('fecha_entrega_real_jurado', null, ['class'=>'picker form-control', 'readonly'])!!}
              </div>
          </div>      
        </div>
      </div>
      {!!Form::label('concepto')!!}
      {!! Form::select('concepto_1', array('' => '', 'ap' => 'Aprobado', 'aa' => 'Aprobado con Ajustes', 'na' => 'No Aprobado'), null, [ 'id' => 'select1', 'class' => 'form-control']) !!}
    </div><!--Fin entrega al jurado-->

    <!--Entrega N° 1-->
    <h4 class="box-title text-center">Entrega N° 1</h4>
    <div class="box">
      <div class="box-body">
        <div class="row">
          <div class="col-xs-6">
                {!!Form::label('fecha de entrega')!!}
                <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                {!!Form::text('fecha_entrega_1', null, ['class'=>'picker form-control', 'readonly'])!!}
              </div>
          </div>
          <div class="col-xs-6">
                {!!Form::label('concepto')!!}
                {!! Form::select('concepto_2', array('ap' => 'Aprobado', 'aa' => 'Aprobado con Ajustes', 'na' => 'No Aprobado'), null, [ 'placeholder' => '', 'class' => 'form-control']) !!}
          </div>
        </div>
      </div>
    </div><!--Final entrega N° 1-->

    <!--Entrega N° 2-->
    <h4 class="box-title text-center">Entrega N° 2</h4>
    <div class="box">
      <div class="box-body">
        <div class="row">
          <div class="col-xs-4">
                {!!Form::label('fecha de entrega')!!}
                <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                {!!Form::text('fecha_entrega_2', null, ['class'=>'picker form-control', 'readonly'])!!}
              </div>
          </div>
          <div class="col-xs-4">
                {!!Form::label('concepto')!!}
                {!! Form::select('concepto_3', array('ap' => 'Aprobado', 'aa' => 'Aprobado con Ajustes', 'na' => 'No Aprobado'), null, [ 'placeholder' => '', 'class' => 'form-control']) !!}
          </div>
          <div class="col-xs-4">
                {!!Form::label('número de acta')!!}
                {!!Form::text('numero_acta', null, ['class'=>'form-control', 'placeholder'=>'Digite Numero de Acta'])!!}
          </div>
        </div>
      </div>
    </div><!--Final entrega N° 2-->

    {!!Form::label('Fecha de Aprobación y Ejecución')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_aprobacion', null, ['class'=>'picker form-control', 'readonly'])!!}
    </div>
       </br>

    {!!Form::label('Fecha Máxima de Entrega')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_max_proyecto', null, ['class'=>'picker form-control', 'readonly'])!!}
    </div>

    <h4 class="text-center">
      <strong>SECCIÓN INFORME</strong>
    </h4>

     <!--Entrega Informe Final-->
    <h4 class="box-title text-center">Entrega N°1</h4>
    <div class="box">
      <div class="box-body">
        <div class="row">
          <div class="col-xs-4">
                {!!Form::label('fecha de entrega')!!}
                <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                {!!Form::text('fecha_entrega_informe_final', null, ['class'=>'picker form-control', 'readonly'])!!}
              </div>
          </div>
          <div class="col-xs-4">
                {!!Form::label('número de acta')!!}
                {!!Form::text('numero_acta_2', null, ['class'=>'form-control', 'placeholder'=>'Digite Numero de Acta'])!!}
          </div>
          <div class="col-xs-4">
                {!!Form::label('concepto')!!}
                {!! Form::select('concepto_4', array('ap' => 'Aprobado', 'aa' => 'Aprobado con Ajustes', 'na' => 'No Aprobado'), null, [ 'placeholder' => '', 'class' => 'form-control']) !!}
          </div>
        </div>
      </div>
    </div><!--Final entrega Informe Final-->

    <!--Entrega N° 2-->
    <h4 class="box-title text-center">Entrega N° 2</h4>
    <div class="box">
      <div class="box-body">
        <div class="row">
          <div class="col-xs-6">
                {!!Form::label('fecha de entrega')!!}
                <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    {!!Form::text('fecha_entrega_informe_2', null, ['class'=>'picker form-control', 'readonly'])!!}
                </div>
          </div>
          <div class="col-xs-6">
                {!!Form::label('concepto')!!}
                {!! Form::select('concepto_5', array('ap' => 'Aprobado', 'aa' => 'Aprobado con Ajustes', 'na' => 'No Aprobado'), null, [ 'placeholder' => '', 'class' => 'form-control']) !!}
          </div>
        </div>
      </div>
    </div><!--Final entrega N° 2-->

    <!--Entrega N° 3-->
    <h4 class="box-title text-center">Entrega N° 3</h4>
    <div class="box">
      <div class="box-body">
        <div class="row">
          <div class="col-xs-6">
                {!!Form::label('fecha de entrega')!!}
                <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    {!!Form::text('fecha_entrega_informe_3', null, ['class'=>'picker form-control', 'readonly'])!!}
                </div>
          </div>
          <div class="col-xs-6">
                {!!Form::label('concepto')!!}
                {!! Form::select('concepto_6', array('ap' => 'Aprobado', 'aa' => 'Aprobado con Ajustes', 'na' => 'No Aprobado'), null, [ 'placeholder' => '', 'class' => 'form-control']) !!}
          </div>
        </div>
      </div>
    </div><!--Final entrega N° 3-->

    {!!Form::label('Fecha Entrega de Empaste')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_empaste', null, ['class'=>'picker form-control', 'readonly'])!!}
    </div></br>

    {!!Form::label('Fecha Entrega de Certificado')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_certificado', null, ['class'=>'picker form-control', 'readonly'])!!}
    </div>
    </br>
    {!!Form::label('Escala de Evaluación')!!}
    </br>

    {!! Form::select('evaluacion', array('' => '', 'ap' => 'Aprobado', 'aa' => 'Aprobado con Ajustes', 'na' => 'No Aprobado', 'me' => 'Meritorio', 'la' => 'Laureado',), null, [ 'id' => 'select1', 'class' => 'form-control']) !!}
    </br>
      
    {!!Form::label('Finalizado')!!}
      </br>
    <div class="row text-center">
      <div class="col-xs-2">
        {!!Form::label('Si')!!}
        {!!Form::radio('finalizado', 's', false, ['class' => 'iradio_minimal-red'])!!}
      </div>
      <div class="col-xs-1">
        {!!Form::label('No')!!}
        {!!Form::radio('finalizado', 'n', false, ['class' => 'iradio_minimal-red'])!!}
      </div>
    </div>

</div>
    </br>
