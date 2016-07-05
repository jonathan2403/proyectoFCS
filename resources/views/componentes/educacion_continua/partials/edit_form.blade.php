  <div class="form-group">
    {!!Form::label('Nombre ')!!}
    {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>''])!!}
  </br>

  {!!Form::label('Director')!!}
  <div id="div_profesor">
            {!! Form::text('profesor', isset($educacion_continua->director) ? $educacion_continua->director->nombre : null,['class' => 'form-control', 'id' => 'nombre_profesor','placeholder'=>'Buscar por nombre o Cédula']) !!}
            <div id="label_oculto_profesor"></div>
            {!! Form::hidden('id_director', null, ['id' => 'id_director']) !!}
  </div>
</br>

  <div class="box box-danger">
    <div class="box-header with-border">
      <h3 class="box-title">Aprobación</h3>
    </div>
    <div class="box-body">
       <div class="row">
         <div class="col-xs-5">
           <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                {!!Form::text('fecha_aprobacion', null, ['class' => 'picker form-control', 'readonly', 'placeholder' => 'Fecha de Aprobación']);!!}
           </div>
         </div>
         <div class="col-xs-5">
                {!!Form::text('numero_acta', null, ['class'=>'form-control', 'placeholder' => 'Número de Acta'])!!}
         </div>
       </div>
    </div>
  </div>

  {!!Form::label('Fecha de Inicio')!!}
  <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
        {!!Form::text('fecha_inicio', null, ['class' => 'picker form-control', 'readonly']);!!}
      </div></br>

{!!Form::label('Área de Conocimiento')!!}<br>
{!!Form::text('area_conocimiento',null,['class'=>'form-control','placeholder'=>''])!!}
</br>

<div class="box box-danger">
  <div class="box-header with-border">
     <div class="row">
       <div class="col-xs-3">
         <h3 class="box-title">Lugar de Realización</h3>
       </div>
       <div class="col-xs-3">
         Nacional {!!Form::radio('contexto', 'n', true, ['class' => 'iradio_minimal-red'])!!}
       </div>
       <div class="col-xs-3">
         Internacional {!!Form::radio('contexto', 'i', false, ['class' => 'iradio_minimal-red'])!!}
       </div>
     </div>
  </div>
  <div class="box-body">
    <div class="row">
       @if($educacion_continua->contexto == 'n')
       <div id="div_lugar_nacional">
         <div class="col-xs-6">
         {!!Form::select('departamento', $departamentos, null, ['class' => 'form-control', 'id' => 'select_departamento', 'placeholder' => 'Seleccione Departamento'])!!}
       </div>
       <div class="col-xs-6">
         {!!Form::select('municipio', $municipios, null, ['class' => 'form-control', 'id' => 'select_municipio'])!!}
       </div>
       </div>
       <div id="div_lugar_internacional" style="display:none">
         <div class="col-xs-6">
           {!!Form::text('pais', null, ['class' => 'form-control', 'placeholder' => 'País', 'id'=>'text_pais'])!!}
         </div>
         <div class="col-xs-6">
           {!!Form::text('ciudad', null, ['class' => 'form-control', 'placeholder' => 'Ciudad', 'id' => 'text_ciudad'])!!}
         </div>
       </div>
       @else
       <div id="div_lugar_nacional" style="display:none">
         <div class="col-xs-6">
         {!!Form::select('departamento', $departamentos, null, ['class' => 'form-control', 'id' => 'select_departamento', 'placeholder' => 'Seleccione Departamento'])!!}
       </div>
       <div class="col-xs-6">
         {!!Form::select('municipio', ['an' => ''], null, ['class' => 'form-control', 'id' => 'select_municipio', 'disabled'])!!}
       </div>
       </div>
       <div id="div_lugar_internacional">
         <div class="col-xs-6">
           {!!Form::text('pais', null, ['class' => 'form-control', 'placeholder' => 'País', 'id'=>'text_pais'])!!}
         </div>
         <div class="col-xs-6">
           {!!Form::text('ciudad', null, ['class' => 'form-control', 'placeholder' => 'Ciudad', 'id' => 'text_ciudad'])!!}
         </div>
       </div>
       @endif
    </div><!--Cierra row-->
  </div>
</div>

{!!Form::label('Horas Certificadas')!!}
{!!Form::text('horas_certificadas',null,['class'=>'form-control','placeholder'=>''])!!}
</br>
{!!Form::label('Valor Efectivo')!!}
{!!Form::text('recurso',null,['class'=>'form-control','placeholder'=>''])!!}
</br>

<div class="box box-danger">
    <div class="box-header with-border">
     <h3 class="box-title">Fuentes de Financiación</h3>
    </div>
    <div class="box-body">
     <div class="row">
        <table class="table table-bordered">
           <tbody>
            <tr>
             <td><center>
              <dl class="dl-horizontal">
               <dt>Recurso Humano </dt>
               <dd>{!!Form::text('recurso_humano', null, ['id' => 'textos', 'class'=>'textos form-control'])!!}</dd>
               <dt>Compra de Muebles y Equipos </dt>
               <dd> {!!Form::text('muebles_equipo', null, ['id' => 'entrega1', 'class'=>'textos form-control', 'title' => 'Compra de Muebles y Equipos'])!!}</dd>
               <dt>Servicios </dt>
               <dd>{!!Form::text('servicios', null, ['id' => 'entrega1', 'class'=>'textos form-control', ''])!!}</dd>
             </dl></center>
           </td>
           <td><center>
             <dl class="dl-horizontal">
              <dt>Material Bibliográfico y Papeleria </dt>
              <dd>{!!Form::text('material', null, ['id' => 'entrega1', 'class'=>'textos form-control', 'title' => 'Material Bibliográfico y Papeleria'])!!}</dd>
              <dt>Gastos de Viaje </dt>
              <dd>{!!Form::text('gastos_viaje', null, ['id' => 'entrega1', 'class'=>'textos form-control'])!!}</dd>
              <dt>Otros Gastos </dt>
              <dd>{!!Form::text('otros_gastos', null, ['id' => 'entrega1', 'class'=>'textos form-control'])!!}</dd>
            </dl></center>
          </td>
          </tr>
          </tbody>
        </table>
     </div>
    </div>
</div>
</div>
