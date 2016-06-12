<div class="form-group">
    <h4 class="text-center">
      <strong>SECCIÓN PROYECTO</strong>
    </h4>

    {!!Form::hidden('tipo_opcion_grado', 'mr', ['id' => 'id_opcion_grado'])!!}
    {!!Form::label('Título')!!}
    {!!Form::text('descripcion', null, ['class'=>'form-control', 'placeholder'=>'Digite Titulo'])!!}
      </br>

   {!! Form::label('Director del Proyecto') !!}

            {!! Form::text('profesor', null,['class' => 'form-control', 'id' => 'nombre_profesor','placeholder'=>'Buscar por nombre o Cédula']) !!}
            <div id="label_oculto_profesor"></div>                     
            {!! Form::hidden('id_director', null, ['id' => 'id_profesor']) !!}
    
   </br>

    {!! Form::label('Jurado Del Proyecto') !!}
   
            {!! Form::text('profesor', null,['class' => 'form-control', 'id' => 'nombre_profesor','placeholder'=>'Buscar por nombre o Cédula']) !!}
            <div id="label_oculto_profesor"></div>                     
            {!! Form::hidden('id_supervisor', null, ['id' => 'id_supervisor']) !!}
    
   </br>

    {!! Form::label('entidad') !!}   
    {!! Form::text('entidad', isset($nombre_estudiante) ? $nombre_estudiante:null,['class' => 'form-control', 'id' => 'nombre_entidad','placeholder'=>'Nombre de la Entidad']) !!}
   <div id="label_oculto"></div>                     
   {!! Form::hidden('id_entidad', null, ['id' => 'id_entidad']) !!}
    </br></br>

    {!!Form::label('Fecha de Entrega al Centro de Investigación')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_ci', null, ['class'=>'picker form-control', 'readonly'])!!}
     </div>
     </br>

    {!!Form::label('Fecha de Entrega al Comite de Revisión')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_cr', null, ['class'=>'picker form-control', 'readonly'])!!}
     </div>
    </br>

    <h4 class="box-title text-center">Entrega al Jurado</h2>
    <div class="box">
          <div class="box-body">
            <div class="row">
              <div class="col-xs-4">
                    {!!Form::label('Fecha de entrega')!!}
                    <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                   {!!Form::text('fecha_entrega_jurado', null, ['class'=>'picker form-control', 'readonly'])!!}
                  </div>
              </div>
              <div class="col-xs-4">
                  {!!Form::label('Fecha máxima de entrega')!!}
                  <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                    {!!Form::text('fecha_entrega_max_jurado', null, ['class'=>'picker form-control', 'readonly'])!!}
                </div>
              </div>
              <div class="col-xs-4">
                  {!!Form::label('Fecha de Entrega Real')!!}
                  <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      {!!Form::text('fecha_entrega_real_jurado', null, ['class'=>'picker form-control', 'readonly'])!!}   
                  </div>
              </div>
            </div><br>
            {!! Form::label('Concepto del Jurado') !!}
            {!! Form::select('concepto_1', array('' => '', 'ap' => 'Aprobado', 'aa' => 'Aprobado con Ajustes', 'na' => 'No Aprobado'), null, [ 'id' => 'select1', 'class' => 'form-control']) !!}
          </div>
        </div><!-- Final Box Entrega al jurado -->

      <!-- Box Entrega 1 -->
      <h4 class="box-title text-center">Entrega N° 1</h4>
      <div class="box">
          <div class="box-body">
            <div class="row">
              <div class="col-sm-6">
                  {!!Form::label('Fecha de entrega')!!}
                  <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                    {!!Form::text('fecha_entrega_1', null, ['class'=>'picker form-control', 'readonly'])!!}
                </div>
              </div>
              <div class="col-sm-6">
                    {!!Form::label('Concepto')!!}
                    {!! Form::select('concepto_2', array('ap' => 'Aprobado', 'aa' => 'Aprobado con Ajustes', 'na' => 'No Aprobado'), null, ['class' => 'form-control', 'placeholder' => '']) !!}
              </div>
            </div>
          </div><!-- Cierra Box Body -->
      </div><!-- Cierra Box Entrega 1 -->

      <!-- Box Entrega 2 -->
      <h4 class="box-title text-center">Entrega N° 2</h4>
      <div class="box">
          <div class="box-body">
            <div class="row">
              <div class="col-xs-6">
              {!!Form::label('Fecha de entrega')!!}
                  <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                    {!!Form::text('fecha_entrega_2', null, ['class'=>'picker picker2 form-control', 'readonly'])!!}
                </div>
              </div>
              <div class="col-xs-6">
              {!!Form::label('Concepto')!!}
                    {!! Form::select('concepto_3', array('ap' => 'Aprobado', 'aa' => 'Aprobado con Ajustes', 'na' => 'No Aprobado'), null, ['class' => 'form-control', 'placeholder' => '']) !!}
              </div>
            </div>
          </div><!-- Cierra Box Body -->
      </div><!-- Cierra Box Entrega 2 -->

      <h4 class="text-center">
        <strong>SECCIÓN INFORME</strong>
      </h4><hr>

      <!-- Primer entrega Informe Final  -->
    <h4 class="box-title text-center">Primera Entrega</h4>
    <div class="box">
          <div class="box-body">
            <div class="row">
              <div class="col-xs-4">
              {!!Form::label('Fecha de entrega')!!}
                    <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                   {!!Form::text('fecha_entrega_informe_final', null, ['class'=>'picker form-control', 'readonly', 'placeholder' => 'Fecha de entrega'])!!}
                  </div>
              </div>
              <div class="col-xs-4">
              {!!Form::label('N° de acta')!!}
              {!!Form::text('numero_acta_2', null, ['class'=>'form-control', 'placeholder'=>'Digite Numero de Acta'])!!}
              </div>
              <div class="col-xs-4">
              {!!Form::label('Concepto')!!}
              {!! Form::select('concepto_4', array('ap' => 'Aprobado', 'aa' => 'Aprobado con Ajustes', 'na' => 'No Aprobado'), null, ['class' => 'form-control', 'placeholder' => '']) !!}
              </div>
            </div>
        </div>
        </div><!-- Final Box Primer entrega Informe -->

        <!-- Segunda entrega Informe Final  -->
        <h4 class="box-title text-center">Segunda Entrega</h4>
    <div class="box">
          <div class="box-body">
            <div class="row">
              <div class="col-xs-6">
              {!!Form::label('Fecha de entrega')!!}
                    <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                   {!!Form::text('fecha_entrega_informe_2', null, ['class'=>'picker form-control', 'readonly', 'placeholder' => 'Fecha de Entrega'])!!}
                  </div>
              </div>
              <div class="col-xs-6">
              {!!Form::label('Concepto')!!}
                   {!! Form::select('concepto_5', array('ap' => 'Aprobado', 'aa' => 'Aprobado con Ajustes', 'na' => 'No Aprobado'), null, ['placeholder' => '', 'class' => 'form-control']) !!}
              </div>
            </div>
        </div>
        </div><!-- Final Box Segunda entrega Informe -->

        <!-- Tercera entrega Informe Final  -->
    <h4 class="box-title text-center">Tercera Entrega</h4>
    <div class="box">
          <div class="box-body">
            <div class="row">
              <div class="col-xs-6">
                  {!!Form::label('Fecha de entrega')!!}
                    <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                   {!!Form::text('fecha_entrega_informe_3', null, ['class'=>'picker form-control', 'readonly'])!!}
                  </div>
              </div>
              <div class="col-xs-6">
              {!!Form::label('Concepto')!!}
                   {!! Form::select('concepto_6', array( 'ap' => 'Aprobado', 'aa' => 'Aprobado con Ajustes', 'na' => 'No Aprobado'), null, [ 'placeholder' => '', 'class' => 'form-control']) !!}
              </div>
            </div>
        </div>
        </div><!-- Final Box Tercera entrega Informe -->

    {!!Form::label('Fecha Entrega de empaste')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_empaste', null, [ 'class'=>'picker form-control', 'readonly'])!!}
    </div></br>

    {!!Form::label('Fecha Entrega de Certificado')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_certificado', null, ['class'=>'picker form-control', 'readonly'])!!}
    </div>  </br>

    {!!Form::label('Escala de Evaluación')!!}
    </br>

    {!! Form::select('evaluacion', array('' => '', 'ap' => 'Aprobado', 'aa' => 'Aprobado con Ajustes', 'na' => 'No Aprobado', 'me' => 'Meritorio', 'la' => 'Laureado'), null, [ 'id' => 'select1', 'class' => 'form-control']) !!}
    </br>
    
    {!!Form::label('Finalizado')!!}
      </br>
    {!!Form::label('Si')!!}
    {!!Form::radio('finalizado', 's', false)!!}
    {!!Form::label('No')!!}
    {!!Form::radio('finalizado', 'n', false)!!}

</div>
    </br>
