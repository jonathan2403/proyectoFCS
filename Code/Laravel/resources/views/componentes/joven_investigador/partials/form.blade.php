   {!! Form::label('Estudiante') !!}   
   {!! Form::text('estudiante', isset($nombre_estudiante) ? $nombre_estudiante:null,['class' => 'form-control', 'id' => 'nombre_estudiante','placeholder'=>'Nombre del Estudiante']) !!}
   <div id="label_oculto"></div>                     
   {!! Form::hidden('id_estudiante', null, ['id' => 'id_estudiante']) !!}

  {!! Form::label('Tutor') !!}
    <div id="label_oculto_profesor"></div>                     
            {!! Form::hidden('id_profesor', null, ['id' => 'id_profesor']) !!}
            {!! Form::text('profesor', null,['class' => 'form-control', 'id' => 'nombre_profesor','placeholder'=>'Buscar por nombre o Cédula']) !!}
    </br>
                   
   {!! Form::label('Grupo al que pertenece') !!}
   {!! Form::select('id_grupo', $grupos->toArray(), null, ['class' => 'select form-control', 'placeholder' => '', 'id' => 'select_id_grupo']) !!}
   	</br>

   {!!Form::label('Colciencias')!!}
	</br>
    {!!Form::label('Si')!!}
    {!!Form::radio('colciencias', 's', false, ['class' => 'iradio_minimal-red'])!!} &nbsp
    {!!Form::label('No')!!}
    {!!Form::radio('colciencias', 'n', true, ['class' => 'iradio_minimal-red'])!!}
	</br></br>
               
   {!! Form::label('Institución') !!}
   {!! Form::select('id_institucion', $instituciones->toArray(), null, ['class' => 'select form-control', 'placeholder' => '']) !!}
   	</br>

   {!! Form::label('Producto') !!}
   {!! Form::text('producto', null, ['class' => 'form-control']) !!}
   </br>





                    
                        
          