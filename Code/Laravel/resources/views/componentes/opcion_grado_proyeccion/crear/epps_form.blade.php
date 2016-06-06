<div class="form-group">
    {!! Form::hidden('tipo_opcion_grado', 'epps', ['id' => 'id_opcion_grado']) !!}
    {!!Form::label('Título')!!}
    {!!Form::text('descripcion', null, ['class'=>'form-control', 'placeholder'=>'Digite Título'])!!}
      <br>
    {!!Form::label('Director del Proyecto')!!}
    {!!Form::text('profesor', null, ['class'=>'form-control', 'placeholder'=>'Buscar por Nombre o Cédula', 'id' => 'nombre_profesor'])!!}
    <div id="label_oculto_profesor"></div>                     
    {!! Form::hidden('id_profesor', null, ['id' => 'id_profesor']) !!}
    <br>

    {!!Form::label('Coordinador Externo')!!}
    {!!Form::text('persona_externa', null, ['class'=>'form-control', 'placeholder'=>'Buscar por Nombre', 'id' => 'nombre_persona_externa'])!!}
    <div id="label_persona"></div>                     
    {!! Form::hidden('id_externo', null, ['id' => 'id_externo']) !!}
        </br>

    {!!Form::label('Entrega al Centro de Proyeccion Social')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_ci', null, ['id' => 'datepicker', 'class'=>'picker form-control', 'readonly'])!!}
     </div>
     </br>


     <!--inicia entrega comité de revisión-->
     <div class="box">
     <div class="box-header">
          <h3 class="box-title">Entrega al Comité de revisión y Aval</h3>
      </div>
       <div class="box-body">
         <div class="row text-center">
           <div class="col-xs-4">
             {!!Form::label('fecha')!!}<br>
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
             {!!Form::label('N° de acta')!!}<br>
             {!!Form::text('numero_acta', null, ['class'=>'form-control'])!!}
           </div>
         </div>
       </div>
     </div><!--fin entrega al comité de revisión-->

    {!!Form::label('Fecha Máxima de Entrega')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_entrega_max_proyecto', null, ['class'=>'picker form-control', 'readonly'])!!}
    </div>
    <br>

    <!--Inicia Informe-->
         <div class="box box-solid box-danger direct-chat direct-chat-warning collapsed-box">
         <div class="box-header with-border">
          <h3 class="box-title">Informe</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
          </div>
        </div>
        <div class="box-body" style="display:none;">
          <!--inicia entrega centro de proyeccion-->
     <div class="box">
     <div class="box-header">
          <h3 class="box-title">Entrega al centro de proyección social</h3>
      </div>
       <div class="box-body">
         <div class="row text-center">
           <div class="col-xs-4">
             {!!Form::label('fecha')!!}<br>
                <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                {!!Form::text('fecha_entrega_informe_final', null, ['class'=>'picker form-control', 'readonly'])!!}
                 </div>
           </div>
           <div class="col-xs-4">
             {!!Form::label('concepto')!!}<br>
             {!! Form::select('concepto_2', array('' => '', 'ap' => 'Aprobado', 'aa' => 'Aprobado con Ajustes', 'na' => 'No Aprobado'), null, [ 'id' => 'select1', 'class' => 'form-control']) !!}
           </div>
           <div class="col-xs-4">
             {!!Form::label('N° de acta')!!}<br>
             {!!Form::text('numero_acta_2', null, ['class'=>'form-control', 'placeholder'=>'Digite Numero de Acta'])!!}
           </div>
         </div>
       </div>
     </div><!--fin entrega al centro de proyeccion-->

     <!--inicia empaste y certificado-->
     <div class="box">
     <div class="box-header">
          <h3 class="box-title">Empaste y certificado</h3>
      </div>
       <div class="box-body">
         <div class="row text-center">
           <div class="col-xs-6">
             {!!Form::label('fecha entrega de empaste')!!}<br>
                <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                {!!Form::text('fecha_entrega_empaste', null, ['class'=>'picker form-control', 'readonly'])!!}
                 </div>
           </div>
           <div class="col-xs-6">
           {!!Form::label('fecha entrega de certificado')!!}<br>
             <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
              {!!Form::text('fecha_entrega_certificado', null, ['class'=>'picker form-control', 'readonly'])!!}
              </div>
           </div>
         </div>
       </div>
     </div><!--fin empaste y certificado-->

     <!--inicia cartas de cumplimiento-->
     <div class="box">
     <div class="box-header">
          <h3 class="box-title">Cartas de cumplimiento</h3>
      </div>
       <div class="box-body">
         <div class="row text-center">
           <div class="col-xs-6">
             {!!Form::label('Director')!!}
             </br>
              {!!Form::label('Si')!!}
              {!!Form::radio('carta_director', 'Si', Null)!!} &nbsp
              {!!Form::label('No')!!}
              {!!Form::radio('carta_director', 'No', Null)!!}
           </div>
           <div class="col-xs-6">
             {!!Form::label('Coordinador Externo')!!}
             </br>
            {!!Form::label('Si')!!}
            {!!Form::radio('carta_coordinador', 'Si', Null)!!} &nbsp
            {!!Form::label('No')!!}
            {!!Form::radio('carta_coordinador', 'No', Null)!!}
           </div>
         </div>
       </div>
     </div><!--fin cartas de cumplimiento-->
  </div><!-- /.box-body -->
</div><!-- termina Informe-->
  
  <div class="row">
    <div class="col-xs-3">
    {!!Form::label('Finalizado')!!}
    {!!Form::select('finalizado', ['' => '', 'Si' => 'Si', 'No' => 'No'], null, ['class' => 'form-control'])!!}  
    </div>
  </div>

</div>
<hr>
