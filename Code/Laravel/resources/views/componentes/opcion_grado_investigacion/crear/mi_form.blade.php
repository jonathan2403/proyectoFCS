<div class="form-group">

    <h4 class="text-center">
      <strong>SECCIÓN PROYECTO</strong>
    </h4>

    {!!Form::hidden('tipo_opcion_grado', 'mi', ['id' => 'id_opcion_grado'])!!}
    {!!Form::label('título')!!}
    {!!Form::text('descripcion', null, ['class'=>'form-control', 'placeholder'=>'Digite Titulo'])!!}
      </br>

    {!! Form::label('Director del Proyecto') !!}
    <div id="div_profesor">
            {!! Form::text('profesor', null,['class' => 'form-control', 'id' => 'nombre_profesor','placeholder'=>'Buscar por nombre o Cédula']) !!}
            <div id="label_oculto_profesor"></div>                     
            {!! Form::hidden('id_director', null, ['id' => 'id_profesor']) !!}
    </div>
   </br>

    {!! Form::label('Jurado Del Proyecto') !!}
    <div id="div_profesor">
            {!! Form::text('profesor', null,['class' => 'form-control', 'id' => 'nombre_profesor','placeholder'=>'Buscar por nombre o Cédula']) !!}
            <div id="label_oculto_profesor"></div>                     
            {!! Form::hidden('id_supervisor', null, ['id' => 'id_profesor']) !!}
    </div>
   </br>

    {!! Form::label('entidad') !!}   
    {!! Form::text('entidad', isset($nombre_estudiante) ? $nombre_estudiante:null,['class' => 'form-control', 'id' => 'nombre_entidad','placeholder'=>'Nombre de la Entidad']) !!}
   <div id="label_oculto"></div>                     
   {!! Form::hidden('id_entidad', null, ['id' => 'id_entidad']) !!}
    </br>

    {!!Form::label('fecha de entrega al centro de investigación')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_ci', null, ['class'=>'form-control picker', 'readonly'])!!}
     </div>
     </br>

    {!!Form::label('fecha de entrega al comité de revisión')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_cr', null, ['class'=>'form-control picker', 'readonly'])!!}
     </div>
    </br>

    <!-- Entrega al jurado -->
    <h4 class="box-title text-center">Entrega al jurado</h4>
    <div class="box">
      <div class="box-body">
        <div class="row">
          <div class="col-xs-4">
          {!!Form::label('fecha de entrega')!!}
            <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  {!!Form::text('fecha_entrega_jurado', null, ['class'=>'form-control picker', 'readonly'])!!}
            </div>
          </div>
            <div class="col-xs-4">
            {!!Form::label('fecha máxima de entrega')!!}
              <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  {!!Form::text('fecha_entrega_max_jurado', null, ['class'=>'form-control picker', 'readonly'])!!}
                </div>
            </div>
            <div class="col-xs-4">
            {!!Form::label('fecha real de entrega')!!}
              <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                {!!Form::text('fecha_entrega_real_jurado', null, ['class'=>'form-control picker', 'readonly'])!!}
                </div>
            </div>
        </div>
        <br>
        {!! Form::select('concepto_1', array('ap' => 'Aprobado', 'aa' => 'Aprobado con Ajustes', 'na' => 'No Aprobado'), null, [ 'id' => 'select1', 'class' => 'form-control', 'placeholder' => 'Concepto']) !!}
      </div>
    </div> <!-- Fin Entrega al jurado -->
    

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
                {!!Form::text('fecha_entrega_1', null, ['class'=>'form-control picker', 'readonly'])!!}
              </div>
          </div>
          <div class="col-xs-6">
            {!!Form::label('concepto')!!}
            {!! Form::select('concepto_2', array('' => '', 'ap' => 'Aprobado', 'aa' => 'Aprobado con Ajustes', 'na' => 'No Aprobado'), null, [ 'id' => 'select1', 'class' => 'form-control']) !!}
          </div>
        </div>
      </div>
    </div><!--Fin entrega N° 1-->

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
                  {!!Form::text('fecha_entrega_2', null, ['class'=>'form-control picker', 'readonly'])!!}
                </div>
          </div>
          <div class="col-xs-6">
            {!!Form::label('Concepto')!!}
            {!! Form::select('concepto_3', array('ap' => 'Aprobado', 'aa' => 'Aprobado con Ajustes', 'na' => 'No Aprobado'), null, [ 'id' => 'select1', 'class' => 'form-control', 'placeholder' => '']) !!}
          </div>
        </div>
      </div>
    </div>

    <!--Aprobación-->
    <h4 class="box-title text-center">Aprobación</h4>
    <div class="box">
    <div class="box-body">
      <div class="row">
        <div class="col-xs-6">
        {!!Form::label('fecha')!!}
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
          {!!Form::text('fecha_aprobacion', null, ['class'=>'form-control picker', 'readonly'])!!}
          </div>
        </div>
        <div class="col-xs-6">
          {!!Form::label('número de acta')!!}
          {!!Form::text('numero_acta', null, ['class'=>'form-control', 'placeholder'=>'Digite Numero de Acta'])!!}
        </div>
      </div>
    </div>      
    </div><!--Final Aprobación-->

  <h4 class="text-center">
        <strong>SECCIÓN INFORME</strong>
  </h4><hr>

  <!--Entrega N° 1-->
  <h4 class="box-title text-center">Entrega N° 1</h4>
  <div class="box">
    <div class="box-body">
      <div class="col-xs-4">
      {!!Form::label('fecha de entrega')!!}
            <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
            </div>
        {!!Form::text('fecha_entrega_informe_final', null, ['class'=>'form-control picker', 'readonly'])!!}
        </div>
      </div>
      <div class="col-xs-4">
        {!!Form::label('número de acta')!!}
        {!!Form::text('numero_acta_2', null, ['class'=>'form-control', 'placeholder'=>'Digite Numero de Acta'])!!}
      </div>
      <div class="col-xs-4">
        {!!Form::label('concepto')!!}
        {!! Form::select('concepto_4', array('ap' => 'Aprobado', 'aa' => 'Aprobado con Ajustes', 'na' => 'No Aprobado'), null, ['placeholder' => '', 'class' => 'form-control']) !!}        
      </div>
    </div>
  </div><!--Final Entrega N° 1-->

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
    </div><!--Final Entrega N° 2-->

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
    </div><!--Final Entrega N° 3-->


    {!!Form::label('Fecha Entrega de empaste')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_empaste', null, ['class'=>'form-control picker', 'readonly'])!!}
    </div></br>

    {!!Form::label('Fecha Entrega de Certificado')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_certificado', null, ['class'=>'form-control picker', 'readonly'])!!}
  </div></br>

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
