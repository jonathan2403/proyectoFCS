  <div class="form-group">
    {!!Form::label('Nombre ')!!}
    {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'', 'required'])!!}
  </br>

  {!!Form::label('Director')!!}
  {!!Form::select('id_director',$nombre_profesor->toArray(), null, ['class' => 'select form-control', 'placeholder' => '', 'required']) !!}
</br></br>
  
  {!!Form::label('Fecha de Aprobación')!!}
  <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
        {!!Form::text('fecha_aprobacion', null, ['class' => 'picker form-control', 'readonly']);!!}
      </div></br>

  {!!Form::label('N° de Acta')!!}
  {!!Form::text('numero_acta', null, ['class'=>'form-control', 'placeholder'=>''])!!}</br>

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

<table  class="table table-condensed">
  <thead>
    <th><center><font size = "3px">País</center></font></th>
    <th><center><font size = "3px">Departamento / Provincia</center></font></th>
    <th><center><font size = "3px">Ciudad</center></font></th>
  </thead>
  <tbody>
    <tr>
     <td>
       {!!Form::text('pais',null,['class'=>'form-control','placeholder'=>''])!!}
     </td>
     <td><center>{!!Form::text('departamento',null,['class'=>'form-control','placeholder'=>''])!!}</center></td>
     <td><center>{!!Form::text('ciudad', null, ['class'=>'form-control', 'placeholder'=>'', 'id' => 'text_unidad'])!!}</center></td>
   </tr>
 </tbody>
</table>

{!!Form::label('Horas Certificadas')!!}
{!!Form::text('horas_certificadas',null,['class'=>'form-control','placeholder'=>''])!!}
</br>
{!!Form::label('Valor Efectivo')!!}
{!!Form::text('recurso',null,['class'=>'form-control','placeholder'=>''])!!}
</br>

<font size="4px"><b><center>Fuentes De Financiación</center></b></font>
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
</br>
</div>
