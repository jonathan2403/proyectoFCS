<div class="form-group">
    {!!Form::label('Acta de Consejo')!!}
    {!!Form::text('numero_consejo',null,['class'=>'form-control','placeholder'=>''])!!}
</br>
    {!!Form::label('Nombre del Evento')!!}
    {!!Form::text('nombre_evento',null,['class'=>'form-control','placeholder'=>''])!!}
  </br>

    {!!Form::label('Fecha de Realización')!!}<br>
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
        {!!Form::text('fecha', null, ['class' => 'picker form-control', 'readonly']);!!}
    </div></br>

    {!!Form::label('Área de Conocimiento')!!}<br>
    {!!Form::text('area_conocimiento',null,['class'=>'form-control','placeholder'=>''])!!}
</br>

    {!!Form::label('Tipo de Evento')!!}<br>
    {!!Form::select('id_tipoeventos', $tipo_evento, null, ['id' => 'id', 'class' => 'form-control'])!!}
</br>

    {!!Form::label('Ciudad')!!}
    {!!Form::text('ciudad',null,['class'=>'form-control','placeholder'=>''])!!}
</br>
    {!!Form::label('Valor Efectivo')!!}
    {!!Form::text('valor_efectivo',null,['class'=>'form-control','placeholder'=>''])!!}
</br>
    {!!Form::label('Horas Certificadas')!!}
    {!!Form::text('horas_certificadas',null,['class'=>'form-control','placeholder'=>''])!!}

<hr>

  <div class="box box-danger direct-chat direct-chat-warning collapsed-box">
         <div class="box-header with-border">
          <h3 class="box-title">Beneficiados</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
          </div>
        </div>
        <div class="box-body" style="display:none;">
          <table class="table table-bordered">
     <thead>
      <th><center>Participación UNILLANOS</center></th>
      <th><center>Participación Sectorial</center></th>      
     </thead>
     <tbody>
      <tr>
       <td><center>
        <dl class="dl-horizontal" style="font-size:15px">
         <dt>Administrativos </dt>
         <dd>{!!Form::text('beneficiados_administrativos', null, ['id' => 'entrega1', 'class'=>'form-control'])!!}</dd>
         <dt>Estudiantes </dt>
         <dd>{!!Form::text('beneficiados_estudiantes', null, ['id' => 'entrega1', 'class'=>'form-control'])!!}</dd>
         <dt>Egresados </dt>
         <dd>{!!Form::text('beneficiados_egresado', null, ['id' => 'entrega1', 'class'=>'form-control'])!!}</dd>
         <dt>Docentes</dt>
         <dd>{!!Form::text('beneficiados_docentes', null, ['id' => 'entrega1', 'class'=>'form-control'])!!}</dd>
        </dl></center>
       </td>
       <td><center>
       <dl class="dl-horizontal" style="font-size:15px">
        <dt>Sector Público </dt>
        <dd>{!!Form::text('beneficiados_publico', null, ['id' => 'entrega1', 'class'=>'form-control'])!!}</dd>
        <dt>Sector Privado </dt>
        <dd>{!!Form::text('beneficiados_privado', null, ['id' => 'entrega1', 'class'=>'form-control'])!!}</dd>
        <dt>Público en General </dt>
        <dd>{!!Form::text('beneficiados_general', null, ['id' => 'entrega1', 'class'=>'form-control'])!!}</dd>
         <dt>Academia </dt>
        <dd>{!!Form::text('beneficiados_academia', null, ['id' => 'entrega1', 'class'=>'form-control'])!!}</dd>
         <dt>Alianza Sectorial </dt>
        <dd>{!!Form::text('beneficiados_alianza', null, ['id' => 'entrega1', 'class'=>'form-control'])!!}</dd>
         <dt>Sociedad civil Organizada</dt>
        <dd>{!!Form::text('beneficiados_sociedad', null, ['id' => 'entrega1', 'class'=>'form-control'])!!}</dd>
        <dt>Otros</dt>
        <dd>{!!Form::text('beneficiados_otros', null, ['id' => 'entrega1', 'class'=>'form-control'])!!}</dd>
       </dl></center>
       </td>       
      </tr>
     </tbody>
    </table>

     <table class="table table-bordered">
     <thead>
        <th><center>Rangos Edades</center></th>
         <th><center>Participación por Genero</center></th>
     </thead>
     <tbody>
      <tr>
      <td><center>
       <dl class="dl-horizontal" style="font-size:15px">
        <dt>0 - 10 años </dt>
        <dd>{!!Form::text('beneficiados_0_10', null, ['id' => 'entrega1', 'class'=>'form-control'])!!}</dd>
        <dt>11 - 20 años </dt>
        <dd>{!!Form::text('beneficiados_11_20', null, ['id' => 'entrega1', 'class'=>'form-control'])!!}</dd>
        <dt>21 - 30 años </dt>
        <dd>{!!Form::text('beneficiados_21_30', null, ['id' => 'entrega1', 'class'=>'form-control'])!!}</dd>
        <dt>31 - 60 años</dt>
        <dd>{!!Form::text('beneficiados_31_60', null, ['id' => 'entrega1', 'class'=>'form-control'])!!}</dd>
        <dt>Mayores de 60 años</dt>
        <dd>{!!Form::text('beneficiados_mayores_60', null, ['id' => 'entrega1', 'class'=>'form-control'])!!}</dd>
       </dl></center>
       </td>

       <td><center>
       <dl class="dl-horizontal" style="font-size:15px">
        <dt>Hombres </dt>
        <dd>{!!Form::text('beneficiados_hombres', null, ['id' => 'entrega1', 'class'=>'form-control'])!!}</dd>
        <dt>Mujeres </dt>
        <dd>{!!Form::text('beneficiados_mujeres', null, ['id' => 'entrega1', 'class'=>'form-control'])!!}</dd>       
       </dl></center>
       </td>  
        </tr>
     </tbody>
    </table>
        </div><!-- /.box-body -->
</div><!-- /.box --> 
</br>
</div>
