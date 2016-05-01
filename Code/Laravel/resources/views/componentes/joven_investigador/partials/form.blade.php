
   {!! Form::text('estudiante', null,['class' => 'form-control', 'id' => 'nombre_estudiante','placeholder'=>'Nombre del Estudiante']) !!}
   <div id="label_oculto"></div>                     
   {!! Form::hidden('id_estudiante', null, ['id' => 'id_estudiante']) !!}
	</br>                    
   {!! Form::select('id_grupo', $grupos->toArray(), null, ['class' => 'select', 'placeholder' => '']) !!}
   	</br></br>
                    
                        
                   