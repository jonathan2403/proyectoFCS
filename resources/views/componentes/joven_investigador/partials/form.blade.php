   {!! Form::label('Estudiante') !!}   
   {!! Form::text('estudiante', isset($joven_investigador->estudiante) ? $joven_investigador->estudiante->full_name : null,['class' => 'form-control', 'id' => 'nombre_estudiante','placeholder'=>'Buscar por Nombre o Código']) !!}
   <div id="label_oculto"></div>                     
   {!! Form::hidden('id_estudiante', null, ['id' => 'id_estudiante']) !!}

  {!! Form::label('Tutor') !!}                  
            {!! Form::hidden('id_profesor', null, ['id' => 'id_profesor']) !!}
            {!! Form::text('profesor', isset($joven_investigador->profesor) ? $joven_investigador->profesor->nombre : null,['class' => 'form-control', 'id' => 'nombre_profesor','placeholder'=>'Buscar por nombre o Cédula']) !!}
            <div id="label_oculto_profesor"></div>   
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





                    
                        
          