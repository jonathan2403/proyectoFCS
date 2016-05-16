   {!! Form::label('Estudiante') !!}   
   {!! Form::text('estudiante', isset($nombre_estudiante) ? $nombre_estudiante:null,['class' => 'form-control', 'id' => 'nombre_estudiante','placeholder'=>'Nombre del Estudiante']) !!}
   <div id="label_oculto"></div>                     
   {!! Form::hidden('id_estudiante', null, ['id' => 'id_estudiante']) !!}

   </br>                    
   {!! Form::label('Tutor') !!}
   {!! Form::select('id_grupo', $grupos->toArray(), null, ['class' => 'select', 'placeholder' => '']) !!}
   	</br>

	</br>                    
   {!! Form::label('Grupo al que pertenece') !!}
   {!! Form::select('id_grupo', $grupos->toArray(), null, ['class' => 'select', 'placeholder' => '']) !!}
   	</br></br>

   {!!Form::label('Colciencias')!!}
	</br>
    {!!Form::label('Si')!!}
    {!!Form::radio('colciencias', 's', false)!!} &nbsp
    {!!Form::label('No')!!}
    {!!Form::radio('colciencias', 'n', false)!!}
	</br></br>
               
   {!! Form::label('Institución') !!}
   {!! Form::select('id_grupo', $grupos->toArray(), null, ['class' => 'select', 'placeholder' => '']) !!}
   	</br></br>

   {!! Form::label('Producto') !!}
   {!! Form::text('estudiante', isset($nombre_estudiante) ? $nombre_estudiante:null,['class' => 'form-control', 'id' => 'nombre_estudiante','placeholder'=>'']) !!}
   </br>





                    
                        
          