<div class="form-group">      
  {!! Form::open(['class' => 'formulario_validado', 'id' => 'tipo-evento-form'])!!}
  {!!Form::label('Nombre del Tipo de Evento')!!}
  {!!Form::text('nombre_tipoevento', null, ['class'=>'form-control', 'placeholder'=>'Ingrese El Tipo de Evento'])!!}   
  {!!Form::close()!!}
</div>