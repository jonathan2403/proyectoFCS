  <div class="form-group">
    {!!Form::label('Nombre ')!!}
    {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>''])!!}
  </br>

  {!!Form::label('Director')!!}
  {!!Form::select('id_director',$nombre_profesor->toArray(), null, ['class' => 'select form-control', 'placeholder' => '']) !!}
</br></br>
  
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
     <h3 class="box-title">Lugar de Realización</h3>
  </div>
  <div class="box-body">
    <div class="row">
       <div class="col-xs-4">
         {!!Form::text('pais',null,['class'=>'form-control','placeholder' => 'País'])!!}
       </div>
       <div class="col-xs-4">
         {!!Form::text('departamento',null,['class'=>'form-control','placeholder' => 'Departamento/Provincia'])!!}
       </div>
       <div class="col-xs-4">
          {!!Form::text('ciudad', null, ['class'=>'form-control', 'placeholder' => 'Ciudad', 'id' => 'text_unidad'])!!}   
       </div>
    </div>
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
               <dd> {!!Form::text('muebles_equipo', null, ['id' => 'entrega1', 'class'=>'textos form-control'])!!}</dd>
               <dt>Servicios </dt>
               <dd>{!!Form::text('servicios', null, ['id' => 'entrega1', 'class'=>'textos form-control'])!!}</dd>
             </dl></center>
           </td>
           <td><center>
             <dl class="dl-horizontal">
              <dt>Material Bibliografico y Papeleria </dt>
              <dd>{!!Form::text('material', null, ['id' => 'entrega1', 'class'=>'textos form-control'])!!}</dd>
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